<?php

session_start();

if (isset($_SESSION["korisnik id"])) {

    header("Location:  ../index.php");
    exit();
}

include "php/db.php";

$korisnikId = $_SESSION['korisnik id'];
$upit = "SELECT ime, prezime FROM korisnici WHERE id = '$korisnikId'";
$rezultat = mysqli_query($conn, $upit);

if (mysqli_num_rows($rezultat) === 1) {

    $korisnik = mysqli_fetch_assoc($rezultat);
    $ImePrezime = $korisnik["ime"] . " " . $korisnik["prezime"];
} else {
    $ImePrezime = "Nepoznati korisnik";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
.centrirano { display: flex;
 justify-content: center;
align-items: center;
 height: 100vh;
 }
  </style>
 <title>Registracija i prijava korisnika</title>
</head>

    <title>Banka</title>
</head>
<body>
<div class="container centrirano">
    <div class="card text-center">
<div class="card-header">
 Dobrodošli
 </div>
 <div class="card-body">
 <h5 class="card-title">Pozdrav, <?php echo $imePrezime; ?></h5>
<p class="card-text">Uspešno ste prijavljeni.</p>
<a href="odjava.php" class="btn btn-primary">Odjava</a>
</div>
</div>
</div>


</body>
</html>