<?php

namespace App\backend;

class PostManagerBo extends ManagerBo
{
    private $_target_file;
    public $message_Ok;

    public function __construct()
    {
        $this->_target_file = 'images/backend/' . basename($_FILES["submitFileToUpload"]["name"]);
    }

    public function addNewPost($title, $content, $author, $image_post, $image_caption)
    {
        $db = $this->dbConnect();
        $sql = "INSERT INTO `p5_oc_posts`(`title`, `content`, `author`, `creation_date`) VALUES (:title,:content,:author,NOW())";
        $newPost = $db->prepare($sql);
        $newPost->execute(array(
            'title' => $title,
            'content' => $content,
            'author' => $author,
        ));

        $postId = (int) $db->query('SELECT MAX(id) FROM `p5_oc_posts`')->fetch(\PDO::FETCH_NUM)[0];

        $newImage = $db->prepare('INSERT INTO `p5_oc_posts_images`(`post_id`, `image_post`, `image_caption`) VALUES (:post_id, :image_post, :image_caption)');
        $newImage->execute(array(
            'post_id' => $postId,
            'image_post' => $image_post,
            'image_caption' => $image_caption
        ));

        $newPost->closeCursor();
        $newImage->closeCursor();
    }

    public function getPostsCRUD($limit, $start)
    {
        $db = $this->dbConnect();

        $sql_posts = ("SELECT `p5_oc_posts`.`id` ,`p5_oc_posts`.`title`, `p5_oc_posts`.`content`, `p5_oc_posts`.`author`, `p5_oc_posts`.`creation_date`, DATE_FORMAT(`last_modification`, '%d/%m/%Y à %Hh%i') AS formatted_date_modif, `p5_oc_posts_images`.`image_post`, `p5_oc_posts_images`.`image_caption`, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%i') AS formatted_date FROM `p5_oc_posts` LEFT JOIN `p5_oc_posts_images` ON `p5_oc_posts_images`.`post_id` = `p5_oc_posts`.`id` ORDER BY creation_date DESC LIMIT :limit OFFSET :start");
        $request_posts = $db->prepare($sql_posts) or die(print_r($db->errorInfo()));
        $request_posts->bindValue('limit', $limit, \PDO::PARAM_INT);

        $request_posts->bindValue('start', $start, \PDO::PARAM_INT);

        $request_posts->execute();


        return $request_posts;
    }

    public function paging()
    {
        $db = $this->dbConnect();

        $sql_paging = "SELECT COUNT(id) AS number_total_posts FROM `p5_oc_posts`";
        $count = (int) $db->query($sql_paging)->fetch(\PDO::FETCH_NUM)[0];

        return $count;
    }

    public function getPostCRUD($postId)
    {
        $db = $this->dbConnect();
        $request_post = $db->prepare("SELECT * FROM `p5_oc_posts` WHERE id = ?") or die(print_r($db->errorInfo()));
        $request_post_image = $db->prepare("SELECT * FROM `p5_oc_posts_images` WHERE `post_id` = ? ORDER BY `p5_oc_posts_images`.`id` DESC") or die(print_r($db->errorInfo()));

        $request_post->execute(array($postId));
        $request_post_image->execute(array($postId));
        $post = $request_post->fetch();
        $figCaption = $request_post_image->fetch();
        return array(
            'post' => $post,
            'figCaption' => $figCaption
        );
        $request_post->closeCursor();
    }

    public function updatingPost($idPost, $title, $content, $image_post, $image_caption)
    {
        $db = $this->dbConnect();
        $request_post = $db->prepare("UPDATE `p5_oc_posts` SET `title`= :title,`content`= :content, `last_modification`= NOW() WHERE id = :idPost");
        $request_post->execute(array(
            'title' => $title,
            'content' => $content,
            'idPost' => $idPost
        ));

        $request_post = $db->prepare("UPDATE `p5_oc_posts_images` SET `image_post`= :image_post,`image_caption`= :image_caption WHERE `post_id` = :idPost");
        $request_post->execute(array(
            'idPost' => $idPost,
            'image_post' => $image_post,
            'image_caption' => $image_caption
        ));


        if ($request_post == false) {
            throw new \Exception("Erreur: Le billet n'a pas été modifié.", 1);
        }
        $request_post->closeCursor();
    }

    public function deletePost($idPost)
    {
        $db = $this->dbConnect();
        $request_post = $db->prepare("DELETE FROM `p5_oc_posts` WHERE id = :idPost");
        $request_post->execute(array(
            'idPost' => $idPost
        ));
        if ($request_post == false) {
            throw new \Exception("Erreur: Le billet n'a pas été supprimé.", 1);
        }
        $request_post->closeCursor();
    }

    public function addImage()
    {
        if (isset($_FILES['submitFileToUpload']) && $_FILES['submitFileToUpload']['error'] == 0) {
            if ($_FILES['submitFileToUpload']['size'] <= 1048576) {

                $fileInfo = pathinfo($_FILES['submitFileToUpload']['name']);
                $extension_upload = $fileInfo['extension'];
                $extensions_allowed = array('jpg', 'jpeg', 'gif', 'png');

                if (in_array($extension_upload, $extensions_allowed)) {
                    move_uploaded_file($_FILES['submitFileToUpload']['tmp_name'], $this->_target_file);
                } else {
                    throw new \Exception('Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.');
                }
            } else {
                throw new \Exception('Désolé, seuls les fichiers inférieurs à 1Mo sont autorisés.');
            }
        } else {
            switch ($_FILES['submitFileToUpload']['error']) {
                case 1:
                    $message = "La taille du fichier téléchargé excède la valeur de upload_max_filesize, configurée dans le php.ini.";
                    break;
                case 2:
                    $message = "La taille du fichier téléchargé excède la valeur de MAX_FILE_SIZE, qui a été spécifiée dans le formulaire HTML.";
                    break;
                case 3:
                    $message = "Le fichier n'a été que partiellement téléchargé.";
                    break;
                case 4:
                    $message = "Aucun fichier n'a été téléchargé.";
                    break;
                case 6:
                    $message = "Un dossier temporaire est manquant. Introduit en PHP 5.0.3.";
                    break;
                case 7:
                    $message = "Échec de l'écriture du fichier sur le disque. Introduit en PHP 5.1.0.";
                    break;
                case 8:
                    $message = "Une extension PHP a arrêté l'envoi de fichier. PHP ne propose aucun moyen de déterminer quelle extension est en cause. L'examen du phpinfo() peut aider. Introduit en PHP 5.2.0.";
                    break;
                default:
                    $message = "Erreur inconnue";
                    break;
            }
            echo '<script>alert("' . $message . '")</script>';
        }
    }
}
