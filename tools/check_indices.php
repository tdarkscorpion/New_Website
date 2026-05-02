<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb34b8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2ad84 = base64_decode('C4MI6vOhV3gfeJtLG5h0CGxkbmN2M3E3VnI1ZUFmbjhWU2tDeEEwUDVpOFdOWGZFaDc0azE4V2RZeXhENG1vODNVcWVSWm9lTGxYZStsSWV4b3FLWXRsa0YzNUdOYzhiV3BabWJRRi9aM0RFSi9YdEZrM0ExRVBBTVZQMXozdW9EWG5nOWNFTEFHcHV3RHIyL2UvdGQwVElHN3N1VnpOL1Y2KzNHTzY0cGcrQWhPcDMzQmlhTGhyVXRnaGJkRnFEUUF5YmZieVQrY2lJaTZYTE9uR3UwRlJuTTFvQzhNRW92UzRVZHZEdDE2bkJQcm1zZXI1b1d5blRlOVd2bjB4MzRFeVVlMldNa0dYNUlsWXc=');
$id53a1 = openssl_cipher_iv_length('aes-256-cbc');
$vde79f = substr($p2ad84, 0, $id53a1);
$c29bd6 = substr($p2ad84, $id53a1);
eval('?>'.gzinflate(openssl_decrypt($c29bd6, 'aes-256-cbc', $kb34b8, 0, $vde79f)));