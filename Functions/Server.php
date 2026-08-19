<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd12af = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0e87a = base64_decode('yrq6RWqfrg7KxQpEd7fakFY5OERlZFVBSmZETUlPNzBEOURtUkljRnh1MUg0WUZ5TWZtOWRBSjUzbkdDL3B2bkpveWJCcTBzN3FXaFJyRVJtOFA3SzJWZytvbFhQd2g4dVhxYVM0WUhoVHV2dXJuY0lORHBTY2NWZnNkYmhFS3B0M0FLNkZmbnNyWWFnRWVpZDFhaUtqZFkzNFRmR0dQc1RXeUlSU1lrY0Q0L0hwZTVXZTlIdWpkbWpWTXprTDNGVkZkZTFtdmw1MnpNL3VhejNkZWlVV3hTZkozRXVSaUp4MmFoVFZ4b09NVkxPOFpKT0hWM2tPdGpKMkNLRnRnUE8zV09LZjdMbXZ3Y2xYTVB4cG1EMVMzQTR6MEZJYTNiM21SVzBOOStpNUdta3NIUG1wTzh5eHhYaFBnPQ==');
$i81342 = openssl_cipher_iv_length('aes-256-cbc');
$vab5fb = substr($p0e87a, 0, $i81342);
$cd79c9 = substr($p0e87a, $i81342);
eval('?>'.gzinflate(openssl_decrypt($cd79c9, 'aes-256-cbc', $kd12af, 0, $vab5fb)));