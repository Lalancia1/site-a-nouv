<?php
?>

<html lang="fr">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>les cv de la promotion1</title>
</head>
<body>
<?php
$conn = new mysqli('localhost','root','', 'administration_formation');

include ('connexioncv.php');

$req = "SELECT nom_apprenant, id " . "FROM dossiers_apprenants_promo1 ORDER BY nom_apprenant";

$ret = mysqli_query ($conn,$req) or die (mysqli_error ($conn));
$sql= "SELECT * FROM dossiers_apprenants_promo1";
while ( $col = mysqli_fetch_row ($ret) )
{
    echo "<a href=\"aperçu_des_cv.php?id=" . $col[1] . "\">    " . $col[0] . "   </a><br />";

?>

<?php
}

?>
<img alt="" src="dossiers_apprenants_promo1/<?= $col['cv_apprenant'] ?>">
<!--**********************************************promo2***************************************************-->
<?php
$conn = new mysqli('localhost','root','', 'administration_formation');



$req = "SELECT nom_apprenant, id " . "FROM dossiers_apprenants_promo2 ORDER BY nom_apprenant";

$ret = mysqli_query ($conn,$req) or die (mysqli_error ($conn));
$sql= "SELECT * FROM dossiers_apprenants_promo2";
while ( $col = mysqli_fetch_row ($ret) )
{
    echo "<a href=\"aperçu_des_cv.php?id=" . $col[1] . "\">    " . $col[0] . "   </a><br />";

    ?>

    <?php
}

?>
<img alt="" src="dossiers_apprenants_promo2/<?= $col['cv_apprenant'] ?>">

</body>
</html>
