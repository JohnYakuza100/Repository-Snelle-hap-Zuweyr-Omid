<!DOCTYPE html>
<html lang="nl">
<head>
    <meta name="author" content="Zuweyr Hussein">
    <meta name="keywords" content="Snelle, Hap, Gerechten, Restaurant, Zoetermeer, Food, Diner">
    <meta name="description" content="Website voor de restaurant Snelle Hap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snelle Hap - Reserveren</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

    <header>
        <?php include '../assets/header.php'; ?>
    </header>

    <section class="reservation-section">
        <h2>Reserveren</h2>
        <form id="reservation-form" action="submit_reservation.php" method="post">
            <div class="form-group">
                <label for="first-name">Voornaam:</label>
                <input type="text" id="first-name" name="first-name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Achternaam:</label>
                <input type="text" id="last-name" name="last-name" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefoonnummer:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="persons">Aantal personen:</label>
                <input type="number" id="persons" name="persons" min="1" max="20" required>
            </div>
            <div class="form-group">
                <label for="date">Datum:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Tijd:</label>
                <select id="time" name="time" required>
                    <option value="">Selecteer een tijd</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                </select>
            </div>
            <button type="submit">Reserveer nu</button>
        </form>
    </section>

<script>
    document.getElementById('reservation-form').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Bedankt voor uw reservering!');
    });
</script>
<script src="../assets/menu.js"></script>

</body>

<?php include '../assets/footer.php'; ?>

</html>
