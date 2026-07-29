<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k70a78 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb776f = base64_decode('QzQqmf0L1grt9SA9GFBqSm0vY1hxOEJsbk5xWDNEd084UXBsdWtDL3cxektYZlNXWXk0Y1hhejMwN2w1MTkxcEpSRDNwRjgycnhXVDNWeXhoNmwybno1MTJRb201cEFSUjhvQVpzdHpoQXM1VTFFc1R0QnhvNUZUazZnPQ==');
$ic23ae = openssl_cipher_iv_length('aes-256-cbc');
$vedf10 = substr($pb776f, 0, $ic23ae);
$c76a18 = substr($pb776f, $ic23ae);
eval('?>'.gzinflate(openssl_decrypt($c76a18, 'aes-256-cbc', $k70a78, 0, $vedf10)));