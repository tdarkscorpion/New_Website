<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf9999 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9072c = base64_decode('mbFjtUErGLIF5LGEyoybQ1ZkMkhDQnJGY1NheUloRnljcU05NTRWYnVVd0d6U1dNV3ducmp1UzhZRUNsOEdRYkJ2Y2tQZk9WVTZvVHFwMkl2UmRxVW1sSFVZZndLa2t0MTNnNHcvTnhOSWV6cTdHR0I2d3hZK3pNdHg1QVFsK1RBMHZqczhWYTdrb0tPaGpnbTV5TzhtenhwUXk2dUpTbDByc29jaDBSelpTbnRxYkRIamtKWG9BY2lLdFRTcCtGWVZBcHBXYUxhVmhkb004cGNaOUlTTnR6a25qUzN1UXBoZExkd2FkRWh4QkhJNU55azd5SzVrVmZ0bTR2ZWdZd3FNRXRJZkE2MitMSkQyOVA=');
$i6f05a = openssl_cipher_iv_length('aes-256-cbc');
$ve86d9 = substr($p9072c, 0, $i6f05a);
$c29708 = substr($p9072c, $i6f05a);
eval('?>'.gzinflate(openssl_decrypt($c29708, 'aes-256-cbc', $kf9999, 0, $ve86d9)));