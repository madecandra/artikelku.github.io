<?php

function registrasi($data) {
    global $conn;

    $name = $data["name"];
    $email = $data["email"];
    $username = $data["username"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO register VALUES('$name', '$email', '$usernama', '$password')");

    return mysqli_affected_rows($conn);

    
}
?>