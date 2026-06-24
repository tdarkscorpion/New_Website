<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kec8ed = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9a09a = base64_decode('g3223bQxDZQRDy/yQ+fbFFJCVFhxSGVvUXhzTDRyeVEwNDc0eHRKSWJuL0pCTXBTYVhXaFZnekV3UUdxVW1RZmsyKzlud0RDVmthNW5PcU81U0dkcGFYVmc4UDIxWDVDdy9zYll4RGg0cWcxN01YM2xVSXNqeHRmdWJvPQ==');
$i7162d = openssl_cipher_iv_length('aes-256-cbc');
$va68f2 = substr($p9a09a, 0, $i7162d);
$c38432 = substr($p9a09a, $i7162d);
eval('?>'.gzinflate(openssl_decrypt($c38432, 'aes-256-cbc', $kec8ed, 0, $va68f2)));