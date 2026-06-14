<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7f6e5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3193 = base64_decode('s80yZSq1T1HYqNWMYG9vH2ErNUNlZWt3enNIZ1hYSk5rRFZ3M1dOd2FDUEVFVW9iMUh1MTlLN3lINmJMMTdEVjY1WGsxdUFyd2ltUUlLSUhYODFRb2xLSWdaYmR6UVlYenl2cUJNc2Q5NzVOWVZFRjF4RkpIa0pmNStSNGdGWnlwRXl5ZUxvOWg5TmY4b0ZVcFFvbi9lZnBxV0toMENaZ05QdU9jQXBrajVrTU1sVzJpbmxsRFRJN3FTUXVBQ0h4QzRnWUJiRjBKV2p6d0k0UzFoUGZPT0tmMjZHU3d5ZitIeFgwbE9yclNRcjV5eGczcHBrOTh2Q0tYWlE0UnZoQ0oyNi9FV0h2TSszRmlQV24vOUtoQ1JjWklMQTZIekZoNEtxNG9LbWlhZDlqRUl5NEhobmhzekJGUFJjPQ==');
$ibe21d = openssl_cipher_iv_length('aes-256-cbc');
$vfa610 = substr($pa3193, 0, $ibe21d);
$c64413 = substr($pa3193, $ibe21d);
eval('?>'.gzinflate(openssl_decrypt($c64413, 'aes-256-cbc', $k7f6e5, 0, $vfa610)));