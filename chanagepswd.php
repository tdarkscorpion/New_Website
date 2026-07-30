<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5bcc4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc3bb6 = base64_decode('3SNIQUdb9IETAxdGmciBXytxT2tabDVmMTh5YUd4NFpyN1MzblAzQzkwc2xtME1Tb1lnaXFFcm81enRlbGNuYk5ONEE1N3M5Z2liV2ZZSDkxREdHSlIvWW94TzlBa2h1QWR4V2V0M21pMmtDSTF1RGM0YWNnOTBPcnh0UnFUOFV4by9WYkFoRUpwNmVLK0J6b1lZUzRtR0FrYkZUWUxveDhacE1qZ3hCa3VsR3Q2ZFJoQy90Zmc4YmU0Tjh0VWgvZ2tGc21DNlQ4MEErNGYvSlEyYk5jYTRqUCtHZ204ajZTSllsQzd4V2FGSEVBZ2xVV1kzaHZRcEFkR2RHWlRBNFFnZit2SlV6bzJSU0x5V2IreGpsenkzSmEzR3hWVjZkRWFOOXdjd1hhaHJwUTVSdlRPWHFpM0VvTkNJMU5HeS9TUStCaFp2MXd5U1BEdDRqcS9Nakw2VGNXcWJ0eS9ZYzZ0QTJydz09');
$i47c65 = openssl_cipher_iv_length('aes-256-cbc');
$ve34e1 = substr($pc3bb6, 0, $i47c65);
$c99658 = substr($pc3bb6, $i47c65);
eval('?>'.gzinflate(openssl_decrypt($c99658, 'aes-256-cbc', $k5bcc4, 0, $ve34e1)));