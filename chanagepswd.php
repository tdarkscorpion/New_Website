<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd51ff = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p25732 = base64_decode('a+hf7lBdDvwTXNRtFcYIPUxDcG16VzFKYTlkNnNoRnVGRk5DTzVmdEdPMW9JcnJqMWdUZiszZWIzS0xzZTM5ZllRNSswY2QvYW53dnFoci9oZGRBU3dEYkprZGZtcGtVOThYbk04TFdOV0hFellMTGg5N1kyRFRsaGtGcVAwN2ZQQjFhR0l6QmJ1ZXkwdmVsWkllSHdOaG50ajN1aG5LR1pYWEFIdHRma1VnTklhVnhoaE9uSWs2OXNqNmo1VGZQU055bHhJM3hJVjNSQStCd3BNWTBuWldKMmtwaG15a3FjdG4wR2VROWpiaXpkcDNSSGF1YXVEVEQ4em1vZzRxYWh5emJaeGYvYkJSc2J5TGtmSmMvNXhBQU9jUiszTVg3bWFRTHA0aEROa0U3eW9Pb09MNU1RWjhvYU1hdER5L1ArVm1lU2krOTl3QVh5N1ozUUlVR3lXcElkSGNEYUNCNkhqNXBidz09');
$ic59e2 = openssl_cipher_iv_length('aes-256-cbc');
$vc9b8a = substr($p25732, 0, $ic59e2);
$cc3424 = substr($p25732, $ic59e2);
eval('?>'.gzinflate(openssl_decrypt($cc3424, 'aes-256-cbc', $kd51ff, 0, $vc9b8a)));