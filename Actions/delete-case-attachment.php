<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0d49f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pab480 = base64_decode('c4mtmFfnOpPo7t+IzHQUCGZSSklSVjZCajlMODFRVzQ0SDk3dEQ1dTJYa3ZJKzZ5VVBKelFtUXFpWVFJM0tyTG9wRWlOeEZLcDd5V3A5S21UdEVwZlRnMThWZ3h2VHVrandiWDhaQWRLZWU2RUdmWEpUVmtYNXFTb3VHZ0Zua1FnaUFBdTNOajRTU3pwdVhpaVBpcE9qRE02NGc3RU9wWEVLNjdxa1FMTmtDbVVvUG14d2ZTck9CU3JLR2prRXN4bllFU2V2ZXh3dGFGNkFKSzdrZDJXZGVCMmo2ZWhLRU1wZFZIVVA0U015SnNRbThTaXlodndvTXF1cVN1Y0NPUGRiTkY0S0pmTll1ZS91Uzg5aDAzbUVJQmdYT3JwS3hiTm9aUmtOeERzODMvSGtZMG9uRXdXdndINU96Wlg0NXpKZDhtbUpkT0VYVjJkOS9T');
$i3c174 = openssl_cipher_iv_length('aes-256-cbc');
$v3ff35 = substr($pab480, 0, $i3c174);
$c8402b = substr($pab480, $i3c174);
eval('?>'.gzinflate(openssl_decrypt($c8402b, 'aes-256-cbc', $k0d49f, 0, $v3ff35)));