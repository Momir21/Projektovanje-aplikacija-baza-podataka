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
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM korisnici WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Postavljanje sesijskih varijabli
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name'] = $row['ime'];
            echo "Logovanje uspješno!";
            // Preusmeravanje na početnu stranicu ili dashboard
            header("Location: index.php");
        } else {
            echo "Pogrešna lozinka.";
        }
    } else {
        echo "Nema korisnika s tim emailom.";
    }
}

$conn->close();
?>