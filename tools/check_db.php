<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke4c4c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb9ca4 = base64_decode('VF/rxI3GiLbuBjeyfEGHyjhjTUNOQ0JkTU1CN2J3a2RQWHFuSEhBQkNiN3R5UVdOOWJoN2VYaHRRTWRmRWVqZnRESXdMeUlSdHlma3lhcGYzUW9FR29BcStQOVFOK0JtWTYvak1iMmsza3YyNmxzTWtydlZ4dVRSblVCTDNPU0crdHoxYmdEMVM1RlNOZU83cTVsSmNnU08rbnNMTlZXUjBZVnlwZGE5V2VpZ29aU3U1alRTZXRINUF0eGJObFUyeXBDTHZLeXgzUmFLeS9BaFh3cVkrREVPWERSNVdXSVhVTDZEaGhYZUZmT0dVeG5weEtNNXZlNFd3NWkxcnhlMWF1L3RCSWViWkdsTzR5amZXclY0K3pod2k4Y1V1UTF6SnVVL05QVFJmN1dBZGxjek1rbnFQZ0pUL1BJUDM1NE51QW1KblRKYndaS2crSW9J');
$i8e9f9 = openssl_cipher_iv_length('aes-256-cbc');
$v47fc8 = substr($pb9ca4, 0, $i8e9f9);
$ce189e = substr($pb9ca4, $i8e9f9);
eval('?>'.gzinflate(openssl_decrypt($ce189e, 'aes-256-cbc', $ke4c4c, 0, $v47fc8)));