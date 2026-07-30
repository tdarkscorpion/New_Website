<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8c77c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc5c38 = base64_decode('plpTADHxTnKi6OpqqVGYVkh0UUJGUkl5TmIzTHhmZjVJekkyRC9FdmlIUndveUJKNDVDbFFqVFJDRTVBVE9RZGR0Z2ZJOTRwbS9JdEhPUGF0ci8zR0lWTk1TNVBYSnU2VEU4amcya0NxMUtyK25nNTVRNXpzRWlITFRGMFVPM0VtaXdMYWNLRkxGbzJhS1J5TEJsQmxDTm5SMThvUy9iNW5qQnJYQUh5NmxPUDBKbFoxNGRZMlpjUkdtRE9Dd2FoTkc5QVJqSkJMUUxoVU8zRGlxZFFRK2pLRnM1R2FxazYvdDNUajZ3MWllaXBzN2pibC9oSDEva0h2YWx3eTZOT2FOSDVoYjhZaGcxTENIcGJSRW5xYUdRVWk2QkNXV1NwYmE4WENNM1pBemtPRXlXbTF6c0tXdjVyU21JPQ==');
$i00521 = openssl_cipher_iv_length('aes-256-cbc');
$vd59b0 = substr($pc5c38, 0, $i00521);
$c202b0 = substr($pc5c38, $i00521);
eval('?>'.gzinflate(openssl_decrypt($c202b0, 'aes-256-cbc', $k8c77c, 0, $vd59b0)));