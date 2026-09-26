<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4cfcb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pccebd = base64_decode('UaLkuaIlKjp2TVq14fIXbjVQTEN3V3F5YWVZSGNkKzkwUUd6QnZrZ3FNYlZUdE1yNit6MWFZQXEwWGx4cy9aL0RzaHRIY21WcVRpcEhxeExVeTdjT0FyZUROdHJJc3pPSGpLcEMvZmQxMHVLSmlGKzFnSFU0WWpqbmw1R0FYc1RFTENWUUdPSmk1TmhvNUlsSUlhSzl3UUdEMWVYUnJrMjNOaWYyc2ZBd3d2ZmFGSktwclNFMkduZzlJaU1SbXUzYzVIZDQ5UlpyUFhuQWtVTXg1Y0lFK2UyWHNxS0wrdyswMjFoQ1hTV3VCYnZaUzBKYkl4WHRwdGRrSWJzYmR2UzU0SFMwaVp4aWtkNzRRSVFmMzVGd1ljMm5LenZlZkNWRDRkYTNVWU56QzBOckZjL0NYR2ZjanBuUkpvK05iUlN3NUtlR0RZaUJyNjFmelVB');
$i9ba9a = openssl_cipher_iv_length('aes-256-cbc');
$vf9872 = substr($pccebd, 0, $i9ba9a);
$cb4f1f = substr($pccebd, $i9ba9a);
eval('?>'.gzinflate(openssl_decrypt($cb4f1f, 'aes-256-cbc', $k4cfcb, 0, $vf9872)));