<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdd738 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcf06e = base64_decode('QTfJIM0L0hvO6ZNRy34cdi8ydnVMMm5JMW5mNTdKVWFPVU1BRVZaR2tCdDQ5ejY5alJnRGVEMEc4aGN1SGNsY04rUDZPTmpPWHBtS2tTY1paRWx2MDBUS1FhTnhDMXpESjlOK1FXQklhZTFhMS9LRUc1RzNQOEhsdFZ2bVhaZFhvQ0wwTTk4OGFBN05BbGdXdDE4WGNNdDdIakwyNU9tcFQzUWtWVGwyLy9kSktrMGFWb3BJNFFDQTFFbFFONVRQSGduTzRHR0I2L2hQOVNOS3FhOGhtRGcwemhwL2pSc2tQcHJMVC9qSytyQ0o3aVhvVTdoRnhLZnIxV0RpQy9BdEFzR3RwaFViclNJUDBWcnZzNTVieW9jaGJSdjBIQk5pd2UyNjdIU05pUSs0dTJxa240Yk10VWswYitzPQ==');
$i20ef7 = openssl_cipher_iv_length('aes-256-cbc');
$v5b0fe = substr($pcf06e, 0, $i20ef7);
$ce02b7 = substr($pcf06e, $i20ef7);
eval('?>'.gzinflate(openssl_decrypt($ce02b7, 'aes-256-cbc', $kdd738, 0, $v5b0fe)));