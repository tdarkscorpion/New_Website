<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kec6a9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcce05 = base64_decode('nPomTs9Et1UuW41yEAkUKkxSZllrTWVyM2thbko4czZwS1lKNGRwWkE4MXNCSkpuNDk3YWtVRXRwbTdHVHZiczYzQ3ZZdk5GL01zTDVWOW9oTkdDdFE4ZzVDMzVWb3VCRjRLYXNuRzZMaEV0Q3dDODh0dHlZb2VUdjNUNzVJNnhzZ3lVTHdPRXNaMS9TL0FkcWdCZkxhR3JpWFROY25BMnBOTHpiU3B1cDhOY0p3UWhZVlh1REEwNmVpN1FyU2pLZlpNQTlIMXVuVGI2QUtIY2pWbjdMZ0g3a1Zlekw0cFA4UTN5UDRndTMzQ2dJMWhReS92UDN2UGN0R1dER3pEa2x6K3ZtTEM3SnNFc0lxbERHVHdVNHdFK1JkQmFqeVdUTGU3V2ZZQnE1SzhCZkZOYVhHeWZKbk5tbWQ0bEtDY2lQZjdWZVJuNi92TStITU5R');
$id7178 = openssl_cipher_iv_length('aes-256-cbc');
$vebf1b = substr($pcce05, 0, $id7178);
$cec011 = substr($pcce05, $id7178);
eval('?>'.gzinflate(openssl_decrypt($cec011, 'aes-256-cbc', $kec6a9, 0, $vebf1b)));