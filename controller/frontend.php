<?php

use App\frontend\PostManager;
use App\frontend\CommentManager;

function homePage()
{
    $twig = loadTwig();

    echo $twig->render('/frontend/home.twig', ['title' => 'Star Movies -Accueil']);
}

function listPosts()
{
    $twig = loadTwig();
    $postManager = new PostManager();
    // Pagination
    $page = (int) ($_GET['page'] ?? 1);
    $limit = 6;
    $start = ceil(($page - 1) * $limit);
    $count = $postManager->pagingCountPosts();
    $pages = ceil($count / $limit);
    if ($page > $pages) {
        throw new Exception('Cette page n\'existe pas.');
    }

    $posts = $postManager->getPosts($limit, $start);

    echo $twig->render('/frontend/listPosts.twig', ['post' => $posts, 'page' => $page, 'number_of_pages' => $pages, 'title' => 'Liste des articles']);
    $posts->closeCursor();
}

function listPopularMovies()
{
    $twig = loadTwig();

    echo $twig->render('/frontend/popularMovies.twig', ['title' => 'Liste des films populaires']);
}

function releasedMovies()
{
    $twig = loadTwig();

    echo $twig->render('/frontend/releasedMovies.twig', ['title' => 'Les films sortis en salles']);
}

function topRatedMovies()
{
    $twig = loadTwig();

    echo $twig->render('/frontend/topRatedMovies.twig', ['title' => 'Les films les mieux noté']);
}

function movie_view()
{
    $twig = loadTwig();

    $title = $_GET['title'];
    $date = $_GET['date'];
    $overview = $_GET['overview'];
    $image = $_GET['image'];
    $date = $_GET['date'];
    $vote_average = $_GET['vote_average'];

    echo $twig->render('/frontend/movieView.twig', ['title' => $title, 'date' => $date, 'overview' => $overview, 'image' => $image, 'vote_average' => $vote_average]);
}

function post($postId)
{
    $twig = loadTwig();

    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $comments = $commentManager->getComments($postId);
    $result = $postManager->getPost($postId);
    if ($comments == false) {
        throw new Exception("Error de récupération des commentaires.", 1);
    } elseif ($result == false) {
        throw new Exception("Error de récupération du post.", 1);
    } else {
        $post = $result['post'];
        $figCaption = $result['figCaption'];
        echo $twig->render('/frontend/postView.twig', ['post' => $post, 'comment' => $comments, 'title' => $post['title'], 'figCaption' => $figCaption]);
    }
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $insertline = $commentManager->postComment($postId, $author, $comment);

    if ($insertline == false) {
        throw new Exception("Impossible d\'ajouter le commentaire !", 1);
    } else {
        header('location:index.php?action=post&id=' . $postId);
    }
}

function addReportComment($idComment)
{
    $commentManager = new CommentManager();

    $commentManager->reportComment($idComment);
}
