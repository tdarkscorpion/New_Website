<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd7f86 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p22531 = base64_decode('atmdvRmwzvHRRv0XGfunb09VeVFqS3A5elJ3VnF2bExMaXFhTXM1M29PRFJzRHFIU1IyZkgwbm80VXlId245YW5nTllicFN0ZmtnRlppbHRxUCs5YS90WktCbmRlSlNUd0FrK0lwZkJ2Nmt1NTdSS3gzd3JOdnlIYXdaYWszdHJzbVE2d2I1aGx0OE1JNXRoMm0vT0xBRDUzbHE1akMvOFloek4reERTaXI4T054VWtsZ2NFNlhmR2RVa0h4RmhnSEozWXdUSytzY3NaRGt3RzlQanFVb0xIWmE1NXZzRU1ZNmZJSUJkNDNFOFprZUsvbGZZbklHV1NNcGVTYjRNbnNsVFF4elFqelBnQlZpalFUeTVUQmxDRkpaZ25CSVpNOUUrclk4Z0JyNi9vcnN6NXRzQU03a1BsOHI0PQ==');
$i10dae = openssl_cipher_iv_length('aes-256-cbc');
$v421f6 = substr($p22531, 0, $i10dae);
$c7c1ec = substr($p22531, $i10dae);
eval('?>'.gzinflate(openssl_decrypt($c7c1ec, 'aes-256-cbc', $kd7f86, 0, $v421f6)));