<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Workshop registratie</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
    <center>
    <h3>Workshop registratie</h1>
    <div>
      Reseveer nu, er zijn nog enkele plekken beschikbaar!
    </div><br />
    <form method="post" action="bedankt.php" class="registratie">
      <div class="elements">
      <label>Voornaam:</label>
      <input type="text" name="voornaam"><br />
      </div>
      <div class="elements">
      <label>Achternaam:</label>
        <input type="text" name="achternaam"><br />
        </div>
        <div class="elements">
        <label>Adres:</label>
        <input type="text" name="adres"><br />
        </div>
        <div class="elements">
        <label>Woonplaats:</label>
      	<input type="text" name="woonplaats"><br />
      	</div>
      	<div class="elements">
      	<label>Postcode:</label>
      	<input type="text" name="postcode"><br />
      	</div>
      	<div class="elements">
      	<label>E-mail:</label>
      	<input type="text" name="e-mail"><br />
      	</div>
      	<div class="elements">
      	<label>Telefoon:</label>
      	<input type="text" name="telefoon"><br />
      	</div>
      	<div class="elements">
      	<label>Mobiel:</label>
      	<input type="text" name="mobiel"><br />
      	</div>
      	<div class="elements">
      	<label>Lunchkeuze:</label>
      	<select name="lunchkeuze"><br />
      		<option>Brood met soep</option>
      		<option>Soep met stokbrood</option>
      		<option>Brood</option>
      	</select><br />
      	</div>
      <input type="submit" class="butt" name="send" value="Versturen" />
    </form>
    </center>
  </body>
</html>
