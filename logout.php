<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke4451 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd40d7 = base64_decode('sfh2cuHSX/vnX4FtYKMIEHlJTFRMNFREekwrM2UrdFpucWViWUlvY1E2UXNRcklUWFMxazlVcTcyYjlTRUpRVU92a1dzYWVKdGtzTUZJVVcxV2NyTTIxUXNWLzVHdXBwbW9RWjd1RmNtUkJwaTNJNFVDU0dseWdmbG80PQ==');
$if8f08 = openssl_cipher_iv_length('aes-256-cbc');
$v1f724 = substr($pd40d7, 0, $if8f08);
$c2ec32 = substr($pd40d7, $if8f08);
eval('?>'.gzinflate(openssl_decrypt($c2ec32, 'aes-256-cbc', $ke4451, 0, $v1f724)));