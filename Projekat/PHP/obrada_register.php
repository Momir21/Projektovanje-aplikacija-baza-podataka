<?php
// Podaci za povezivanje sa bazom podataka
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banka";

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);

// Provera konekcije
if ($conn->connect_error) {
    die("Konekcija nije uspela: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preuzimanje podataka iz forme
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $datumrodjenja = $_POST['datumrodjenja'];
    $email = $_POST['email'];
    $sifra = password_hash($_POST['sifra'], PASSWORD_DEFAULT);
    $brojtelefona = $_POST['brojtelefona'];
    $adresa = $_POST['adresa'];

    // SQL upit za umetanje podataka
    $sql = "INSERT INTO korisnici (ime, prezime, datumrodjenja, email, sifra, brojtelefona, adresa) VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Priprema i izvršavanje SQL upita
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $ime, $prezime, $datumrodjenja, $email, $sifra, $brojtelefona, $adresa);

    if ($stmt->execute()) {
        echo "Uspešna registracija!";
    } else {
        echo "Greška: " . $stmt->error;
    }

    // Zatvaranje pripremljene izjave i konekcije
    $stmt->close();
}

$conn->close();
?>