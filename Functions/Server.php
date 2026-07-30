<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2e8b4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc8f57 = base64_decode('PI9T7NRDIJeYeJfUzq/1kzNIYzVOb09TOURiOFdhSHVWUzJld2QyNEdYeEtnbXF1TFI3VTh3VUVvOStiTUtpY1E5SU1sd1NsOWNGZWo0VUthZDBEZnM1d3RpNk1ZdzZ4NWpQL1cyRU9kR3F6R3QyZmZmUDFianpDbEFmVGk4dDJtdU5HN054Tm9zTWtWWmNsS2R3eDFzQ2lNYkp5N09Pb0NMdDBOclBZVXc4eVZ0eWxPRThDTmxxZ1ViY2JaVVcvb3pjcytaREQ1dlFETDFQT0Q2T1VVVEcvVStUZ1pGeXV6YkV5MTl4U0xwQkxYQ1Z3UGExU05rQ1NwU0xCZ3RROHpOUWJDTDd6Z09RUUhKS3dlaDJFY01hcGdkNjJGYVRKS0Q3YnFqSVVOeVpzZnlhZDZBM0pVbGJwVXB3PQ==');
$i9795c = openssl_cipher_iv_length('aes-256-cbc');
$v8ca7e = substr($pc8f57, 0, $i9795c);
$c9a37b = substr($pc8f57, $i9795c);
eval('?>'.gzinflate(openssl_decrypt($c9a37b, 'aes-256-cbc', $k2e8b4, 0, $v8ca7e)));