<?php
    $lname = htmlspecialchars($_POST['LNAME']);
    $fname = htmlspecialchars($_POST['FNAME']);
    $email = htmlspecialchars($_POST['EMAIL']);
    $phone = htmlspecialchars($_POST['MMERGE4']);

    $monfichier = fopen ('data.txt' , 'a+');

    fputs($monfichier, "=============\n");
    fputs($monfichier, $lname. "\n");
    fputs($monfichier, $fname. "\n");
    fputs($monfichier, $email. "\n");
    fputs($monfichier, $phone. "\n");

    fclose($monfichier);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/formulaire_1.css">
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <title>Demandez un essai</title>
</head>

<body>
    <!-- Begin Mailchimp Signup Form -->
    <div class="newsletterBlock">
        <div id="mc_embed_signup">
            <form form action="https://gmail.us17.list-manage.com/subscribe/post?u=ba8c4ac9764d1b11395fe7137&amp;id=3d8a027f14" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
                <div id="mc_embed_signup_scroll">
                    <h2>Prise de contact</h2>
                    <div id="nom" class="mc-field-group">
                        <label class="label" for="mce-LNAME">Nom</label>
                        <input type="text" value="<?php echo $_POST['LNAME']; ?>" name="LNAME" class="" id="mce-LNAME" placeholder="Votre Nom">
                    </div>
                    <div id="prenom" class="mc-field-group">
                        <label class="label" for="mce-FNAME">Prénom</label>
                        <input type="text" value="<?php echo $_POST['FNAME']; ?>" name="FNAME" class="" id="mce-FNAME" placeholder="Votre Prénom"> 
                    </div>
                    <div id="mail" class="mc-field-group">
                        <label class="label" for="mce-EMAIL">Email</label>
                        <input type="email" value="<?php echo $_POST['EMAIL']; ?>" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Votre Email">
                    </div>
                    <div id="phone" class="mc-field-group size1of2">
                        <label class="label" for="mce-MMERGE4">Téléphone</label>
                        <input type="text" name="MMERGE4" class="" value="<?php echo $_POST['MMERGE4']; ?>" id="mce-MMERGE4" placeholder="Votre Téléphone">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ba8c4ac9764d1b11395fe7137_3d8a027f14" tabindex="-1" value=""></div> -->
                    <div class="clear"><input type="submit" value="Validez" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>  
                <script type='text/javascript'>document.getElementById("mc-embedded-subscribe").click();</script>
            </form>
        </div>
    </div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[7]='MMERGE7';ftypes[7]='radio';fnames[2]='LNAME';ftypes[2]='text';fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[4]='MMERGE4';ftypes[4]='phone'; 
    /*
    * Translated default messages for the $ validation plugin.
    * Locale: FR
    */
    $.extend($.validator.messages, {
            required: "Ce champ est requis.",
            remote: "Veuillez remplir ce champ pour continuer.",
            email: "Veuillez entrer une adresse email valide.",
            url: "Veuillez entrer une URL valide.",
            date: "Veuillez entrer une date valide.",
            dateISO: "Veuillez entrer une date valide (ISO).",
            number: "Veuillez entrer un nombre valide.",
            digits: "Veuillez entrer (seulement) une valeur numérique.",
            creditcard: "Veuillez entrer un numéro de carte de crédit valide.",
            equalTo: "Veuillez entrer une nouvelle fois la même valeur.",
            accept: "Veuillez entrer une valeur avec une extension valide.",
            maxlength: $.validator.format("Veuillez ne pas entrer plus de {0} caractères."),
            minlength: $.validator.format("Veuillez entrer au moins {0} caractères."),
            rangelength: $.validator.format("Veuillez entrer entre {0} et {1} caractères."),
            range: $.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
            max: $.validator.format("Veuillez entrer une valeur inférieure ou égale à {0}."),
            min: $.validator.format("Veuillez entrer une valeur supérieure ou égale à {0}.")
    });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <!--End mc_embed_signup-->
</body>

</html>