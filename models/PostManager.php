<?php

require_once 'Manager.php';

class PostManager extends Manager
{
    public function getBillets()
    {

        $db = $this->connectiondb();
        $req = $db->query('SELECT id,titre,contenu,date_billet  FROM billets');

        return $req;

    }

    public function getBillet($postid)
    {

        $db = $this->connectiondb();

        $req = $db->prepare('SELECT id,titre,contenu,date_billet FROM billets WHERE id= ?');

        $req->execute(array($postid));

        $post = $req->fetch();

        return $post;

    }

}
