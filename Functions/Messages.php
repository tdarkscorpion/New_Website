<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf48a0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p688bf = base64_decode('cXEtdo+nfKGYdvsNP8NwBXZQbElwK2dtdHNHU09tK2pzR1RsdmpWUXIyNSttZjlPQ0JNNkRJL2ZvTHhDSTUzNmdBeWthV0ZPNjNuL1U5MkU5eWphaVZ3bEQxQVBhazNvYjJoYlJMR3Q5SDZ3TlZJcExkeVpCSlllaDRXMmNQbExSOU5xTDFSaG11cnFYUlBKZFVMQkxHUzBWMi9lczVBQkVCcmVlRHdyeHpsOG5nc1h1dTA2bEcvN2JxSElVcXZqdjd2VTQzcjlJUmloZjU2YUMwZTNIdTlBaW1McGh1aUFXQzRicWcvNWlaKzR3TEhoT2wxV000WjRMM2N4MG9yaG9Cc2ZXQkJIaUJZTGt6amF0NHN3aHJZZ1krQm1PR0l5em5hZnlhV1V0UDBLWXlTMmpYcDVKRFV5S2NnPQ==');
$i5bc79 = openssl_cipher_iv_length('aes-256-cbc');
$vd5c40 = substr($p688bf, 0, $i5bc79);
$ce3fbe = substr($p688bf, $i5bc79);
eval('?>'.gzinflate(openssl_decrypt($ce3fbe, 'aes-256-cbc', $kf48a0, 0, $vd5c40)));