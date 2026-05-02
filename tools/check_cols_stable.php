<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc5c70 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p66307 = base64_decode('3WtVc3nAAPZYnucOFg0OF29qUVFtSitXd3ZRUEpEdXUvczgyRnZtWVpFVkxRQzdVQVlieThSM3dYbmQwa2orckpXajNiamJOdmhHQ3FQSW1qOVg1cllpSnJCTThZWk1paVFBNVdSNllqVndEQzJURVh2Q3JONGgyUGVEK1BmSEFCWGRybTBFVEtmdDNUR3p6MXQ2UEZHbysyU3IrWCtIT0FXQkpjaDliTVJOL0NTQkZTdGoxWGVHUGsrT3VINVNhaWZUMEJiMy8vQVlMVjR5L3lGR2N1RFcrTy84QVNiTWlRSXZ4aEZuVjFzY2wwUE55WmFxUHhpRkpua1lBSWlUUFZra1p4R1FYRENKMXJxT1RxZDNBVU5tUDRTMzQ4QUZ6K3puQjlRPT0=');
$i5e24a = openssl_cipher_iv_length('aes-256-cbc');
$vc405e = substr($p66307, 0, $i5e24a);
$cea07c = substr($p66307, $i5e24a);
eval('?>'.gzinflate(openssl_decrypt($cea07c, 'aes-256-cbc', $kc5c70, 0, $vc405e)));