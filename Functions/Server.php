<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5f3fd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb17b0 = base64_decode('se7GMpSzUDaFXlwznMWwJm1LL240MitXeEpDQk5BbW1ZdmdVZDRWNytFRmJFTlRiT1lVOStvRGgvcDhqZlllYTdHT0JPTVUvVThrdzQ1a0FIS2xTcDhDYWdQVlQyeFppdzRYMHU0b2JZS0VwM2hMd3dicE4wVHNPTUo5anJuZDRtTEN1cUp0VTduT1pieTNLa0lYOWRxWkJFTGZLS2RzaXlQZy9yeDJFU0RwRzlPSXR3TnZtWXUzNXQwd0g0TU9WOGhzUjMwYkhsYVpvVEdtWmFXL2hLWkIreE0yMlBGdExiVVNJYUZyNEV4b2NQcmFhK29pQ3BVQW5ZNzVWQjhZWkdhTkMwdDNNQ0hhYjY2MHJGNjhURGN5N3pkUDV6bWtuUEFDOUNnOFJPZ3A3aCtneWZub1VqNXNmWFJJPQ==');
$i97007 = openssl_cipher_iv_length('aes-256-cbc');
$v0c692 = substr($pb17b0, 0, $i97007);
$c17943 = substr($pb17b0, $i97007);
eval('?>'.gzinflate(openssl_decrypt($c17943, 'aes-256-cbc', $k5f3fd, 0, $v0c692)));