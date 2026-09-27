<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9ccb4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9d797 = base64_decode('ZUtiCFSxrLUwj1zvzIw+QUJuWlF0SCtNWVY5MElIZXVCYzhzOU5Jbko0ZzZYb2ZPbTBuUUpwc1VPNXRiSXVCOHhjZU9acG5mYXNKcmd0eHM2OVNHZWpXdkJZZjhrRSs2SlBOVDYwVXlreWJNcERVMlcvb09UYys0WDNRPQ==');
$i849e1 = openssl_cipher_iv_length('aes-256-cbc');
$v5578d = substr($p9d797, 0, $i849e1);
$cdd3fa = substr($p9d797, $i849e1);
eval('?>'.gzinflate(openssl_decrypt($cdd3fa, 'aes-256-cbc', $k9ccb4, 0, $v5578d)));