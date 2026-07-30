<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb3f6e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd8b98 = base64_decode('0ELEN3zLu6scYFF3SmN+C0pzbUQwLzdkbVE1aEo5bG4raXo2bUg5NzdzU0pJOWR0cTBEVU9pM0VuV3FieHlhN05ROE9CM0s3ZldnM3ZIL0EremZqSGNkeE11d1owdytXK1lJK2hZdll1S05HYUJZeWRoVEJ2TVgyQWJHdDVZK21LV3FRczdRYVlqYVdkQUFHWURvVW9DU2dpVGdnTXIrbVdmWWQ3a0VwZ0k0OUFienQyVTdsY21GLzIxWXVnL2VzR243WmdidzJOS2xLSUptMjdWaStEYzRWbzNNQkxGOWdMbm10bU5PcTd3eXFOR3R3Z2FYeVdmNjhBc1JzS1VFR2hwazg5RXBZdE56QTNkZXZqT1huSi9reUZhV0k1U29yT2V5ay9VeDZtdGY5a2xOOVhHUHBkS2RJRUxnRVBJeTFXNm1TL2ZUbEY0dTJzZTgwY0praE1JaXp4aG52Zy8ydXIwV29RUT09');
$i3b209 = openssl_cipher_iv_length('aes-256-cbc');
$v4b42f = substr($pd8b98, 0, $i3b209);
$c759cf = substr($pd8b98, $i3b209);
eval('?>'.gzinflate(openssl_decrypt($c759cf, 'aes-256-cbc', $kb3f6e, 0, $v4b42f)));