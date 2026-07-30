<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka7df3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pecf3b = base64_decode('JihMY5v1eJsDlXv1Cs8gyUMxQ0RtaklEczlaZklLaTQzNDZqL0Q3U0dIczZuQzJYZDNHQVU0YkErb3VWeFVoMDZZcStFREJkc2JidmppQUtvelhlT1l4ZjFjQlg3Z1hNT2lINlZHREI5eXZwSmxyK2ZkRWpJaUViWXRwemVWRGg3anpUSDR2bEkzQld6Zy8ycHcycHJ3RHZZcGxISzR0eWF1UXZCbHpnVHRKcmFURzRabzI1ZzFrbkhEbjJzS0NRaUIwRDVuYUVLNG8xMVI5bHBpd2NmRFg4a1VlL29Fc0Jxbm1CcTRCMk43dXdkcXhVTmlqTWlHcEx2T2U3ZEEyOG5oNkVSTTkwM1pGdE81RW9jek1acCtHWVlySUltS3Q5cUtlZ3l1NXVkUUgwbGxFRmU2cUVzQjBxdUxNPQ==');
$i381eb = openssl_cipher_iv_length('aes-256-cbc');
$va54d8 = substr($pecf3b, 0, $i381eb);
$c16838 = substr($pecf3b, $i381eb);
eval('?>'.gzinflate(openssl_decrypt($c16838, 'aes-256-cbc', $ka7df3, 0, $va54d8)));