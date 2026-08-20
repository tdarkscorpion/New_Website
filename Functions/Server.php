<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k060fe = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0cd7e = base64_decode('3xaBS2yLqPydJyn5nKdW5Eg2V0FxQ2VVYTF1UXhvY0FZS0hNZHNUNkpoY0FGZXlNSHh1ODdvMnVSMHA5a3pmaStYVFRQRDN2RksveWNzK3dlT3RHamExSldsUWJWYldWTDZyYTRPKzlnZGdqY1VlL1RXTDk3QWRhSUZsN2F0eGdFVE12eWI3QzNmWnErWEVPVmN3ejIyaW1xMkE5bXEvVC9aNGtoUTZja2VlT3Ntc0F5QXhGU2lvTkZBMkw3bDMrSkhNcWMrOGRQeTBzSzlJNXB6VnFyeitEYjJTVmZtOXZYNXRXK0xOZEhCMW5hSDYvYys4aVN6S04wd25zRjVOMk01ZFRzZnZOSDhMa3NCbFpyckc5UjJHOFJOMFI4U2M1NEdORzVXOGhpSStteXhHSUo1clpwRHdzVkFZPQ==');
$i21e25 = openssl_cipher_iv_length('aes-256-cbc');
$v4e7c1 = substr($p0cd7e, 0, $i21e25);
$c2adfe = substr($p0cd7e, $i21e25);
eval('?>'.gzinflate(openssl_decrypt($c2adfe, 'aes-256-cbc', $k060fe, 0, $v4e7c1)));