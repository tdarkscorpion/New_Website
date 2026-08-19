<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb6ee7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p62394 = base64_decode('PrqNqTtMG0OTZGQsRFvTWHE0cEJJdEVhMDJhM2xSTWtRY3V5SGgxWkZYRnNzbTVGNElWL1pDWmllTnJBNTZaeFk2V3hKMUU5K0hKWFoyMXkyZklmNjlZamlaRzUrQ0pwYjMyUnRha3VHS3dnRVB0MXM2bzVDM3pITDFqWmhIM2ExV2trUUNsSFRlVDFJMWNCU0Y5M2kwMVBZZ3E2YTA2UUR2b0dhL0Y4V0NvUEkxUWpUbUpIL2xmU3I5ZSt2TFFhcW9tWVZZNlM0bU80VC82Zjd3bHBRckNPRkExbHFvM2tXS1JwNlQ1aUt3QXA1aTc3T1dzOTVzaWw3dURTYkJWc1kzY0ZGWXZkbTdzaWY2WFNyeUYxcWxjTnpaeDcvWkt1dnBBZWhUbUhlRTduYUdsSWN0WFRBK1lzeDFQSUNGZEY0a1Mrb3l6VkFFVTMvNzNM');
$i524bb = openssl_cipher_iv_length('aes-256-cbc');
$vd60eb = substr($p62394, 0, $i524bb);
$cf470f = substr($p62394, $i524bb);
eval('?>'.gzinflate(openssl_decrypt($cf470f, 'aes-256-cbc', $kb6ee7, 0, $vd60eb)));