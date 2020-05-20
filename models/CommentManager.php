<?php 

require_once('Manager.php');

class CommentManager extends Manager

{
    public function getcommentaires($postid) {

        $db=$this->connectiondb();
      
      
        $comments=$db -> prepare('SELECT id,id_billet,auteur,commentaire,date_commentaire FROM commentaires WHERE id_billet= ?' );
        $comments->execute(array($postid));
      
        return $comments ;
      
      }
      
      
      
      
      
    public function postComment($postid,$author,$comment)
      
      { 
        $db=$this->connectiondb();
      
        $comments=$db->prepare('INSERT INTO commentaires (id_billet,auteur,commentaire,date_commentaire) VALUES (?,?,?,NOW())');
        $affectedlines=$comments->execute(array($postid,$author,$comment));
      
      
        return $affectedlines ;
      
      }

   public function changecomment($idcomment,$comment2)   

   {

    $db=$this->connectiondb();

    $comment=$db->prepare ('UPDATE commentaires SET commentaire=:newcomment WHERE id=:idcomment');
    $newcomment=$comment->execute(array(
      'idcomment'=>$idcomment,
      'newcomment'=>$comment2));

    return $newcomment;
      
  }
      
      
      
      
     



}