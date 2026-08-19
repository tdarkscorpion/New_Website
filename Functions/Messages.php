<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfbfbb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1c9f4 = base64_decode('QC+Mn1FrkiecAIvnMzCkOHRTVjRERzdLeHZtM0hoMHYzNmx1SXJkN1lNVTdmaXRaTy9vMEhxTW1Ja2lyTUxjV3FpSVVWWnQzRWwwMC9XVWU3ZzV6SzhGeGhLczBVbzVmRWhFZFpQTGJlZVZTV2hhejBsNjNnNzI1NWd6eFhWaDNPb3dFZXBLSE1VQWk4cFZ2Y0pSWmxnSkU1cmNCcDlMd0VLM1hkbTZMSjFSa1ZUTlZaeW5ITUZWWEZqcGp0K0RuYXlublJIUmNUZk91ZC9pNDhOSEZsZXhPOVhwaU83L3FhWTFkTXY3RFlaK2h3ZFl1cXVaL3B2Q2NHRG9id0RVWEkxTHJwU3hXd1dBWkRNbWZteFVUMEcyY3Q0SFNCSWY0Vjg3TVVzMnVvc2ZxeWVud0JoUW9KUi9zM3ZzPQ==');
$ifaa3b = openssl_cipher_iv_length('aes-256-cbc');
$v6d207 = substr($p1c9f4, 0, $ifaa3b);
$cf69fb = substr($p1c9f4, $ifaa3b);
eval('?>'.gzinflate(openssl_decrypt($cf69fb, 'aes-256-cbc', $kfbfbb, 0, $v6d207)));