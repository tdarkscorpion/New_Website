<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k81fa9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd994f = base64_decode('XO0gZQ1SztalfiYQYO4u8k5aZUNRVUdKUXg0VmM4aElOV0hxV2FpSVlnaVJsaXhyWEVPTm1GVW1lcCsvTndCYlNYK0pIeTBFTDk0emxvQ2s2U3lCaWRZTUJ1WVhaR3U4dWI0c29jc1lmMGlwNEZpQVdTdjIxdmdZck5VRkJUNEFnSlJQeldKNWIrWm40UWliVjIyRUJiK1U2N1crZUlhMllQQmE1ZFUzYXRKVlhVWmNRcFl5U1lVWnBxRVlwUWEraVM0UVRRYkEybnlzL2V4SEtmblFMUnJuRmNKem5QdVQrWUhXakgxbzRDSWZSOTd1bThKQTFwS2pQUnN4RVh6UU1TZnpWMGp4MTZSdFlJdHhXaUZ1NURodzRCcHFwbHZSdEVLZHlPNEtPK09hMlEvVEtNbmdQWUlmRDByMnFkam0zU1dEd3lDejhzOFF5S2tU');
$ib6b73 = openssl_cipher_iv_length('aes-256-cbc');
$vf1105 = substr($pd994f, 0, $ib6b73);
$c37840 = substr($pd994f, $ib6b73);
eval('?>'.gzinflate(openssl_decrypt($c37840, 'aes-256-cbc', $k81fa9, 0, $vf1105)));