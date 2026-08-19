<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k71246 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5a739 = base64_decode('9KUzn3CXM8Zy1GM1kn6SnW1MSGFRd2Fja1JENCs0Vi9aL2FoVTkrV1ZaYld0cTRDWXJnNEcvU3V0UmF4VnNtUDduYXRISGMwNk9qQTlJTTRzWldDcU9CUlNuV1pTbVg2cVB4eHdMRm94K0VJaG1KUmVxTWJMd3JNTDJtVE9zTEY2UDEyR044MzNuaSswRnFWb0VOUW9wRFhNUTdzeWRuWE5takxoS20wNjNGQzcxOENpSC84bXBEZ285L2grRTVydW4zbndsL2diRS9IMW1nbHc0Tm9PUVBQQy9pTDljSnNuZjFDQ1RySGwyVVd5Ui9mNWpLMHFyODJJY2xIbXcxY1ordzFXZ2FEZzRXNGRnTDM0Z21YcytGRzBhRzRlK2tVeUhMVEdlenRkZWtydkFlWTAra0pIcm1xbkw1dzlwSmlKUiswS2owdHRQN2VDMllh');
$i3bdc2 = openssl_cipher_iv_length('aes-256-cbc');
$vb3a9c = substr($p5a739, 0, $i3bdc2);
$c778aa = substr($p5a739, $i3bdc2);
eval('?>'.gzinflate(openssl_decrypt($c778aa, 'aes-256-cbc', $k71246, 0, $vb3a9c)));