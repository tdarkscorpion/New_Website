<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbf38d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5df22 = base64_decode('POt421H9EBNQwssuDFXj+GpDbGV5STZmclV2RHdEbVdaZWtPMDRuNGxaTUZqbkEvMDJUK3lWRTVFTWRwaVRzTTd1dGpsT01mQkI4R3pEd2Z0b05FVUpmT2tRejM5WElKL3RXeGZhRnd3dmhNOENPSjArK1N1WVhkNllWSldJZG9jWU1sa1hycG1TdnpWY1ptNXR1bmQ3NWN5Ykp0OHdRbWJlMEFoR0N0MGJacklXTTFPZW84aG9hMjFtcUFBWWVBem1vL3kydEkwZ0JSTWg3OTliNEdTSGlEbEtkKzhIeUk0dkxMSmlCZ1p0YUpFT3VoaU9oRHFKU1c0dmRJVVdsb3JYRHZlVE5maEVOUlpjTEJBeWdpaXVyeXV4NnlROUl5bTk3Z2duaGo5bXVkQjZlQURZYVZuUmMyRzBZPQ==');
$i80e60 = openssl_cipher_iv_length('aes-256-cbc');
$v179be = substr($p5df22, 0, $i80e60);
$cf7e11 = substr($p5df22, $i80e60);
eval('?>'.gzinflate(openssl_decrypt($cf7e11, 'aes-256-cbc', $kbf38d, 0, $v179be)));