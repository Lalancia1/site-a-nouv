<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Promotion | Up To Fourmies</title>
    <?php require_once 'meta_css.php'; ?>
</head>
<body >
<?php include "sitedelapromo.php"; ?>


<?php

$conn = new mysqli('localhost','root','', 'administration_formation');
include ('meta_css.php');
#connexion à la base de donnée
if ($conn->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $conn->connect_errno . ") " . $conn->connect_error;
}

if (isset($_POST['submit'])) {

    if (isset($_POST['nom_apprenant']) && isset($_POST['prenom_apprenant']) && isset( $_POST['age_apprenant']) && isset($_POST['profession_apprenant']) && isset( $_POST['specificites_apprenant']) && isset($_POST['situation_apprenant']) && isset($_FILES["cv_apprenant"]) && isset($_POST['mail_apprenant'])) {
        $nom_apprenant = $_POST['nom_apprenant'];
        echo $nom_apprenant;
        $prenom_apprenant = $_POST['prenom_apprenant'];
        $age_apprenant = $_POST['age_apprenant'];
        $specificites_apprenant = $_POST['specificites_apprenant'];
        $profession_apprenant = $_POST['profession_apprenant'];
        $situation_apprenant = $_POST['situation_apprenant'];
        $mail_apprenant = $_POST['mail_apprenant'];
        $cv_apprenant = $_FILES["cv_apprenant"]['name'];

       // echo $nom_apprenant . " " . $prenom_apprenant . " " . $age_apprenant . "ans"." " . $profession_apprenant . " " . $cv_apprenant . " " .$profession_apprenant." ". $situation_apprenant;
    }
}
    if (!empty($nom_apprenant) && !empty($prenom_apprenant) && !empty($age_apprenant) && !empty($profession_apprenant) && !empty($specificites_apprenant) && !empty($situation_apprenant) && !empty($cv_apprenant) && !empty($mail_apprenant)) {


 $conn->query("INSERT INTO `dossiers_apprenants_promo1`  VALUES(NULL,'$nom_apprenant','$prenom_apprenant','$age_apprenant','$profession_apprenant' , '$specificites_apprenant','$situation_apprenant','$cv_apprenant','$mail_apprenant')");
    $conn->query("INSERT INTO `dossiers_apprenants_promo2`  VALUES(NULL,'$nom_apprenant','$prenom_apprenant','$age_apprenant','$profession_apprenant' , '$specificites_apprenant','$situation_apprenant','$cv_apprenant','$mail_apprenant')");
    }

   // $conn->query("INSERT INTO `dossiers_apprenants_promo2`  VALUES(NULL,'$nom_apprenant','$prenom_apprenant','$age_apprenant','$profession_apprenant' , '$specificites_apprenant','$situation_apprenant','$cv_apprenant')");

if (isset($_POST['submit'])) {
    echo "ert";
    if (isset($_POST['lien']) && !empty($_POST['lien'])) {
        echo "voir";
        $lien = $_POST["lien"];

        $req = $conn->query( "INSERT INTO  `cv_en_ligne` VALUES (NULL,'$lien')");

    }


}

/*******************************************************************************/

if(!empty($_FILES)){
    $name_file= $_FILES['cv_apprenant']['name']."<br>";
    $type_file= $_FILES['cv_apprenant']['type']."<br>";
    echo 'Nom fichier:'.$name_file;
    echo 'type fichier:'.$type_file;
    //pour obtenir l'extension du fichier
    $file_extension=strrchr($name_file,".");
    echo 'Extension:'. $file_extension;
}

