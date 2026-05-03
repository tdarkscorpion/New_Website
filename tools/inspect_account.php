<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd8022 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0dc40 = base64_decode('DviQJ/D7kY2KQ2harRTrgGdld3p6OXdVeTFPZ2VwU3piOXdhenFxY1pUMVRpclJ4OFB3anVHRjhndmhhWXhhZjN3SmZQRjVtL3M3WVFTTzdIN1BhS0JDc0FHbGJMMTVTc2NNdHJsc2VGQ2lTTG9TL0w3YUVVeWRUQXplMUtzMEY5T1Fnd0lqMkpaaWkrR3hJaTljYWpRcXlSQnNWcUx0M0QySjZnMEp5SitSZ1Q2VGlLM1JFMGdES0UxL2RqcDNRZncwckFSL2tLUUcyWU4veg==');
$i73874 = openssl_cipher_iv_length('aes-256-cbc');
$vb2483 = substr($p0dc40, 0, $i73874);
$cfb4b5 = substr($p0dc40, $i73874);
eval('?>'.gzinflate(openssl_decrypt($cfb4b5, 'aes-256-cbc', $kd8022, 0, $vb2483)));