<?php
require_once '../src/db.php';
require_once '../src/models/PostModel.php';

$post_manager = new \models\PostManager($pdo);
$posts = $post_manager->getPosts();

foreach ($posts as $post) {
    echo $post->title;
}
