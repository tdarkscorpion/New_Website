<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k494bc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p91f85 = base64_decode('H52eSyDaaoKl1IWTvslZd1FmMWpSQUJ0dVBCZXlCZWVhUXFVSFd2Z1lFT09xZTdaQmpRTDFMdlJrVlIxd3Q3cWpmTDhmdVNXWGo2UU9hNHk3WkNjUWJPWldtREZRRXRQWGd6R1hkRmxnUElrVzZjUHAyYWwvRjJwRkhJSmVRK2tyd2J0czBjMys4YnRXVFVNa2NVUUtMM0FzVUxNelFXZlFqRWcvRDlVMDFTelhZdmF6NDFCVnRvNDM4N2ZWa3k0UUx3c3hIMkxzVWUyOGJMcHlWQ2NxeDZCelJMOFdiUUtCYmhScXRFblp2S2tXTE1qNzVnY3ZCMC9DRnZsZHNYVEFrV1lBZnFGMDNpeGNEOUtpQ3lXUUIraEEybnNheTVXYjY1cllMVEtDU091QWR5MDVMNUlQR2pRQnZJPQ==');
$i095b4 = openssl_cipher_iv_length('aes-256-cbc');
$v38fc7 = substr($p91f85, 0, $i095b4);
$cc0b0b = substr($p91f85, $i095b4);
eval('?>'.gzinflate(openssl_decrypt($cc0b0b, 'aes-256-cbc', $k494bc, 0, $v38fc7)));