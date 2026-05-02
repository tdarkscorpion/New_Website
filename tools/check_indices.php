<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8c197 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc9ec8 = base64_decode('u8SbdRh1a7jxp9JtscKCK3I1blJSTFFWRUM0Tm9vWDdybDVaQTZ2VFRCbkQxTDkrUVhtQ1QzK1VFbUp3VCtBWUhycEE5RUg2enNiRlBtd2c3T3pEWnVhREU3TDNnblh2Y2pDN2h1TmVpYmw2MVZ5aDBjRDlYUjJ2NnpyYk04ZitoQ3pBS1VFK1lOM0dGRTVPOEwxdTBna0w2NTZYSHVvMC9tQ2FIUTQzTi92SUVvNDVwcVFBdk0rV3V1WllRSUtpWUlTL3hYNDJLSjB2cWZHVDVJZzR4bVQwNGF5TzFCMWhjdG9sTW1zMEwzSVFFeWl0OER0SEhYZElWbUF5TGczK1gvbkQ0THUwTlQyS2VGZlI=');
$i48d99 = openssl_cipher_iv_length('aes-256-cbc');
$vda2a2 = substr($pc9ec8, 0, $i48d99);
$cf8965 = substr($pc9ec8, $i48d99);
eval('?>'.gzinflate(openssl_decrypt($cf8965, 'aes-256-cbc', $k8c197, 0, $vda2a2)));