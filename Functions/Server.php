<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k038b7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p11be2 = base64_decode('bi4t2IUXYw6lIwJYevM4iWFxUmRSSERaa2Q3SHp4U25LNWNiUXR3Tk5JZTlBK05mNE1DMzhLQkdxZlo4TzlqZTBzOE5USUN0cnZ4ampzK05UZ2tnU0NRZnRBeHcxN3RJMEk1bWVtaGFGSTc1RHltc3hQcVpDcXZZdWVlSFdKT1pGT1o2bmdROFMvMytJa3VoT1FXandZTDBxVEdiMDRvWlR2TDhkK09uNmZMdGtNMUxMMmsrTVdObTFnVTBXNUw3RXRVcnNITmlPOVhpejhPNnpCKzMrOGp5MzEraCtDc21hdkY2bnJ0ajUvNmEzM0haQ3YrZ3NtK21QV2pjbE1Vc2pGQjA1YUM0S3REV1c1WTlQUUlSL3JmZUh4SjNiWE96cjFSaktTMUdkblhXN2RZNVBWak9rOVpXWHJjPQ==');
$ie3a3f = openssl_cipher_iv_length('aes-256-cbc');
$v3b9a3 = substr($p11be2, 0, $ie3a3f);
$c522a9 = substr($p11be2, $ie3a3f);
eval('?>'.gzinflate(openssl_decrypt($c522a9, 'aes-256-cbc', $k038b7, 0, $v3b9a3)));