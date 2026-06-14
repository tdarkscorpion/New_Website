<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keb23a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0c060 = base64_decode('4WlVyyrkzoqfp2PHKETbaTkzbjI4QWhmeStSNmxuekxEN2dLY01aYVhrZTNROGFVd1JFM1FERm9BdGgvdGJObmwraHp1dG5WRGFZcnlhZ1RBekdJYXJRMXZRRUh1bXV4RjdLYXJyZXlYUHE5NVFPRHhjRnlKMUU0Q25KNGtzWnRLYjQ2WEUwdnZpSmpTcE1OSXpIQWdKdVRqSENFcklxSW9yeHJKWWN3a2I0cTA5NTJwTTJqVDlkd3RteWVMK3M4TUo0cVpJajhlZmlNc2FMTDlQbWRxUmlKUng5a3RiU2tNd1NBRWIrejc1dWZ4OU9UaVhrbG5VQmI5aWFXTEFKaEV0QnBrQ0pvUisrOEVWSHArMzBTa0NFY2FzZElxcnp1NHpGcTVDemJka0JUelZWcmJ2OXNWdnBhbW5hYVBHeVMzRkhuaTA2WmUzanVMOVNh');
$i49fd9 = openssl_cipher_iv_length('aes-256-cbc');
$v9a687 = substr($p0c060, 0, $i49fd9);
$c60a75 = substr($p0c060, $i49fd9);
eval('?>'.gzinflate(openssl_decrypt($c60a75, 'aes-256-cbc', $keb23a, 0, $v9a687)));