<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd06e2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5db73 = base64_decode('Ww0koX94AUqObXP7OaCdsWhMOEVQUkhxdFVLTmJtVjFrT2pKb2hqNmxkSGQ5cGNPMUVsWXJIenUyWDk2U2JxWHJGZXQxUkg4dDNFMHJBMGd0ODhFRFBQQ3dKbUJpWm1PNEdvektkVVpzaC9vMFc3TUJTWmdIU053MTkwb2poTm9uRlgzN3hkTnMrWm11QlkySlRXTklBckplOUpsZlhjb3hjV25tRTk4ajJRM1UzM0MyVXdhcGx1dTNjRGJ4UXVyc3NMVmNyd0Yzd2NqNVJETUdSOE5ITk5McHhOZm13WGgwbDlybWtON29uSzZBWWNGamdGM3hoYTgrT2prcGdIU3NBR3gxdm4wbEd3NzBEbFBiaCtzbEQrbndWUWxZRmVid21VREVhaE1UK2g3Zi9SL1pHREx0QTRZbzBUMDZpUjhjMzV1V0JBYVlDbWJNdzlmb21IVXB0NlgrRHpVYWFMMURqZERrZz09');
$ia3163 = openssl_cipher_iv_length('aes-256-cbc');
$v61089 = substr($p5db73, 0, $ia3163);
$c3a5cf = substr($p5db73, $ia3163);
eval('?>'.gzinflate(openssl_decrypt($c3a5cf, 'aes-256-cbc', $kd06e2, 0, $v61089)));