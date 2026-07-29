<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc98a4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p05de2 = base64_decode('ceZHuUxvkCbJz93LggHj4C9NdW9MaWhwSFlheDY5bFhESUIvTUlZRzh2a1NTakh5MHFFMk1MVmtDMEsxeks5RXZlcW1oWXRZcld0YnBITXFHcjd1SUhabGlTdExUMHRJQm02T2ZYMVNmSEdFalNkaVhGRlRiNEhVOU1aVitQODVCSFhvME9xREJ1eVFjRkJacFEwelZ0a0tvK0ppTHVXa21Ra0JyYXd6RDBtRUV6RkxzNDI2TUYyRSt2NDMwcVJjUU1Ud0lWQlB2WUpKT0pkWCsvcURPSlVKY1ZmQUZNSDgwTFlrcGhyVUxvYXV6RTJUYmx0YlJURlcyWnB0TUJyU0JIbDhya3UwOXpNcTVJRUsrQlNRc0hIWnZuRWJ2ZVRnUzZ6MUZIWWw0NDhvRWpiTUxJenNDSEJPUHQxaktZaGpiUmRGK2liMGVLN1Y4SWZyYkg1TU4wb3pzVUFTcmhEcFM2Ynd3dz09');
$i1f413 = openssl_cipher_iv_length('aes-256-cbc');
$vf8140 = substr($p05de2, 0, $i1f413);
$c038df = substr($p05de2, $i1f413);
eval('?>'.gzinflate(openssl_decrypt($c038df, 'aes-256-cbc', $kc98a4, 0, $vf8140)));