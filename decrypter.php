<?php
include("functions.php");
include("Includes/db.php");
$ciphering = "AES-128-CTR";
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
$encryption_iv = '2345678910111211';
$encryption_key = "DE";
$ciphertext = "m8PTf";

$password = openssl_decrypt(
    $ciphertext,
    $ciphering,
    $encryption_key,
    $options,
    $encryption_iv
);

echo $password;
?>