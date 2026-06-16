<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k64523 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5650c = base64_decode('ptZzs1sENz5ZnJy1e07bGlYzSVFnUEVYTERnb1BENFRUVUdtVDl4cTVKcit4b1FpR3BraHRwcWVrTDVXbEdjOG0yZ1dGZUtKTlJUYitXdTRLS1lydzVvYVBSYkZqMjU5Z0NVbGJRSTZoTGdqK0JwZGZEYk5rb0U5WFdPem1SaW5pT1ZOZWE3a3d6amlpbG1MMUFVckwzTFR5aWFYMU50QTdReVozeStwM3h3bFlCdVpoSENsZmtTWmhTSFM3TlM1WFdzQWpUVXAxbFBxazNiZUV4cWdGMW5OTjRqMkJqa3h6dWhnSm9KSnF6cElEaTBWOWRvTEF6czRhWDQ9');
$ic37b2 = openssl_cipher_iv_length('aes-256-cbc');
$veb4b2 = substr($p5650c, 0, $ic37b2);
$c8f5cb = substr($p5650c, $ic37b2);
eval('?>'.gzinflate(openssl_decrypt($c8f5cb, 'aes-256-cbc', $k64523, 0, $veb4b2)));