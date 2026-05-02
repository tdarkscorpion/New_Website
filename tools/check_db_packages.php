<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5f1b0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf97ec = base64_decode('ZVPLz777CImHa9yIL1j/FVg2QlNSekNBK3Mza0Y1cDUrMG5yaGNuazA0bksrdUJhZXFEb2NDYkZxTmRoQUovWUY0cmtJUGRBL3FlQU8zQTNwd1N5bDAySjczRUNSc3RndzBuMkowOGR6Ym9XbHJWU2ZXRnFHTUQ4NllTbFNGNTJCajZkMnU5WUtiQTlJQ1FrQUJGVUNxenlTTzNtM0lueG9GSGF0MlIrL0dkRTRjWCs4OVRVaWZ2c3c5UUtMY2VMTm5pZ0Q2ZTcrdk10U3pJcTlHRUJqM2doNDFUWWpwb1JVRUViU2c9PQ==');
$icaa28 = openssl_cipher_iv_length('aes-256-cbc');
$v071c5 = substr($pf97ec, 0, $icaa28);
$c3db93 = substr($pf97ec, $icaa28);
eval('?>'.gzinflate(openssl_decrypt($c3db93, 'aes-256-cbc', $k5f1b0, 0, $v071c5)));