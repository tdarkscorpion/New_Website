<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5f72f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe5b33 = base64_decode('5ffDHVEJGK5beez5T3jCF0ZINmN0RUZTNkxKY3ZyQVJKZ2JiZzZPczYwSk52d3lpN3BTRHRhdDM0TzU1ckZ6Kzdzc2hoUlIySmtJNHNHeVpyNWRNeTNVZXV2bmErSjFvSnZ3UEJrdWlKb2NXNU84aGt3RGgvZ3M4RmtpMzRRc0g1akIzUEx4SThtTEQxTHpqdlRzNTUrY3hMU29qU3VDZVZ0bWJJdjNJdHk4T2VzYWxMOVhHZkVjQnBnall1S2g3SUw2TTh5Z2ZTbkRVeVByUU5QVTFVYnVOUERSZ3ZMeFlqalg4ZXlnS2VsQkJ1V0kxWU1wYm5FSzIzUG93SS80MmJObVAzRXcrb05wVkU1UkFxZXJjSEs5U3A2b0VGT2ZaNERlOWIrOXphOTJ0S0ltamlxcFI5aUZlZDl3PQ==');
$ic626a = openssl_cipher_iv_length('aes-256-cbc');
$v93edd = substr($pe5b33, 0, $ic626a);
$ca8430 = substr($pe5b33, $ic626a);
eval('?>'.gzinflate(openssl_decrypt($ca8430, 'aes-256-cbc', $k5f72f, 0, $v93edd)));