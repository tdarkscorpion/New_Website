<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc00b5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6d9cd = base64_decode('ixnFmOhzPpcTdVa9BMbdDnlYejJLQUJZY0NUWXJxaDNNMFY4ekpuck5yeFEzQjBjelIwOUw1YU5ORThUUU9uN2x2NmZ6dFpsOVF4VjhEbEcrUEZOWGNTZ3RQcU9vcFFhY1ZROWphRmY3NkpYSmNteHpjdE1ZMTlyZk1jbm5wbE5Uams1YmZIZzFudjBYcU5pOFI5cWp0aElleHZEbTgzUVdZeXB2dVNpWnlnNGVzVllnbTBIZlk1bi92SHoxOEpaYUpCSlNPRkg1ZzlRUHB1ZXliRG5OUU9jMnpnYUh4bFJVRlE0TkJNRmdoSG1aSi8xT3VWSDFrOGk0UWpVSkZpRzk5K1FJSFkvd2ZBekcrZ28=');
$ibc1d4 = openssl_cipher_iv_length('aes-256-cbc');
$v2b797 = substr($p6d9cd, 0, $ibc1d4);
$c7105a = substr($p6d9cd, $ibc1d4);
eval('?>'.gzinflate(openssl_decrypt($c7105a, 'aes-256-cbc', $kc00b5, 0, $v2b797)));