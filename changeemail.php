<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcee30 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p54c83 = base64_decode('OK0xVJvze6NMGzpmyfjoc1pMSU5sWmdENGtRUzFvSUdXV2RMdEp3VmpZSnphL25OYXJoUmd0NkIwRFV5ZzVuT1pOMmVaMzdzNllZNzduVWwyNkpkK1gvNHlPLzFuNVNpajNPQ1FLRGtXOWxPQWlMWCs3UE9QekdvSGRQb2pyYjNwQkViNW1seHk1bEtlYTN0bFdURmxrVUZYNmIvMGZNQU9sWlY1TGR3MGRka0tkMXNCQUJoOFdsTDdBRTFITlY1YUFuMXE5VjhLam9YSVVpN2RIQVhka2s3OFY5YWkyWTVSVkphcllKMTYybk1raGYyTnVuM2M4ZmE4dC9kRTRMbk80b3ZCS0tFU3Q5VTBpMDhkTXlSdTVYQnhDTVJXQ1o1MkNDejFoMDBxbFRyTzVBb0I1ZnJEMWs3RGd4S2VvMitqYTZmdzVwcTA4N09zcTl4dThRQ1lHY0laTUtkUk9kYWE1dkpGdz09');
$i98ea7 = openssl_cipher_iv_length('aes-256-cbc');
$v1fdcd = substr($p54c83, 0, $i98ea7);
$cd9822 = substr($p54c83, $i98ea7);
eval('?>'.gzinflate(openssl_decrypt($cd9822, 'aes-256-cbc', $kcee30, 0, $v1fdcd)));