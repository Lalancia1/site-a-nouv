<?php
include ('sitedelapromo.php');
include ('meta_css.php');
?>

<?php
if ( isset($_GET['id']) ){
    $id = intval ($_GET['id']);
    include ("connexioncv.php");

    $conn = new mysqli('localhost','root','', 'administration_formation');

    $req = "SELECT id, nom_apprenant, prenom_apprenant,cv_apprenant " .
        "FROM dossiers_apprenants_promo1 WHERE id = " . $id;
    $ret = mysqli_query ($conn,$req) or die (mysqli_error ($conn));
    $col = mysqli_fetch_row ($ret);
    $requete="SELECT * FROM  dossiers_apprenants_promo1";
    $exec=mysqli_query($conn,$requete);
     while ($ligne = mysqli_fetch_assoc($exec)) {

?>
<div  id="promo1"><a  href="aperçu_des_cv.php?id=$id">
        <?php
echo $ligne['cv_apprenant'];
?>
        <img alt="" src="dossiers_apprenants_promo1/<?= $ligne['cv_apprenant'] ?>">  <br></a></div>;
<div class="afficher"></div>
         <?php
     }
?>

<?php


}
?>
<!--//*******************************************
http://www.leSite_apprenant.com:80/emplacement du fichier/vers/monfichier.PHP? clé1=valeur1& clé2=valeur2
//*************************-->
<script >
    alert('au revoirrrrrrrrr');
  var voir=document.getElementById('promo1');

    $(document).ready(function(){
        console.log('debut');
         alert('fffffrere');
        $('.formulaire1').submit(function(ev){
            ev.preventDefault();//ev ici c'est event
            alert('la');
            var nom = $('.nom').val();

            var mail_apprenant=$('.mel').val();
            $.post('script.php',{name:nom,messenger:mail_apprenant}, function(donnees){
                alert('there');
                $(".return").text(donnees);
                $('.nom').val(' ');
                $('.').val(' ');
                function getMessages() {//recupere.php contient la selection des elements à afficher
                    $.post('liste_des_cv.php', function (data) {
                        alert('affiche moi');
                        $('.afficher').text(data);
                    });

                }
                getMessages();
            });

        });

    });
</script>
<!--*******************************************promo2********************************************
<?php
    if ( isset($_GET['id']) ){
    $id = intval ($_GET['id']);
    include ("connexioncv.php");

    $conn = new mysqli('localhost','root','', 'administration_formation');

    $req = "SELECT id, nom_apprenant, prenom_apprenant,cv_apprenant " .
    "FROM dossiers_apprenants_promo2 WHERE id = " . $id;
    $ret = mysqli_query ($conn,$req) or die (mysqli_error ($conn));
    $col = mysqli_fetch_row ($ret);
    $requete="SELECT * FROM  dossiers_apprenants_promo2";
    $exec=mysqli_query($conn,$requete);
    while ($ligne = mysqli_fetch_assoc($exec)) {

    ?>
    <div  id="promo2"><a  href="aperçu_des_cv.php?id=$id">
            <?php
            echo $ligne['cv_apprenant'];
            ?>
            <img alt="" src="dossiers_apprenants_promo2/<?= $ligne['cv_apprenant'] ?>">  <br></a></div>;
    <div class="afficher"></div>
<?php
}
?>

<?php


}
?>



