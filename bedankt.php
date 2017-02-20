<style type="text/css">
    body {
        font-family: Arial;
    }
</style>
<?php
    // var_dump($_POST);
    if (ISSET($_POST)) {
             $bericht = "
            <div>Voornaam: " . $_POST['voornaam'] . "</div>
            <div>Achternaam: " . $_POST['achternaam'] . "</div>
            <div>Adres: " . $_POST['adres'] . "</div>
            <div>Woonplaats: " . $_POST['woonplaats'] . "</div>
            <div>Adres: " . $_POST['postcode'] . "</div>
            <div>Email: " . $_POST['e-mail'] . "</div>
            <div>Telefoon: " . $_POST['telefoon'] . "</div>
            <div>Mobiel: " . $_POST['mobiel'] .  "</div>
            <div>Lunchkeuze: " . $_POST['lunchkeuze'] .  "</div>
            ";
            // Create the message
echo "Beste heer/mevrouw " . $_POST['achternaam'] . ",<br /><br />
      Bedankt voor aanmelding, wij kijken er naar uit om u te ontmoeten.<br />
      Onderstaande gegevens zijn bij ons geregisteerd en worden ter verificatie naar uw emailadres verzonden.<br /><br>";
echo $bericht;
echo  "<br><br>Graag zien wij uw bevestiging tegemoet? Alvast bedankt!<br /><br />
      Met vriendelijke groet,<br /><br />
      Team Scrumbo";   
    }
mail($_POST['e-mail'],"Aanmelding",$bericht);

?>