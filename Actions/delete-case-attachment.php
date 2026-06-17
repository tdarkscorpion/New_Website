<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0408d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9ad68 = base64_decode('d3fLWdByWwaK8f4GwV8FMFB2NWc3UEZXU1AzVWw2WUJrTlZjZ1FYajBmaEdTam9rUkNzbkt0S3dBY2VpbTBLNGRHaStxellabWdVb3hBRFFCVy9IWnFPc0FUUVdFbzhBZmtXbExvWmsvWHJPaUZjVWV5UFd2MGlTVElMakU5bjRNbzZ3dC9yYndRL0FoTERWdVYvWHJETWZsMDFKYStyM3YrL0dJM0tZUkFmZCtZUTBpR2tNQWNRUEFKQ2tPSUowMDlDSUJPQmNac0VlRmxrc0xwaWdPRVpwRlllYTZ3ZWFRa2RQZjZ2aWVDUHNzUTNxRnpXekQrOHRhdUYrUkhkUTU2MTQzS0pQWUxoNHhDMzhxODhqdXhwOTZuN3M4a2IwejJpa0t2eXkvSWFJMEc1ZmZKVmVvWE45VUJla0JFRkhLRTFpbTI0L2VyNVVpSlFk');
$i6cfe8 = openssl_cipher_iv_length('aes-256-cbc');
$ve9777 = substr($p9ad68, 0, $i6cfe8);
$cfa3ca = substr($p9ad68, $i6cfe8);
eval('?>'.gzinflate(openssl_decrypt($cfa3ca, 'aes-256-cbc', $k0408d, 0, $ve9777)));