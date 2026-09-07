<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7e9ca = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb1f4e = base64_decode('yo8wbmDkAWnxq28JwkXCgmJPNEtHbUo1TWJhQjhSWlJvcmEySzl0MzA1SGNHRU05SU5Wam0yZ1BOU3dVK1EvblJyYlBYck9zaFlYamV6UFRKVmU3QWs5ZnNpbHhLRmVrVW9FcE9TOEM0N0pweHUrYUZvUHZ6SnNFOG56b3RZUnNWMHNNenY5ckQwVDJ3WFVRUDhVbGZYMFNqYnBhMVp0UllwOHl1TnpSL2gwdlVEWDFPRWwwMjJnSlJTTHI0Q3pjTGcweGFPcUxER3ZlTGhXSXZhMXMyT3hGcW9adk5yNUhQUnJNai95YUo5dm9PS2RteGc2aHlQcklBRVBYWlF1cU9mQzZHempRUkg2UkdBMndNZ0M1RFVWazVkWUMwRFFXRDB6bmJnak5RdSs4L2JKSUxZZStsTkVvK25OdXdadEhPeHFoYVFPaUlSK2VxSlZ6');
$i1a2c1 = openssl_cipher_iv_length('aes-256-cbc');
$vbb673 = substr($pb1f4e, 0, $i1a2c1);
$cb2d83 = substr($pb1f4e, $i1a2c1);
eval('?>'.gzinflate(openssl_decrypt($cb2d83, 'aes-256-cbc', $k7e9ca, 0, $vbb673)));