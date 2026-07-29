<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4766d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfa35c = base64_decode('vBdUlKTuvsDn6k8Zs/8rwTE5bFZxUnU4S3E1aWk5Z0RodWh0RlY3SGVzenJhZGVpWTVCSnFsaVRMR3ErM1hMYlpvaFQ5MXFKRkdmNUFUMEt6TktHSU5vOEltSHUxS0FiTFlwOHRyRE1jNFNIZ05xR0VqL2x3cC9lR04zeENoRXY5TGNQMUlsKzBmYmNIOFdremlDUTRyL083d0FDOWwwSW5GdVU4MzE4Nkg5c1RpQmRTTkVwSG1yTW9tVUpuenZ6czFrZ0t4QW44TlVXTVhHS20xQzZIZlNDSElCVjVhcmtFRWw5OVUwUExtVitLdGRaRmdwMmhPeVdvYU9iTmM3OWZhRUJzdkFVaTBrOXdpWGJ2RFo4NnpJMkVmNDRocmRQRmMwVVNDQnpPc0xZVDE4eGkrK3VYN2Z3M2FTZG1VWWVTQlV6OG9BeW9YWk5ETHdNakFQeDdEWEMwb2NqSy9kaUU4emlNQT09');
$i3ee5d = openssl_cipher_iv_length('aes-256-cbc');
$v630e6 = substr($pfa35c, 0, $i3ee5d);
$c86121 = substr($pfa35c, $i3ee5d);
eval('?>'.gzinflate(openssl_decrypt($c86121, 'aes-256-cbc', $k4766d, 0, $v630e6)));