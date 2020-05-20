
<?php
require('controller.php');

try{

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
    }
    elseif ($_GET['action'] == 'Post') {
        if (isset($_GET['billet']) && $_GET['billet'] > 0) {
            Post();
        }
        else {
            throw new Exception ('Erreur : aucun identifiant de billet envoyé');
        }
    }


    elseif ($_GET['action']=='addComment')
         {if  (isset($_GET['id']) && $_GET['id'] > 0) 
            {if (!empty($_POST['author']) && !empty($_POST['comment'])) 
             

                 {  addComment($_GET['id'],$_POST['author'],$_POST['comment'] ); }

            

            else 
          
                 { throw new Exception('champs non remplis');} }

        else {

            throw new Exception ('aucun identifiant de billet envoyé');


            }
        }
        
        
        elseif ($_GET['action']=='Editcomment')
        {if  (isset($_GET['id_post']) && $_GET['id_post'] > 0) 
           {if (!empty($_POST['newcomment']))
            

                {  editcomment($_GET['id_post'],$_GET['id_comment'],$_POST['newcomment'] ); }

           

           else 
         
                { throw new Exception('champs non remplis');} }

       else {

           throw new Exception ('aucun identifiant de billet envoyé');


           }
       }   


     }

else {
    listPosts();
}

}

catch (Exception $e)
  
  {
    die('Erreur:'.$e->getMessage());
  
  }










