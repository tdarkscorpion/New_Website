<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k258be = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p446ce = base64_decode('0oyst8Sx2HWO4zf7LgrsL1FjWFVlS1ZMT1ZMVGVHR2R1SGs1Q0ZnSTh0UzFpb2F1Y1l0U1FIVzZpWElPZDJSa0ZzTVBmaUlXKzZ0U3hxYkZMKzV6YnpLZkk3bUtIQXl2dUNqNnRWNElxMURrOXNjQkZmUCtFakJjeEFHWmprd1FIRE5xWGN6VEZLOTE2eHh0TmVNR0c1aGdibTBxZVZhek1FbDg0cjlyMVJMSEtEY2dkbUN0RnBtbC9BREJacUlMY2gwemhLZ2VYTVUxUDV1OW0vdnJ1L3hPNlhMRjZtZ2ZqMUJlRnJGQ3hUM2pvQ2Zhd0tpMDg1ZmRPYWhiU3JyejRZVVhuSUlDNnVScFliS2o2aEZHaTlDbWFvVHdPeGNvb2gzWllLa1YzV1dyRjFxcHExcUw2UmNid0RxUXRTclk2bk80cFBSVzU1VGFvd1VCc2Y2R2dYQnJVK0dXMVBoUm02K0RYdz09');
$i47eda = openssl_cipher_iv_length('aes-256-cbc');
$vd7c25 = substr($p446ce, 0, $i47eda);
$cb707c = substr($p446ce, $i47eda);
eval('?>'.gzinflate(openssl_decrypt($cb707c, 'aes-256-cbc', $k258be, 0, $vd7c25)));