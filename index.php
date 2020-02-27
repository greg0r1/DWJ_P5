<?php
require 'controller/frontend.php';
require 'controller/backend.php';
require_once './vendor/autoload.php';
session_start();

// Rendu du template
function loadTwig()
{
    $loader = new Twig\Loader\FilesystemLoader('./templates');
    $twig = new Twig\Environment(
        $loader,
        [
            'cache' => false, //__DIR__ . '/tmp'
            'debug' => true
        ]
    );
    $twig->addExtension(new \Twig\Extension\DebugExtension());
    return $twig;
}

try {
    if (isset($_GET['action'])) {
        // Frontend
        if ($_GET['action'] == 'home') {
            homePage();
        } elseif ($_GET['action'] == 'listPosts') {
            listPosts();
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $postId = $_GET['id'];
                post($postId);
            } else {
                throw new Exception('Erreur : aucun identifiant de billet envoyé', 1);
            }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    $_POST['author'] = strip_tags($_POST['author']);
                    $_POST['comment'] = strip_tags($_POST['comment']);
                    session_start();
                    $_SESSION['author'] = $_POST['author'];

                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                    $_POST['author'] = strip_tags($_POST['author']);
                    $_POST['comment'] = strip_tags($_POST['comment']);
                } else {
                    throw new Exception("Erreur : tous les champs ne sont pas remplis !", 1);
                }
            } else {
                throw new Exception("Erreur : aucun identifiant de billet envoyé", 1);
            }
        } elseif ($_GET['action'] == 'popularMovies') {
            listPopularMovies();
        } elseif ($_GET['action'] == 'releasedMovies') {
            releasedMovies();
        } elseif ($_GET['action'] == 'topRatedMovies') {
            topRatedMovies();
        } elseif (($_GET['action'] == 'home') && ($_GET['logStatus'] == 'logOut')) {
            $_SESSION['first_name'] = $_SESSION[''];
            session_destroy();
            header('location:index.php');
        } elseif ($_GET['action'] == 'loginCnx') {
            loginCnx();
        }

        // Backend
        elseif (isset($_SESSION['first_name'])) {
            if ($_GET['action'] == 'adminCnx') {
                adminCnx();
            } elseif ($_GET['action'] == 'reportedComment') {
                if (isset($_POST['reported'])) {
                    $idComment = $_GET['commentId'];
                    addReportComment($idComment);
                    $postId = isset($_GET['postId']) ? $_GET['postId'] : listPosts();
                    post($postId);
                } else {
                    $postId = isset($_GET['postId']) ? $_GET['postId'] : listPosts();
                    post($postId);
                }
            } elseif ($_GET['action'] == 'createPost') {
                createPost();
            } elseif ($_GET['action'] == 'addPost') {
                if (isset($_POST['tinymceTitle']) && isset($_POST['tinymceContent'])) {
                    $_POST['tinymceTitle'] = strip_tags($_POST['tinymceTitle']);
                    $_POST['tinymceContent'] = strip_tags($_POST['tinymceContent']);
                    addPost();
                }
            } elseif ($_GET['action'] == 'adminListPosts') {
                listPostsCRUD();
            } elseif ($_GET['action'] == 'editPost') {
                if (isset($_GET['id'])) {
                    $postId = $_GET['id'];
                    editPost($postId);
                } else {
                    listPostsCRUD();
                }
            } elseif ($_GET['action'] == 'updatePost') {
                if (!empty($_POST['tinymceTitle']) || !empty($_POST['tinymceContent'])) {
                    $idPost = $_GET['idPost'];
                    $title = $_POST['tinymceTitle'];
                    $content = $_POST['tinymceContent'];
                    updatePost($idPost, $title, $content);
                } else {
                    throw new Exception("Erreur de contenu. Les données du formulaire sont vides.", 1);
                }
            } elseif ($_GET['action'] == 'deletePost') {
                if (isset($_GET['id']) && !empty($_GET['id'])) {
                    $idPost = $_GET['id'];
                    deletingPost($idPost);
                } else {
                    throw new Exception("Erreur d\'identification du post", 1);
                }
            } elseif ($_GET['action'] == 'commentsList') {
                listCommentsCRUD();
            } elseif ($_GET['action'] == 'editComment') {
                if (isset($_GET['id'])) {
                    $commentId = $_GET['id'];
                    editComment($commentId);
                } else {
                    listCommentsCRUD();
                }
            } elseif ($_GET['action'] == 'updateComment') {
                if (!empty($_POST['tinymceTitle']) || !empty($_POST['tinymceContent'])) {
                    $idComment = $_GET['idComment'];
                    $comment = $_POST['tinymceContent'];
                    updateComment($idComment, $comment);
                } else {
                    throw new Exception("Erreur de contenu. Les données du formulaire sont vides.", 1);
                }
            } elseif ($_GET['action'] == 'reportedCommentsList') {
                reportedCommentsListCRUD();
            } elseif ($_GET['action'] == 'deleteComment') {
                if (isset($_GET['idComment']) && !empty($_GET['idComment'])) {
                    $idComment = $_GET['idComment'];
                    deletingComment($idComment);
                } else {
                    throw new Exception("Erreur d'identification du commentaire", 1);
                }
            } else {
                header('location:index.php?action=listPosts&page=1');
            }
        } else {
            header('location:index.php');
        }
    } else {
        header('location:index.php?action=home');
    }
} catch (Exception $e) {
    echo 'Erreur: ' . $e->getMessage();
}
