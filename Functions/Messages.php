<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k638a3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd9256 = base64_decode('LjFIg4CPnW6bZXGAaFA1HGJ1d1Q2alFrTFlWdy9iSVlLVXhNdDJqd0FnVlNlVnlTbkZVSnNBNzhVZFdpZE5VWkZ6NTl5VTV1WEZiYlcwSzFjN2FIKzBqNnQrSHNBR0d2c1ZXeWVLa1BFTGVraTZYci9YbHNGazBwQjdPWlMzcFlaV1VYRCs1aGhmREhUcGJTV1BNMnZDb05iSnJGN3h5KzFrR0I2T2dEV1VTK0p0Vkh3TlBkOEtLUjFQbjdvWW5tMjFMK2wvbFNhRjRFdVlVaFZON0FDRUVLN0tjYnA3L0pSS1ZlZHF4NDFldTNlVVB5YTRRY0I0aGJBUkRzLzhBWEdSUmJsQlhDdGROWmYyV01vY3pxZkYxYWl6WUJXRlAvRVNqQWJLczZKdEpQVWpwaWtHZFRlMnVnL2dRPQ==');
$i4edb4 = openssl_cipher_iv_length('aes-256-cbc');
$vcff99 = substr($pd9256, 0, $i4edb4);
$c93f34 = substr($pd9256, $i4edb4);
eval('?>'.gzinflate(openssl_decrypt($c93f34, 'aes-256-cbc', $k638a3, 0, $vcff99)));