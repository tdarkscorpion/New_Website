<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k227f1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p66734 = base64_decode('5eb2F3hQBQIlAnTEiNm65zdEL3g4S3p2cGc3YlFKVERicmthd3l5dExNRTN1b0lpbEdXeUg0ZzRxZ1hlaTJwUThycjdlK2lLb1N1a1BNSmxoeUY1amNmZC9IN2pEd1Y5OE85M1ptQkhGMkFrc1IyK2hOK3hiNk5oODhjSmhpUU0vTEc1Z0lHcWJ4QnBTM0UrOW1EbjJnS0I0WXZ0dGZDYVRKR1NzdFh6a3pNWWgyN2pib213M3lSVkRwYTRzcDc0R2MxOTJkd21CdUVSS3hMUVVPam5FMlU3M2hIY3JPV2xnc3pESFpRT2pDejJEUE5Ld2FlbjJQYkxJUi80cFhhL1JuMm5NUFlmeXRROU1IOEdNbjRLMTA5UWZjSEU2RzlBdmVaMFBaTU5wUHNId0xpY1ZpVk5oeC8vbzN3PQ==');
$i238e7 = openssl_cipher_iv_length('aes-256-cbc');
$vcd3a6 = substr($p66734, 0, $i238e7);
$c51542 = substr($p66734, $i238e7);
eval('?>'.gzinflate(openssl_decrypt($c51542, 'aes-256-cbc', $k227f1, 0, $vcd3a6)));