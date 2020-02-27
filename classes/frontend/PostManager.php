<?php

namespace App\frontend;

class PostManager extends Manager
{

    public function getPosts($limit, $start)
    {
        $db = $this->dbConnect();

        $sql_posts = ("SELECT `p5_oc_posts`.`id` ,`p5_oc_posts`.`title`, `p5_oc_posts`.`content`, `p5_oc_posts`.`author`, `p5_oc_posts`.`creation_date`, `p5_oc_posts`.`last_modification`, `p5_oc_posts_images`.`image_post`, `p5_oc_posts_images`.`image_caption`, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%i') AS formatted_date FROM `p5_oc_posts` LEFT JOIN `p5_oc_posts_images` ON `p5_oc_posts_images`.`post_id` = `p5_oc_posts`.`id` ORDER BY creation_date DESC LIMIT :limit OFFSET :start");
        $request_posts = $db->prepare($sql_posts) or die(print_r($db->errorInfo()));

        $request_posts->bindValue('limit', $limit, \PDO::PARAM_INT);
        $request_posts->bindValue('start', $start, \PDO::PARAM_INT);

        $request_posts->execute();

        return $request_posts;
        $request_posts->closeCursor();
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT *, DATE_FORMAT(creation_date, '%d/%m/%Y à %Hh%i') AS formatted_date FROM p5_oc_posts WHERE id = ?") or die(print_r($db->errorInfo()));;
        $request_post_image = $db->prepare("SELECT * FROM `p5_oc_posts_images` WHERE `post_id` = ? ORDER BY `p5_oc_posts_images`.`id` DESC") or die(print_r($db->errorInfo()));
        $request_post_image->execute(array($postId));

        $req->execute(array($postId));
        $post = $req->fetch();
        $figCaption = $request_post_image->fetch();

        return array(
            'post' => $post,
            'figCaption' => $figCaption
        );
        $post->closeCursor();
    }

    public function pagingCountPosts()
    {
        $db = $this->dbConnect();

        $sql_paging = "SELECT COUNT(id) FROM `p5_oc_posts`";
        $count = (int) $db->query($sql_paging)->fetch(\PDO::FETCH_NUM)[0];

        return $count;
    }

    public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare("INSERT INTO `p5_oc_comments`(`post_id`, `author`, `comment`, `comment_date`) VALUES (?,?,?,NOW())");
        $insertline = $comments->execute(array($postId, $author, $comment));

        return $insertline;
    }
}
