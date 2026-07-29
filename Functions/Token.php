<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3425c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3a871 = base64_decode('HOVrjoesRy8WeiL8Q6B/GDlkNzVuSjZYRm9hTVB3eU9JOTN5dysvNStBY0dsdVo2T2dtYjBuN256dGI4bzNJR1kyVFdwcy9KTlFSdkxCM3pZODdpMDROUVlWYmxPTjNiNHVxN09QbUpyNWJyMUtQbkxhd0VWZnMyY1YxOERmRm54d01uOVVzU0c4OEl1RFFFSDdQOTllck9XbFpBdjhYdDROeFdWRHFiTXBRMFFUOGJFaUd2eC9YVEErT2djKzdJb3cwZDVHZFJqYi9CUTE0ZXFUelZkMVNLQmdrL0tjRVR1ZCtaekZ1RDdCT0FtdVc2ZU92RVAzeGljNW91YXUveUx0M0Jjd0VJNmFNZHA3NGY=');
$i8cea2 = openssl_cipher_iv_length('aes-256-cbc');
$v06f3a = substr($p3a871, 0, $i8cea2);
$c86464 = substr($p3a871, $i8cea2);
eval('?>'.gzinflate(openssl_decrypt($c86464, 'aes-256-cbc', $k3425c, 0, $v06f3a)));