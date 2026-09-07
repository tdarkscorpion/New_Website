<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc41af = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9c11f = base64_decode('ecOpNpLKfLAsjMi19c/lSDY3RzVwVUtwRmdXM3NOLzIvV1JJMWswTmFJbVFVMjY0UytKRitBWDFIVWJiRWg2eGNLcmFPeVVpSjJkOU5SNGtYSHVXUWNUZ0Y3SHhZcFZnNzlYR1dJQlBRcHlCeEdNQWR2UTBmYm9mMFlDMUs1R3FFUVVFM01jYndSa0FWaWJNT1FTcWNpZnlUY0JHdWNyeW1hU3hzcXFlRThHU0lacldkMTZrQWIwRGNKUVZxeTBDSEtMeXhRam9IMGgzbkV1RDRlVkFMT1FlUnkvOHZIMGV5MHFIM2NJUGZlTk1QdU04c0dxNXZpOFZ3eHNxVmFia2JLdWN3Z3RxS3o3aEVLb0E4K2FxYWFEZTM4aXB3aXd5ZXNpM3B0YVdKTk5ja1hEZmkwRS9LOVlSMDdBPQ==');
$i35b1e = openssl_cipher_iv_length('aes-256-cbc');
$v8c11d = substr($p9c11f, 0, $i35b1e);
$c1f4bb = substr($p9c11f, $i35b1e);
eval('?>'.gzinflate(openssl_decrypt($c1f4bb, 'aes-256-cbc', $kc41af, 0, $v8c11d)));