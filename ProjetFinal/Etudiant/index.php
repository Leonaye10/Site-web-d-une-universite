<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <title></title>
    <link rel="stylesheet" href="../style/index.css">
</head>
<center>
<body style="text-align:center;margin-left:15%;background-color:#A9A9A9;">
<!--logo-->

<div style="height:25%;width:80%;border:2px solid black;">
        <div class="logo">
			<h1>Universite Naye</h1>
			<h3><?php echo "Bonjour " .$_SESSION['nom_etud']; ?></h3>
        </div>

        <nav>
            <ul>
                <li style="display: inline"><a class="item-menu" href="../index.php">Acceuil</a></li>
                <li style="display: inline;margin-left:50px "><a class="item-menu" href="index.php?choix=liste">Liste des cours</a></li>
				<li style="display: inline;margin-left:50px "><a class="item-menu" href="index.php?choix=bulletin">Bulletin</a></li>
				<li style="display: inline;margin-left:50px "><a class="item-menu" href="index.php?choix=facture">Facture</a></li>
            </ul>

        </nav>
 </div>
 
</center>
</body>
</html>
 
    <?php
    if(isset($_REQUEST['choix']))
    {
        $choix=$_REQUEST['choix'];
        switch($choix)
        {
            case'liste';
                include("Liste.php");
                break;
            case'bulletin';
                include("Bulletin.php");
                break;
            case'facture';
                include("Facture.php");
                break;
            default;
                include("");
        }
    }
    ?>


