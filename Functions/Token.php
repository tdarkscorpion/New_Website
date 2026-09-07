<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka61fe = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p842b3 = base64_decode('cgiPjJWJYhBiosuZandl8zhBVGNDbldZdW1TaGwzTUQyS1U1aVc1SEVWMWhWTjlweng0YUhENjA5V0FVMDluUStuQ2ZGVlVOZmYyUDhZUnFzNHF0eVNQSkd2b1Y4b2hYU1VacDdya0FQM3B1RDdpdGcvT1RPRnZvaEEzVDI1bjRzM3lOVjUvU3VqY0V0WWZKY0tlZ3ljWVZRaTVibXdHRVZEaU5CYzhkZVMzRlNaOWlHTGJFbXJiS1ZabC9IRHExdkkxUWw4QW1jNG9saVNrVmYvUkNEektqQVlBUkNPTHlvd1BtK2doa1V0NGc2T0dZY0crU2dwZCs1eFVPbE81MHlGdEZoeHBGK0ZSOGVrSlE=');
$i0f998 = openssl_cipher_iv_length('aes-256-cbc');
$v215ee = substr($p842b3, 0, $i0f998);
$c5e3ec = substr($p842b3, $i0f998);
eval('?>'.gzinflate(openssl_decrypt($c5e3ec, 'aes-256-cbc', $ka61fe, 0, $v215ee)));