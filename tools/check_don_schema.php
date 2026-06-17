<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf8983 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5229a = base64_decode('BAFTDianedAEsokSfSpX6DJhcDZKd1N4dFJsbDd3NlRHUFRFeFJGQXovWE9BVk5nQ1dQMllBS1ViVnhJRlVOUXl3S3orZE5uLytTeVlFMkRqM05pWkVRdUZPenpyZSsrYkFlWXlhUUhwMkpORmljN2gxWWxNU1I1WG5WQ0MvaU1lZFB5aVRjbEZ2Y1lGZTlaaHpDbGoxc1F4Zk5wMUZqdUlwQnR3Wjh3T1Nubm9IQzMzbHdQdWVnaWhRbVFBeDgzc3NWWFgwdEJUL1J0ZnJlUm9UVnVhYmxUejVHaVBLL3doajUwRGF5OUNDRi94TVBIQXNOTUdSQkZmWkk9');
$i11cbf = openssl_cipher_iv_length('aes-256-cbc');
$vf0e7e = substr($p5229a, 0, $i11cbf);
$cf778c = substr($p5229a, $i11cbf);
eval('?>'.gzinflate(openssl_decrypt($cf778c, 'aes-256-cbc', $kf8983, 0, $vf0e7e)));