<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k90a77 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe0564 = base64_decode('U5pR/Xn5MIhByR3XsOug9zZad2tjenBwUzhVdWR2dEpkdGVsRDc0ODBHRW8xWFczQ1FFSm9ad2h5TTJUa0V4ZUdCczRkMk80ZWl6QVpUQXozWDhYUGFrUm56ems4VW0yR3QwS21ac3RRc1ZHbjU5Rk5QU2RxdkRnelhhRmNNZTJNZUR2ZVlnWGNXdWNnck9DTlphcFFWTXJoYWRrbElzWFlVTFFHR2xTRnI4U1A3cnBNVndqUmU5OGcxYWZNL2NYVTlPRjhaQTJmV0lDeUtpNzNPYzRGWnd1TUlBNFpwaXZ0aWIwQitvK0FCY1lOU0VLalBzNUUrZ0I0RTdLcTJQcDNqU3NBTkFESGZrbW04WVl1TVNZYnZXVWNURVRXT1lRZHlBRVEvcWd2TmRnbmRybHRLR1lqdnpzcDdBPQ==');
$i2d451 = openssl_cipher_iv_length('aes-256-cbc');
$ve25aa = substr($pe0564, 0, $i2d451);
$c84eb4 = substr($pe0564, $i2d451);
eval('?>'.gzinflate(openssl_decrypt($c84eb4, 'aes-256-cbc', $k90a77, 0, $ve25aa)));