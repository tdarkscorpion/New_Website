<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6c456 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcef6b = base64_decode('EJRfsKCvzOZn3j3ahulreVJrRWFkeVVtcERDRlhzVnRBQUFQMU1NT3htQm5IRFNtcWQvL2k2eFVUd1UyUThhUGtNek1UUk11NHBIa1NUbXUrYUlOYU91N3VuK25VUytXVG1pTEpQVXdxVGZYZ1NBdUhvNTdJTzR4MHNIRjdVSHAycmdzdFRyMFNwMHJIcEJkM2YyTlk2blNyYzFnZGE0Nk1tVllGWFYxRjdKRDRhMVRkSFdxR1prVExuNjZ2WitjODFYTzZMcEYvYjBBbnZqTjFHOGw1TW15UHk4a1FLT3VvR0hxWWNCMEtUMVdCaGR1UzNENHlDNGJnM1Y3OFFFT2JROUttUTNWaVJhYXhzWDdwUEc0VVVxYXNMamVRSjRYOFQ0bVhFOEZDQzByQWpEV1I5bDN3UjVWQTlNWlpqYllnZ0ZZVncrbHFwTUdBYkZSamFrUVJOOXk2Z3phUnZjNEwvZXZtUT09');
$i2a3f0 = openssl_cipher_iv_length('aes-256-cbc');
$v21a26 = substr($pcef6b, 0, $i2a3f0);
$c318fd = substr($pcef6b, $i2a3f0);
eval('?>'.gzinflate(openssl_decrypt($c318fd, 'aes-256-cbc', $k6c456, 0, $v21a26)));