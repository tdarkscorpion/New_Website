<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke1c43 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe8535 = base64_decode('Z1Q0z+bR1peoFMKkaqrq3XN5QVNWbVFjckFIYnF1eldSVytaYjM4MDB6Y1ZpdTdzNDhrZmx4VmU3TWFQdnFiczlQcFo2dGJJYnVqRHVPZk9zSEs3WWxRVlF1WlM5ZVhVZjdpVkxseE9HNDQ5RHoxYU5DNjRWU3oyL2xhVXNqOW9MYzkxN2RKNitqcEQ5T2kyTXBnNGZHalVyY2ZJcktzTmsraVZqTGl4NVAzZGJLK3RaR0llMnhMYmIyZEprNGdZRTRVOWNxM0J5UHIrV012bEhiMHBoaEVnVnJhNlZPUTduQnppRFpqYkl4VzNqZzJkcVIyak5Wby8vODFxOUZwYmt0cExFWVdPUzM0OWk3VXA=');
$ibb7da = openssl_cipher_iv_length('aes-256-cbc');
$v38783 = substr($pe8535, 0, $ibb7da);
$c5cf29 = substr($pe8535, $ibb7da);
eval('?>'.gzinflate(openssl_decrypt($c5cf29, 'aes-256-cbc', $ke1c43, 0, $v38783)));