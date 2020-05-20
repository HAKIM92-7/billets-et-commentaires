<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

      
<link rel="stylesheet" href="style2.css" />  

    <title>MON BLOG DE NEWS</title> 





</head>

<body>

<h1>Bienvenue à mon Blog !!</h1>

<?php

while ($data=$posts->fetch())
{?>

<div class="news">


<h2> <?php echo ''.$data['titre'] . '     '.$data['date_billet'].'';?>  <h2/>
<p> <?php echo $data['contenu'];?>  <br/>

<p><a href="billets.php?action=Post&amp;billet=<?php echo $data['id'];?>" title="cliquez"> commentaires </a></p>

<br/>

<div/>




<?php
}
$posts->closeCursor();

?>

</body>

</html>