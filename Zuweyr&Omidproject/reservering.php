<?php include "Assets/header.php"; ?>
<hr>
<main class="main-reservering">
       
    <div class="form-container">
 
  <form action="" method="GET">
 
<div class="labelform">
    <label for="vnaam">Voornaam:</label>
    <input type="text" id="vnaam" placeholder="Frank" required>
</div>
 
<div class="labelform">
    <label for="tvoeg">Tussen Voegsel:</label>
    <input type="text" id="tvoeg" placeholder="De">
</div>
 
<div class="labelform">
    <label for="anaam">Achternaam:</label>
    <input type="text" id="anaam" placeholder="Ridder" required>
</div>
 
<div class="labelform">
    <label for="Email">Email adress:</label>
    <input type="email" id="Email" placeholder="frankderidder@gmail.com" required>
</div>
 
<div class="labelform">
    <label for="Tel">Telefoon nummer:</label>
    <input type="tel" id="Tel" placeholder="(06) 12 34 56 78" required>
</div>
 
<div class="labelform">
    <label for="res">Datum Reservering:</label>
    <input type="Date" id="res" required>
</div>
 
<div class="labelform">
    <label for="Pers">Aantal personen:</label>
    <input type="number" id="Pers" min="1" max="20" value="1" required>
</div>
 
<div class="labelform">
    <label for="Tel">Tijd Reservering:</label>
    <input type="time" id="Tel" required>
</div>
 
<div class="labelform">
    <input type="reset">
</div>
<div class="labelform">
    <input type="submit">
</div>
 
 
  </form>
</div>
 
    </main>
<hr>
<?php include "Assets/footer.php"; ?>