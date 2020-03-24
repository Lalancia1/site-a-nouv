
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Promotion | Up To Fourmies</title>
    <?php require_once 'meta_css.php'; ?>
</head>
<body id="menu">
<?php include "sitedelapromo.php"; ?>


    <div class="section-title-area">
        <h2 class="section-title">LA PROMO DE 2019-2020</h2>
    </div>

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
</div>

<div class="container"  style="padding-top: 50px">
    <section style="width: 100%;height: 250px;">


    </section>
<section class="container-fluid" id="position">

    <div class="col-md-12">

        <div class="row grid"

            <div class="posit mb-5">
                <div class="row">
                    <img class="column img PhotoApprenant " src="verre.png" alt="FABIEN"   onclick="openTab('b1');">

                </div>

                <div>
                    <h4 class="mt-3">FABIEN</h4>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <div class="row">
                    <img class="column img PhotoApprenant " src="appleBanc.png" alt="Romain" onclick="openTab('b2');">

                </div>

                <div>
                    <h4 class="mt-3">ROMAIN</h4>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <div class="row">
                <img class="column img PhotoApprenant" src="verre.png" alt="Michele" onclick="openTab('b3');">

                </div>
                <div>
                    <h4 class="mt-3">BONNET MICHELE</h4>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <div class="row">
                    <img class="column img PhotoApprenant" src="appleBanc.png" alt="david" onclick="openTab('b4');">

                </div>

                <div>
                    <h4 class="mt-3">DAVID</h4>

                    <a href="https://unassumed-glass.000webhostapp.com/ProjetCV/ProjetCV.html" target="_blank">
                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

        </div>

        <div class="row grid">

            <div class="posit mb-5">
                <div class="row">
                    <img class="column img PhotoApprenant" src="verre.png" alt="Manon" onclick="openTab('b5');">

                </div>

                <h4 class="mt-3">MANON</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>


            <div class="posit mb-5">
                <div class="row">
                    <img class="column img PhotoApprenant" src="appleBanc.png" alt="johan onclick=" onclick="openTab('b5');">
                </div>

                <h4 class="mt-3">JOHAN</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="appleBanc.png" alt="Ludovic" onclick="openTab('b5');">
                <h4 class="mt-3">LUDOVIC</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="verre.png" alt="Alexandre">
                <h4 class="mt-3">ALEXANDRE</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

        </div>

        <div class="row grid">

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="verre.png" alt="Maxime">
                <h4 class="mt-3">MAXIME</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="appleBanc.png" alt="Jeremy">
                <h4 class="mt-3">JEREMY</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="colummn img PhotoApprenant" src="verre.png" alt="Jeremy">
                <h4 class="mt-3">JEREMY</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="appleBanc.png" alt="Quentin">
                <h4 class="mt-3">QUENTIN</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>
        </div>

        <div class="row grid">
            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="appleBanc.png" alt="Quentin">
                <h4 class="mt-3">QUENTIN</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="verre.png" alt="Quentin">
                <h4 class="mt-3">QUENTIN</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="appleBanc.png" alt="Armand">
                <h4 class="mt-3">ARMAND</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="verre.png" alt="Romain Bon">
                <h4 class="mt-3">ARMAND</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>
        </div>

        <div class="row grid">
            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="appleBanc.png" alt="Jerôme">
                <h4 class="mt-3">JEROME</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="verre.png" alt="HORTENSE">
                <h4 class="mt-3">HORTENSE</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="colummn img PhotoApprenant" src="appleBanc.png" alt="David">
                <h4 class="mt-3">DAVID</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="verre.png" alt="Styvens">
                <h4 class="mt-3">STYVENS</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="appleBanc.png" alt="Helena">
                <h4 class="mt-3">HELENA</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>
            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="verre.png" alt="Alexandre">
                <h4 class="mt-3">ALEXANDRE</h4>
                <div>



                    <a href="https://dorchies-stevens.000webhostapp.com/cvBoot.html" target="_blank">
                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>
            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="appleBanc.png" alt="Alexandre">
                <h4 class="mt-3">ALEXANDRE</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>
            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="verre.png" alt="Samy">
                <h4 class="mt-3">SAMY</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>
            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="appleBanc.png" alt="Dylan">
                <h4 class="mt-3">DILAN</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>
            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="verre.png" alt="Willy">
                <h4 class="mt-3">WILLY</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>
            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="appleBanc.png" alt="Alaexandre">
                <h4 class="mt-3">ALEXANDRE</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>
            <div class="posit mb-5">
                <img class="column img PhotoApprenant" src="verre.png" alt="Annelisse">
                <h4 class="mt-3">ANNELISSE</h4>
                <div>

                        <img class="LogoCV" src="image/logocv.png" alt="Curriculum Vitae">
                    </a>
                </div>
            </div>

        </div>

    </div>



</section>
<?php
$conn = new mysqli('localhost','root','', 'administration_formation');

#connexion à la base de donnée
if ($conn->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $conn->db->connect_errno . ") " . $conn->db->connect_error;
}
if ((isset($nom_apprenant) && isset($prenom_apprenant) && isset($age_apprenant) && isset($specificites_apprenant) && isset($situation_apprenant)
        && isset($cv_apprenant) && isset($mail_apprenant)) && ( empty($nom_apprenant) or empty($prenom_apprenant) or empty($age_apprenant) or empty($specificites_apprenant) or empty($situation_apprenant) or empty($mail_apprenant))) {
    $nom_apprenant = $_POST['nom_apprenant'];
    $prenom_apprenant = $_POST['prenom_apprenant'];
    $age_apprenant = $_POST['age_apprenant'];
    $profession_apprenant = $_POST['profession_apprenant '];
    $specificites_apprenant = $_POST['specificites_apprenant'];
    $situation_apprenant = $_POST['situation_apprenant'];

    $mail_apprenant=$_POST['mail_apprenant'];
    $cv_apprenant = $_FILES["cv_apprenant"];
    echo $cv_apprenant;
    $req = $conn->query("INSERT INTO dossiers_apprenants_promo2(" .
        "nom_apprenant, prenom_apprenant, age_apprenant,profession_apprenant , specificite_apprenant,situation_apprenant,cv_apprenant,mail_apprenant " .
        ") VALUES (" .
        "'" . $nom_apprenant . "', " .
        "'" . $prenom_apprenant . "', " .
        "'" . $age_apprenant . "', " .
        "'" . $profession_apprenant . "', " .
        "'" . $specificites_apprenant . "', " .
        "'" . $situation_apprenant . "', " .
        "'" . $mail_apprenant . "' ," .
        "'" . $cv_apprenant . "', ");
    echo "$cv_apprenant .";

}
require_once 'footer.php'; ?>
<script src="jquery.js"></script>
<script src="script.js"></script>

</body>