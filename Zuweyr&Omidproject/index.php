<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snelle Hap - Home</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <header>
        <?php include 'assets/header.php'; ?>
    </header>
    

<section>
    <h2>Welkom bij Snelle Hap</h2>
    <p>Snelle Hap biedt heerlijke gerechten voor een snelle, maar smaakvolle hap!</p>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="/Images/kokteam.jpeg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="/Images/SnelleHap.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="Images/kokteam.jpeg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</section>

<script src="/assets/slideshow.js"></script>
<script src="assets/menu.js"></script>


</body>
</html>
