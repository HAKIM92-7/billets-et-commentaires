<?php

require_once 'models/PostManager.php';
require_once 'models/CommentManager.php';

function listPosts()
{
    $postmanager = new PostManager();

    $posts = $postmanager->getBillets();

    require 'views/affichage_acceuil_billets.php';

}

function Post()
{$postmanager = new PostManager();
    $commentmanager = new CommentManager();

    $post = $postmanager->getBillet($_GET['billet']);
    $comments = $commentmanager->getcommentaires($_GET['billet']);

    require 'views/postview.php';

}

function addComment($postid, $author, $comment)
{
    $commentmanager = new CommentManager();

    $affectedLines = $commentmanager->postComment($postid, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=Post&billet=' . $postid);
    }

}

function editcomment($idpost, $idcomment, $comment)
{
    $commentmanager = new CommentManager();

    $newcomment = $commentmanager->changecomment($idcomment, $comment);

    if ($newcomment === false) {

        throw new Exception('Impossible d\'ajouter le commentaire !');} else {header('Location:index.php?action=Post&billet=' . $idpost);}

}
