<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd64dd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb2c45 = base64_decode('LTFVa26sVZwye4j1SxQxLlhsVXdQdUkyL1BYN081YTlYcVJsRmFvMDRYa3FhWjhWaFJQMGxSWXJDRlQxOEpLcjFmb3I0NC9PWktrVWhiWG0yMjhReEpkeXBieTMwdUJqM2tnK1ZaeTgrc1grNVZkN0pxQlg4R0oxaXJlbHZHRVVpSzlYcmo2djA3VWxNQkFGLzJxRWVOcUgyc3poc2h0WVRsa2dXZXV2eXFVT3hxM0N6UjYwZUNubWNoSmVUcDVrcEptd1BmTGZjYjdPdngwK0loVlQzcnA2RXFQZkJtQ0FGTzBmbGRraTVnTkRpSlFXUm1HV1pwbTJBS2g0dTRudmx1MGxnbHVzL01kZTNiNGVzOTRZZFRJSkZFVGl1MkRmZnN0V1NLNVpqQVptR01Na0ZrMlBYRUYvL3RCejJCTDl2SXpQRFFtWXdwWnpkamFE');
$i55917 = openssl_cipher_iv_length('aes-256-cbc');
$vad69b = substr($pb2c45, 0, $i55917);
$cd06df = substr($pb2c45, $i55917);
eval('?>'.gzinflate(openssl_decrypt($cd06df, 'aes-256-cbc', $kd64dd, 0, $vad69b)));