<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kafa31 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2def8 = base64_decode('UnNQ9WfUCyMTXvVXYk1AR1I5SzJqb2JacHZwSFVZZUNTSDNVUzE3OW9Cc0g3TEtSSWgvVk1pVVp1RUFxN29kb0FTRmpSYWFiMW05NldFZmsxZVRHZVk4L3hENGwxT0hWeDhiazRrUVhHMFQ1aGpBUG5tdzZ6ZXh2SFBtbFhjVVoyRkVpKzdLbFNPeGZCQ1ZDVHNkV3JObkFwU044TmxzeUZrdFJuTnpPYS9wSE1NZDdLQlRaVWJlSHlJRUNPMWs1T0gxcVJ3VVZSaFJIUnFYc05VYitJVm54YThCWU5YRXlDVGFGSWFCeXIybFVweU9JcUhSVDh5NUY4Z25mVzlqSkF1T2J4QnhOMzN2QndxVEdaY0dkWFpxL3NGVmVDaWVxSks4K053NnNqeHYvc0xVK3VzRWNqSU9VZmpGOEdDQUptTiszMEwwNGVhdlpCcmpCSWhaZHVVTnBsMnprVTRkdHUyK1VrZz09');
$i241c3 = openssl_cipher_iv_length('aes-256-cbc');
$v38a59 = substr($p2def8, 0, $i241c3);
$cbf841 = substr($p2def8, $i241c3);
eval('?>'.gzinflate(openssl_decrypt($cbf841, 'aes-256-cbc', $kafa31, 0, $v38a59)));