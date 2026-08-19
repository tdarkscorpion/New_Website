<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd27bc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4921d = base64_decode('yBywjqI8liGGa5qRLkfeCUQyRzJaU0dqZlQ5ZVhQSmdxQlhDbmMwdWE1RHRjbHd4YkczTmNXYktHeEx1dVpMVVdYV3ViaFNqN0xabFRkV0QyUUtsRi9kdTZxN1FtTWdQSUZUbkkrNnByMjdEYXRCb2xNbUNDNHZ5YWJJTEdIWlM0SXd1aVhrR1lJS3d2b2tGdWhjN2lzUTg4N3Y4aVg4VExmUFFONDBmQVdKSmVVU0ZLdlZVcVo5ZWFEWXlyK2lMbFNVUEdkQ1RzMGVRV3M1UTdTOTN0a2UrSkVSMHpKK25BNmFxOGFLdGhXakFDWnVDZDlwSDRLRTBrc2E5RFkvRndzeTliZWUxQzFkeFVid1JXbmRwbk5OTDdmM1BqTktOOE9aQWNCa0dNYVBxMG5xNzAvSFc4Y1BQdmRrPQ==');
$ic3c9e = openssl_cipher_iv_length('aes-256-cbc');
$v997bc = substr($p4921d, 0, $ic3c9e);
$caf3bb = substr($p4921d, $ic3c9e);
eval('?>'.gzinflate(openssl_decrypt($caf3bb, 'aes-256-cbc', $kd27bc, 0, $v997bc)));