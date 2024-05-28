<?php
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "bankarski_sistem";

// Kreiranje konekcije
$conn = new mysqli($servername, $username, $password, $dbname);

// Provjera konekcije
if ($conn->connect_error) {
    die("Konekcija nije uspjela: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $datum_rodjenja = $_POST['datum_rodjenja'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $telefon = $_POST['telefon'];
    $adresa = $_POST['adresa'];

    $sql = "INSERT INTO korisnici (ime, prezime, datum_rodjenja, email, password, telefon, adresa)
            VALUES ('$ime', '$prezime', '$datum_rodjenja', '$email', '$password', '$telefon', '$adresa')";

    if ($conn->query($sql) === TRUE) {
        // Automatsko prijavljivanje korisnika nakon registracije
        $user_id = $conn->insert_id;
        $_SESSION['loggedin'] = true;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $ime;
        echo "Registracija uspješna!";
        // Preusmeravanje na početnu stranicu ili dashboard
        header("Location: index.php");
    } else {
        echo "Greška: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>