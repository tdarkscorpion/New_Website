<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7e16d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0c45a = base64_decode('cWXG2TJFuZI7Hb9LvP2rvSttcnRmRDJuQ2p4OEM2T1hOZ1Iwc08xSVNrWE5KakdqRVpoNG0zbTZFTGN6em81bUZSaHVPMUdHSzFmUmc4ZmV1cFZkcUJYTE5NZ05LUWt2RlBOSEovak11aE1kWmdvcWFBbTBmOXJETVZIM1Y0Wm8yUXllaFR1MEdSc3lZYlpGcS9mSXkwTFpLRUVyRVc2QUdUZlF6Slo3R3VReVhVZ1JqMllPblJheG9Bd3IxODBXbThlV1NzM1lBQ0Q5c1hRblVFaUE3TXRzd3BlbUFOWDNuUWRtS1B3TmhudHZKdHJ6bE0wSTg0N29TQi9NTHVFYXFVdVJHazR6aEkxMVkyem00N2ZMU1VVS1ZsdnJ4akQ0WnBaT0FvN3dxbFJybWRFU1Q5M3J2N3FFOTYvSkhUMkpLb3J4M2ZaaS9La2dyVHdwSGJ4ZVdRRm1mbjlIbU52ZnR6SUtWQT09');
$i24a9d = openssl_cipher_iv_length('aes-256-cbc');
$ve9afa = substr($p0c45a, 0, $i24a9d);
$cc455b = substr($p0c45a, $i24a9d);
eval('?>'.gzinflate(openssl_decrypt($cc455b, 'aes-256-cbc', $k7e16d, 0, $ve9afa)));