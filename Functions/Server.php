<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k167c1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8cd25 = base64_decode('YHjna/oTVZCmxX5aqG7MRmlaUDk4cDhnZVQ0bTFFS1FVYm4rVW1pcGFSSVpHT1ZIY29ZUWFyVitxVXNRakpVK2xpcm05MlYxRTBIM1dSbHRrTUpqZkhlWW9kWDRIaWJMSGxZWGQrK2lHaXlTWmlkaWt2Q29yVG9BWGtvR05tVTI5czJLeTdycUl0MHBybG9LQWk0d1pWWXo0Y3pvOC9LZEhzYzdRK1IwbUtWY0lzTG83NGJHcnZTV2lqK2lYNUJNZjY1bGpmeXhoNkkyeVN3SW0rYnlkaVRrR0ltZTBKU0JzZnorakdtYXQ4bngvNWhlT0UzMWpFS0d1Ym1TNi9NM0xFWnlmR0psS2lQdnFyWkY2NEtRTjNJbk41WHpkME5IcG1LMDRka1Y1OUswQitkbGhobS8yU3Y4NlZNPQ==');
$i479aa = openssl_cipher_iv_length('aes-256-cbc');
$vc9920 = substr($p8cd25, 0, $i479aa);
$caeda4 = substr($p8cd25, $i479aa);
eval('?>'.gzinflate(openssl_decrypt($caeda4, 'aes-256-cbc', $k167c1, 0, $vc9920)));