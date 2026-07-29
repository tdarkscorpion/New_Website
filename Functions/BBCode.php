<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k472a2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc0452 = base64_decode('UusPkYFuoLJGOfrDh86NiERzOThLemlQSWVFaEMxdHhwVm10RE5LN2pKWDAybXQvRnowdUNJd3U1UG11S3M4dVkzUld1ZEloaHArYXlJdmJ2aUpqQVlSakJhRGE5V2lCckMyU2toQnduZlQ1VlBmTVorSG5nUlowUFJFTkxnV3Jya2VtbFRHYTdJR2grVmQxRVJhY292WVNldkQvdlJFWVRRWmNmVkZTczFyaVZHM0ozQjBJcGdFVUFEZWpFMWVUSEJDWE8zQVBlR2YyTURlQWgzQ28rUVlIVzlZZ2ZOWkxXSjBVUEdxMFN1aG9wU0trNEswT2RaUTNzSHVlN1RjcjgyVUVla0tBSEF5WUZaQkZRR0ZZSnl6ZExibWhQdS8zL3NIZGhJbWY3dkd0SEs4aXllc3RRZ21uKzc2aStzWnVBQXNYNFRjSU84TG5pOEoz');
$i231ae = openssl_cipher_iv_length('aes-256-cbc');
$vab130 = substr($pc0452, 0, $i231ae);
$c0a6ff = substr($pc0452, $i231ae);
eval('?>'.gzinflate(openssl_decrypt($c0a6ff, 'aes-256-cbc', $k472a2, 0, $vab130)));