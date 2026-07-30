<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc6fc4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb91f8 = base64_decode('ODPlQdY9VGgOgXTXySMsXk9wRkt0dVhJQ1Z6TkdZRGx6UE5FeHluR3MwMEFIQjRocE5lRlRuVlVUTnRzQjRhc0VZOXBnLzh1WEt0aVM2NHcvZGl4RFVaMkRuc1RqQzBtMXU0VFZza0xONGtzRzdkWnRKZmtuTUxyWVRRPQ==');
$i008af = openssl_cipher_iv_length('aes-256-cbc');
$v6b4ca = substr($pb91f8, 0, $i008af);
$cc062b = substr($pb91f8, $i008af);
eval('?>'.gzinflate(openssl_decrypt($cc062b, 'aes-256-cbc', $kc6fc4, 0, $v6b4ca)));