<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k07225 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9e545 = base64_decode('s2/shPk/hnWSLvFmXBOZqE1KeDhOY05qNVdWcVNSa0x4YjExMktONnd6S3BIbitQSkZLRy9GeEZHNHQ2VmJqckErclRMa1lxb3lBTExwOHZPc0RzbHRrbjRGL21wNHRtTU8xMUhFaFRaRGpkMmVlNmZZNk4vdFF6TGtFK1l3LzlDQkZ5VnNYV2Zoc1J0cU4vTlRUUzhzQmdSZkVqd29GRkNRamdDZGJaQk5mdkEyRDd5WGV0aHkyZE5ucHVCbGFoc0d2Z1AwdU5PT2RzOWFDL1RLYnVUeUpPblRjOGpvK0t4RW5ZRDFwM3VIRjY5eFIrZU1JMGhVNHdFdk5TN3BsSm01emtwbi9mZ0N3UisybGdEOVAwTEc4WU5vQkk4a2N6T0ZYV0ZoWm1PbU5wcktpTmxaWWg5V20yYVlLcURXZ1RhSXlkaHhINEZzMUJlS0U4');
$i96d8f = openssl_cipher_iv_length('aes-256-cbc');
$vf01d9 = substr($p9e545, 0, $i96d8f);
$c2f2d2 = substr($p9e545, $i96d8f);
eval('?>'.gzinflate(openssl_decrypt($c2f2d2, 'aes-256-cbc', $k07225, 0, $vf01d9)));