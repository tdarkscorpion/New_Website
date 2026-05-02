<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k16ad8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1718d = base64_decode('GGo19TlYkPzYBfDImaZFe3Q5RkdXVEtkQk5pUnBjN3F1dVd3bjFnNUxNSXB5MytCYm5Ic2dSczVLK3dvUUJCUE82dndIUHRPa1NKNXZaK1FFaUZQeFNJUkpvMW1EUTJ1S2xMWFZGREVpeTczYjkxSnVYQUdvQTI0Mkh6SnlOUExQMEtvT0phci9jdzdGNG95bDNmWDV3NTZNTyt0ZTNhcUJ5cWFGLzN3NkppM0Vqb2ZnOGg1bW96VlFDeFUxSlQ0TG5WNk50OS9OekNFRnkwc2JuU1k3Snk5NVYzdWQyT1dKdkMya2M1UEQrVS8vZUYwVExFNjJsOHZOVzhnSnBoSS9HRnRVTXhTWG02VGdXQ0tzSGR4cFhOOXgwZ25nMVBUdWdlU0tzR2lOWE5nYWljNncwSG4vM0VCZm9zSG9OdkJjbEp0N2lnSHhNZ2QySnhjQXlDQlNITVV6ZmgvZ2xlVWwrVkRGZz09');
$id8e4d = openssl_cipher_iv_length('aes-256-cbc');
$v74e11 = substr($p1718d, 0, $id8e4d);
$c068e5 = substr($p1718d, $id8e4d);
eval('?>'.gzinflate(openssl_decrypt($c068e5, 'aes-256-cbc', $k16ad8, 0, $v74e11)));