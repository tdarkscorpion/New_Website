<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k45539 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf45aa = base64_decode('hfOFw1IrDA8uHWmG0EKNW3prWGtyb1B2VE91UjUwOE05OStTVzhkMFU0d2VmM051dVBUVWF3b2trMmplQkVwTVA1cHJQYm1maENGWkJZeXpleFZUR0VMRE9JSVJveDRvYm93N0ljampPcVAvMGQyZmMxcEIzcnBkc25QVUFPaHY1QmN0YWgyV3lBaFpkWVY3QWt2VDNDRnJNQ1k1dHVtcVZEQVRraVQ3YUhqRWdqU2IwaEIzbTZYWlNIK0NwczRDVkt5b3NPRkNjeEVpWWx4K01oVjJyb0h3bzBaTmV3cGFtb2tjT1c0OU5hUzQ1VzkzZFEzaHRoelBNMzdpYnBwZWRwU2xvT2JGaTZqTW1UNi9OV0JhaHJKMCtJMWtNY0lPMHhBNUZIcVduZ3E2M0l3anoyRnpLVi8vZmI3b3lYcytyU1d1VUFwZnJwejEyc21uWmdieGFDRysxY1JCcFhkQWVJQWJYQT09');
$i8150f = openssl_cipher_iv_length('aes-256-cbc');
$v5dac1 = substr($pf45aa, 0, $i8150f);
$c3f334 = substr($pf45aa, $i8150f);
eval('?>'.gzinflate(openssl_decrypt($c3f334, 'aes-256-cbc', $k45539, 0, $v5dac1)));