if( isset($_POST['upload']) ) // si formulaire soumis,si je clique l'envoi
{
    $content_dir = 'upload/'; // dossier où sera déplacé le fichier

    $tmp_file = $_FILES['cv_apprenant']['tmp_name'];

    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }

    // on vérifie maintenant l'extension
    $type_file = $_FILES['cv_apprenant']['type'];

    if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
    {
        exit("Le fichier n'est pas une image");
    }

    // on copie le fichier dans le dossier de destination
    $name_file = $_FILES['cv_apprenant']['name'];

    if( !move_uploaded_file($tmp_file, $name_file) )
    {
        exit("Impossible de copier le fichier dans $content_dir");
    }

    echo "Le fichier a bien été uploadé";
    // et j insère en base de données quelque chose du genre :
    // $URL = $content_dir . $name_file;
}
//****************************************************************************/

?>

<div style= "width: 700px; height: 700px;  margin-left:150px;  margin-top:0;">
    <form    class="formulaire1"  action ="script.php"  enctype="multipart/form-data"   method="post"  style="width: 80%;height:80px " >
        <h4>VOTRE NOM:</h4>
        <input  type="text" class="nom" name="nom_apprenant" value=" " style="width:300px;height:80px;border-radius: 10px;  box-shadow:10px 5px 5px #0c5460;"><br><br>
        <h4>VOTRE PRENOM</h4>
        <input  type="text" name="prenom_apprenant" value=" " style="width: 400px;height:80px;border-radius: 10px;  box-shadow:10px 5px 5px #0c5460;"><br><br>
        <h4>VOTRE AGE</h4>
        <input  type="text" name="age_apprenant" value=" "    style="width: 200px;height:80px;border-radius: 10px;  box-shadow:10px 5px 5px #0c5460; "><br><br>
        <h4>QUELLE EST VOTRE PROFESSION:</h4>
        <input  type="text" name="profession_apprenant" value=" " style="width: 400px;height:80px;border-radius: 10px;  box-shadow:10px 5px 5px #0c5460;; "><br><br>
        <h4>VOTRE SPECIALITE</h4>
        <input  type="text" name="specificites_apprenant" value=" " style="width: 400px;height:80px;border-radius: 10px;  box-shadow:10px 5px 5px #0c5460; "><br><br>

        <h4>QUELLE EST VOTRE SITUATION ACTUELLE.</h4>
        <input  type="text" name="situation_apprenant" value=" " style=" width: 400px;height:80px;border-radius: 10px;  box-shadow:10px 5px 5px #0c5460; " ><br><br>
        <input type="hidden" name="MAX_FILE_SIZE" value="250000" style="position: absolute; right: 50px; top:80px" />


        <h4  style="position: absolute; right: 140px; top:110px">SELECTIONNEZ VOTRE CV SVP</h4 >
        <input type="file" name="cv_apprenant"  value=" " size=50 style="position: absolute; right: 100px; top:160px;width:300px;height:80px;border-radius: 10px;  box-shadow:10px 5px 5px #0c5460"/>

        <h4  style="position: absolute; right: 90px; top:250px">VOTRE ADRESSE MAIL </h4 >
        <input type="email"  class="mel" name="mail_apprenant"  placeholder="votre adresse mail svp" value=" " size=50 style="position: absolute; right: 100px; top:300px;width:300px;height:80px;border-radius: 10px;  box-shadow:10px 5px 5px #0c5460"/>
        <input type="submit"  name="submit" style="width: 50%;height:80px;border-radius: 10px;  box-shadow:10px 5px 5px #0c5460; ">
    </form>
</div>
<div  style="position: absolute;right: 100px; top:450px;width:350px;height:80px; " >
    <h4>LIEN DE VOTRE CV EN LIGNE SI VOUS EN AVEZ</h4><br>
    <form  action ="script.php"  enctype="multipart/form-data"   method="post">
        <input  type="text" name="lien"  style="background-color: white;right: 100px; top:450px;width:350px;height:80px;  border-radius: 10px;  box-shadow:10px 5px 5px #0c5460" >
        <p>(ce champ est indépendant des autres il est facultatif)</p>
        <input  type="submit" name="submit" value="envoyez " style="width: 30%;height:30px;border-radius: 10px;  box-shadow:10px 5px 5px #0c5460; "  >
    </form>

</div>
</body>
</html>
