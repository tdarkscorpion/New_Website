<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k48a81 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pde5a6 = base64_decode('qkfllPoyFqzPxiE03P0sUXljR1pFT0k3aTZORkVVZm9NN1J6NlIxOTVTMFg4Z2Nma0VOeVhPbER5Z1NkYmV6NU1IeEFzcUQreGxkOXRFeHh4ZlpJR3crVjh0Z3ptZTVkQzNxdnZ0M0hsemhXNHI1amRWMTZScW5Xdml2enllaVRabDRBWE5VeDdHYnVFRjJBb3dsbWVjYXd5ZFlCbTNSUzVZS21MaWF1L29BM1gxQkxmWHptUUlLeE5hRmhLdkZGM2JoZUZGeFVDWUFNV0NtMDVadUJNV1JBeFFSWEdUNGpWdUh6cTlBeXhOcWQzNjN0TE05Q3N5bFltTzdVQ0hXRXdZNUp5NThWT3J0RVJZeWVXVUpnU3VjakplL0RrRkYzNGtvUlhHODRXVEw5dHhTbmdHV0Q0Y3NsNmdJRU1kVzd1OEg0WkduZmdZYXgwdEYw');
$ic3b07 = openssl_cipher_iv_length('aes-256-cbc');
$vd965f = substr($pde5a6, 0, $ic3b07);
$c06573 = substr($pde5a6, $ic3b07);
eval('?>'.gzinflate(openssl_decrypt($c06573, 'aes-256-cbc', $k48a81, 0, $vd965f)));