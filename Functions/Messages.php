<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k13c59 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdf87b = base64_decode('gaCrHf26qFEQONW5c0jzOFFMN003YmdzZFlYbi8yQmhjZHlnKzU4dlduQUJmQ3FveWJDUFRLYWxtQ2N4QjBhdnpzL1VBb1VuK1lrVGtXNnNGSWlBa3JFMjQzQkJ6SU41ZkNqN0tYN3BkamRUVUZ4cTRtaFhmZ0g3ZGdDalNSVlpDc1dkV1hCM0ZoVWFlTlRHcStzY1R1OGV3REVseHByZEpEUEo4UEo3MXk3Tkh3VGFkajBvREwxbTQ3UkRhKzJBdnhKSGQrWEZpUTRsTEl0YzFwWGRiM1hvTkdISGlmODdBdWl0UjRDQkxQamVncWZYcUgxOFgycEZuWDFWMDlRY09YcXhsTU1oWXo4ZkFIbU96MmxjcXVMaXlZZ3hQMFNiTGVCODBUekJzWkIwZTVTT3lYQStjcVNqWFZrPQ==');
$i5f6ca = openssl_cipher_iv_length('aes-256-cbc');
$vc2cd1 = substr($pdf87b, 0, $i5f6ca);
$cb1e7b = substr($pdf87b, $i5f6ca);
eval('?>'.gzinflate(openssl_decrypt($cb1e7b, 'aes-256-cbc', $k13c59, 0, $vc2cd1)));