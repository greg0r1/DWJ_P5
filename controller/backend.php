<?php

use App\backend\Login;
use App\backend\PostManagerBo;
use App\backend\CommentManagerBo;

function loginForm()
{
    $twig = loadTwig();

    echo $twig->render('/backend/login.twig', ['title' => 'Connexion']);
}

function loginCnx()
{
    $loginAuth = new Login();
    $loginAuth->authAdmin();
}

function adminCnx()
{
    $twig = loadTwig();
    echo $twig->render('/backend/home.twig', ['title' => 'Accueil - Admin', 'session' => $_SESSION['first_name']]);
}

function createPost()
{
    $twig = loadTwig();
    echo $twig->render('/backend/createPost.twig', ['title' => 'Création de post', 'session' => $_SESSION['first_name']]);
}

function addPost()
{
    $twig = loadTwig();

    $postManager = new PostManagerBo();
    $postManager->addNewPost();
    $postManager->addImage();

    $name = $_SESSION['first_name'];
    echo $twig->render('/backend/addedPost.twig', ['name' => $name, 'addImageOk' => $postManager->_message_Ok]);
}

function listPostsCRUD()
{
    $twig = loadTwig();

    $postManager = new PostManagerBo();

    // Pagination
    $page = (int) ($_GET['page'] ?? 1);
    $limit = 10;
    $start = ($page - 1) * $limit;
    $count = $postManager->paging();
    $number_of_pages = ceil($count / $limit);

    $posts = $postManager->getPostsCRUD($limit, $start);

    echo $twig->render('/backend/listPosts.twig', ['posts' => $posts, 'page' => $page, 'number_of_pages' => $number_of_pages, 'number_total_posts' => $count, 'title' => 'Gestionnaire de Billets', 'session' => $_SESSION['first_name']]);
    $posts->closeCursor();
}

function editPost($postId)
{
    $twig = loadTwig();

    $postManager = new PostManagerBo();

    $result = $postManager->getPostCRUD($postId);
    $post = $result['post'];
    $figCaption = $result['figCaption'];
    echo $twig->render('/backend/editPost.twig', ['post' => $post, 'figCaption' => $figCaption, 'title' => 'Modification du billet', 'session' => $_SESSION['first_name']]);
}

function updatePost($idPost, $title, $content)
{
    $twig = loadTwig();

    $postManager = new PostManagerBo();

    $postManager->updatingPost($idPost, $title, $content);
    $postManager->addImage();
    echo $twig->render('/backend/updatedPost.twig', ['idPost' => $idPost, 'addImageOk' => $postManager->_message_Ok, 'session' => $_SESSION['first_name']]);
}

function deletingPost($idPost)
{
    $twig = loadTwig();

    $postManager = new PostManagerBo();

    $postManager->deletePost($idPost);
    echo $twig->render('/backend/deletedPost.twig', ['idPost' => $idPost]);
}

function listCommentsCRUD()
{
    $twig = loadTwig();

    $commentManager = new CommentManagerBo();

    // Pagination
    $page = (int) ($_GET['page'] ?? 1);
    $limit = 10;
    $start = ($page - 1) * $limit;
    $count = $commentManager->paging();
    $pages = ceil($count / $limit);
    if ($page > $pages) {
        throw new Exception('Cette page n\'existe pas.');
    }

    $comments = $commentManager->getCommentsCRUD($limit, $start);
    if ($comments == false) {
        throw new Exception("Erreur: Les commentaires n'ont pas été récupérés.", 1);
    } else {
        echo $twig->render('/backend/listComments.twig', ['comments' => $comments, 'page' => $page, 'number_total_comments' => $count, 'number_of_pages' => $pages, 'title' => 'Gestionnaire de commentaires', 'session' => $_SESSION['first_name']]);
        $comments->closeCursor();
    }
}

function editComment($commentId)
{
    $twig = loadTwig();

    $commentManager = new CommentManagerBo();

    $comment = $commentManager->modifyCommentCRUD($commentId);
    echo $twig->render('/backend/editComment.twig', ['comment' => $comment, 'title' => 'Modification du commentaire', 'session' => $_SESSION['first_name']]);
}

function updateComment($idComment, $comment)
{
    $twig = loadTwig();

    $commentManager = new CommentManagerBo();

    $commentManager->updatingComment($idComment, $comment);
    echo $twig->render('/backend/updatedComment.twig', ['idComment' => $idComment, 'session' => $_SESSION['first_name']]);
}

function reportedCommentsListCRUD()
{
    $twig = loadTwig();

    $commentManager = new CommentManagerBo();

    // Pagination
    $page = (int) ($_GET['page'] ?? 1);
    $limit = 10;
    $start = ($page - 1) * $limit;
    $count = $commentManager->pagingReportedCommentsList();
    $number_of_pages = ceil($count / $limit);


    $comments = $commentManager->getReportedCommentsCRUD($limit, $start);
    if ($comments == false) {
        throw new Exception("Erreur: Les commentaires signalés n'ont pas été récupérés.", 1);
    } else {
        echo $twig->render('/backend/reportedCommentsList.twig', ['comments' => $comments, 'page' => $page, 'number_total_comments' => $count, 'number_of_pages' => $number_of_pages, 'title' => 'Gestionnaire de commentaires reportés', 'session' => $_SESSION['first_name']]);
        $comments->closeCursor();
    }
}

function deletingComment($idComment)
{
    $twig = loadTwig();

    $commentManager = new CommentManagerBo();

    $deleteComment = $commentManager->deleteComment($idComment);
    if ($deleteComment == false) {
        throw new Exception("Erreur: le commentaire n'a pas été supprimé.", 1);
    } else {
        echo $twig->render('/backend/deletedComment.twig', ['idComment' => $idComment, 'session' => $_SESSION['first_name']]);
        $deleteComment->closeCursor();
    }
}
