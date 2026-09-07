<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd484d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa3db6 = base64_decode('wjHX6yXoEmafJK50woMSrXE5ejVyRGhEWTNDU2phMzVweEtQakxXdXlGTW83R2oyZy9jU1dXQ3RlOGdZMVl4NWhIQ2tqZXo5ZVlYRmNKZW1DdmZiQTBYWU5Hb1ZENTU3SUJaUjhQSnorYWpiMThjL1IvMUVhQmtzRWNMQ1Z4eWd6K1JiQ2Zya2p2NEVucGFxQVFnblk4NmpQMXl0eUlGSk43VC9GTGllQ2VzWEg5L0FOZzIzalVtYnJRUy85Sks5alZqZHFUVFhkeXV1amZBUTRNM2VUSzZsVXBtRzlZc096ZjcxdGt4TStCR0xPM251M3Z6cHZ5UkZPTW5TV1crTGM2aTdzeWx4VjlsMXFJUXE=');
$iade1f = openssl_cipher_iv_length('aes-256-cbc');
$v070de = substr($pa3db6, 0, $iade1f);
$c95680 = substr($pa3db6, $iade1f);
eval('?>'.gzinflate(openssl_decrypt($c95680, 'aes-256-cbc', $kd484d, 0, $v070de)));