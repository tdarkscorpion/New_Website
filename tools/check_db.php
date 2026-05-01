<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf1fda = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p08630 = base64_decode('YuaMuNMF860z+sVSquQ2tXFCTmpORE4rT1JrU0NuaHZBaCtiZk9YdVhpVXJZR1dvci9xUndjeENiak5jZjl2VmhodWREZlQ1TkU3S3NQb090MmhaSmNxVHdIdXBmZ2ZCdVNFUkV5WW83OHEybHQwQ0xhM0ZseXpWRFVhSHVXbzlBM2Vxa3lQNUh3bytkVzZkck5LSXNOVGdqMlJHS3gxL0wvTGphTTJkMzgvZzIyQ0tMZncxVTQ2STIwemJ2Zi9OMnBoQ0l0UmVwZHZCS3l0QXRabk1pbmZMSzhMaFQyaG92MUl6UkZWampoUUVCWUJoWWF0Q2Rib2draGczRDRrNUdqb01sWGlDRmhaVWErZFk1UWVTcTJIQlN1Q2c2T3lZdnc1Ny9RSUZzekxla3NUWjBYUk9TRGlJT28xLzlXOG9OdzM5cWozb3pvYi9YUFFN');
$ie1dde = openssl_cipher_iv_length('aes-256-cbc');
$v4e860 = substr($p08630, 0, $ie1dde);
$c5f7cc = substr($p08630, $ie1dde);
eval('?>'.gzinflate(openssl_decrypt($c5f7cc, 'aes-256-cbc', $kf1fda, 0, $v4e860)));