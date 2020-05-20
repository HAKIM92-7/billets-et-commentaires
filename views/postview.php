<?php $title = $post['titre'];?>

<?php ob_start();?>




<h1>Bienvenue à mon Blog !!</h1>




<div class="news">


<h2> <?php echo '' . $post['titre'] . '     ' . $post['date_billet'] . ''; ?>  <h2/>
<p> <?php echo $post['contenu']; ?>  <br/>


<br/>

<div/>



<h2>Commentaires</h2>


<form  method="POST" action="index.php?action=addComment&amp;id=<?=$post['id']?>">
    <div>
        <label for="author">Auteur</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment" rows="8" cols="40"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>



<?php

while ($data = $comments->fetch()) {

    echo $data['auteur'] . ' : ' . $data['date_commentaire'] . '<a href=\'editcomment.php?id_comment=' . $data['id'] . '&amp;id_post=' . $post['id'] . '\'>(Modifier)</a><br/>';
    echo $data['commentaire'] . '<br/>';

}

?>


<?php $content = ob_get_clean();?>
<?php require 'template.php'?>

