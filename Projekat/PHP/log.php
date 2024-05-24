<?php

include_once("db.php");

session_start();
if (isset($_SESSION["korisnik id"])) {

    header("Location:  ../data_page.php");

    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $upit = "SELECT * FROM korisnici WHERE email = '$email'";
    $rezultat = mysqli_query($conn, $upit);

    if (mysqli_num_rows($rezultat) === 1) {

        $korisnik = mysqli_fetch_assoc($rezultat);

        if(password_verify($password, $korisnik["password"])) { 

            $_SESSION["korisnij id"] = $korisnik["id"];
            header("Location:  ../data_page.php");

            exit();
            
    }
}
echo"Pogresna email adresa ili lozinka";
}
?>