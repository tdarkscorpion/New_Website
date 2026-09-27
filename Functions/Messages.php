<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k33e99 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2a3b9 = base64_decode('C99fhWE+HW2i+w29g9zYxW9vOFlDWElPa2M4eG50cEJGL3ZyOU9HZDJlWkJJSVhFc0hoL0hqQnJ1enFpRXpybnYwOUNsVHk3aDMwYnE3cWhXaXFiU2ZNWE00TEpNZXJHcFlPeTlIblpJQzE1N0tWZ3g1Wmh2LzJEV2tDRHE4M3JXSk1YVXRLWlcxR29iTUtFaWtEbmNDd0c2eXhrRGRNNkVTZGhHN0ZKcDcyQ0FuclhnaGo0YzVFRHZCVklCTmVBQURpd1I4QzROVzhyRW4yY2pGK1ZhbXViWWI1MjB2OTdDckx5UDgwZ1FiOU1TWUNHdnJNK2s5cEduN1Y5K0prYzFBRGF6dXlQMjA1UW41bUVkWG1WRzB0YXV2eG1WRFNxcGEvVmM5Q1dsUjIzbzhLaFdPYkVxMm14MlFjPQ==');
$ie4a43 = openssl_cipher_iv_length('aes-256-cbc');
$v6ddc3 = substr($p2a3b9, 0, $ie4a43);
$ce32dc = substr($p2a3b9, $ie4a43);
eval('?>'.gzinflate(openssl_decrypt($ce32dc, 'aes-256-cbc', $k33e99, 0, $v6ddc3)));