<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke9646 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5c220 = base64_decode('39gErqDofjMbjr1kkk5naG5yRkhoUnJsQk5YdTFhejg3bEpzY0VGdmMyMnB2ajltVHJ4T2hqNjg2ZWRyYXlRWDN5MEZqUG5YYUd3VEVMRzY3dTJnaXNPdGhraUVLOGg4N2hwcGV5M0FkWEF6MU01OXczVFVUZkxId3o1TFFTcllYOG4vNjhEdUhTOTdCVzVnK1ZySC9wbitBd3MrTjFOa3VvNXpnUFBUTGZTLzJXcm5FMnlFbkt1dHptbmxxa3I2NmZiUS9HM1dHSlZNR0YvdTA0djA1V0FjdC92cE9KZGNPVUVYWmIrVSs3cTE3cFM4NmlTYUNueklLZHdoOXNidG55VFZWN2NDNnMySDFDR2xvd3gzTFVuS25GRG9hU3hmbHF3cm1nPT0=');
$i15ab1 = openssl_cipher_iv_length('aes-256-cbc');
$v297ad = substr($p5c220, 0, $i15ab1);
$cb2a39 = substr($p5c220, $i15ab1);
eval('?>'.gzinflate(openssl_decrypt($cb2a39, 'aes-256-cbc', $ke9646, 0, $v297ad)));