<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Registraciona Forma</h2>
    <form action="obrada_register.php" method="post">
        <div class="form-group">
            <label for="ime">Ime:</label>
            <input type="text" class="form-control" id="ime" name="ime" required>
        </div>
        <div class="form-group">
            <label for="prezime">Prezime:</label>
            <input type="text" class="form-control" id="prezime" name="prezime" required>
        </div>
        <div class="form-group">
            <label for="datumrodjenja">Datum Rođenja:</label>
            <input type="date" class="form-control" id="datumrodjenja" name="datumrodjenja" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="sifra">Šifra:</label>
            <input type="password" class="form-control" id="sifra" name="sifra" required>
        </div>
        <div class="form-group">
            <label for="brojtelefona">Broj Telefona:</label>
            <input type="tel" class="form-control" id="brojtelefona" name="brojtelefona" required>
        </div>
        <div class="form-group">
            <label for="adresa">Adresa:</label>
            <input type="text" class="form-control" id="adresa" name="adresa" required>
        </div>
        <button type="submit" class="btn btn-primary">Registruj se</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>