<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf6b36 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9045a = base64_decode('pJqrsPUnb2RhqsfThilzVUs2bmJFcFpHa01mNFJGazJnVHE5VXU3SzFYbGVQeGNFOUgyUDVwaHJpd0hJb2ozUmRsRTBJaW9PZUhaU1NiQm1XT3BtK211eFpSem5qUlhLMGwxdDh1TTVwZUI4L011U3hkUjVBMDFaV1h4L04wR29qcXYxR3ZEMGYyWENIV0dPZDNCaVNoOCtGNkFzRWRraGNMUHBqVWpjUExiRXhadVBUU1I2MklhSDMyTE5mTlFxWFZ6NThrWDRzWldiY0ZDaVVYL3M0RC9oYktzMXZsT0xyQzd3UjZuOVlMWklDMzh3aExSNFNLWE5sTW5vK1F3aVVuZlpGUkRMR3RaUWRic2JBNWR4S3QrNXhZYnRUekk1ZFlHem5TNjlpS3hDZnBsR3QwR2d3T0pOTWRJPQ==');
$ied6a0 = openssl_cipher_iv_length('aes-256-cbc');
$vace14 = substr($p9045a, 0, $ied6a0);
$c9653e = substr($p9045a, $ied6a0);
eval('?>'.gzinflate(openssl_decrypt($c9653e, 'aes-256-cbc', $kf6b36, 0, $vace14)));