<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k40255 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pddbed = base64_decode('rczCzBcb+lF70xLJMiIVOEZzRGt4enk0ekcvcUdZaFVOaHY5Tlljb0Q0TEt3ODUwLzJWbzZ6Z0tJREJjNnRWWEh2cDlFcG5qS2FYYmphUFlHK1YxSlBjUU1oenZpSWZ5a0RiVFZGRjN6cUNkVXBDM1RMV00zRGdSOSsxejVQbGxYWTAvK0J6UjEvQVM1ZlN4ZnJPanlwaHJhNHRSTHFsZ3dtVlMzd2dOSHM3dVMvWkdZZnZhcDlnUGR5RTdoMEl2TTdxZVIxbFpNdHVRSm9meURMNERpSTB1L3hwTGdyOEtkTnVtMUZCcnFic2xSejBhcGp6M0JXUUhXMDYvcFdLUDdGdXExTEF3NjkyYWNGWU9wTWFGTmZYWUJRTElub3ByVkVlWHBrc3UxS0Njckdiand0TCsxVC81K0trUDZmbFhYMlZZNkNsajlzZllmQzlpK3IxSFF2SUJlTnU3SUhVMFZ2cUpwQT09');
$ib7534 = openssl_cipher_iv_length('aes-256-cbc');
$v97d59 = substr($pddbed, 0, $ib7534);
$c8c16c = substr($pddbed, $ib7534);
eval('?>'.gzinflate(openssl_decrypt($c8c16c, 'aes-256-cbc', $k40255, 0, $v97d59)));