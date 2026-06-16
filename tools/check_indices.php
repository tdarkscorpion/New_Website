<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2c1b7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5b6e1 = base64_decode('1cXgZpMW/kFXluJr97FarVhDVjNndEt2blB5Y081b21KVzJPbGpqeWJ1aUIxVmxPYmh3ZStTcS8xcGV4RXZlZksycEZBMnVxT3hrYVdtWks1REhRRVZVWVdWTFhTZ2Rpa1JRbm5rdEdacDBxL2lLTUJ5U0pDV2o3NDhobGpsOTluMk5MNllJbUhJVWNlNjdrcjAvdWFKNGNGMGtpTEZRNDRHeVVPWWVxa09MQmg2WVNJM1lVQ2RZMU1TS25KUGttTlhWMFZ1Q3hrTDdJYVRCV2c0TzZUT3RIV3NqRDB2aUMrSGlsOXNtUlB2SE9nTy9XNVd6Q2xGSW44L0gxQmViYU5NNTBYZDhGUHhCQlo2SzQ=');
$ifd79b = openssl_cipher_iv_length('aes-256-cbc');
$va09b2 = substr($p5b6e1, 0, $ifd79b);
$cd3bc4 = substr($p5b6e1, $ifd79b);
eval('?>'.gzinflate(openssl_decrypt($cd3bc4, 'aes-256-cbc', $k2c1b7, 0, $va09b2)));