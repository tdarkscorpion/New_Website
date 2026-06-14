<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf2aae = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p45161 = base64_decode('/xsw7qHJVCgz6pB2bgSGiWp1M001ZE9CMmI1MkZLbUVNbkV2MUhWTFdqc2s0RDU5cEpaTzBGUDgvZWFTN3lPbzBNV3k1ZkwwMnR2RGRrZTRBUVNCL3Q2ZzBuVGNOcTcvZ2RJOXpsSC9UMVFzaXYxcGhucFM0UVRNdVRkYzliWFV5TGJHYmlhQkF0cG1XRlQ0aXIwaFg0MTA2NkNUOXVsaHFtRHlWaWxscjQwdFlURmhwNlhKbUFDdVB6MDlNNHBPSnJlZnJ1VGRwNUNQVW1JRERjV1JoaWU2aXU2OFU1bkFac1paR1NEamR6V1Evc0dEby90c2E3SUhmSllNb05IZG5wWndjT1JreEp3YUhTbzQ=');
$i5ab67 = openssl_cipher_iv_length('aes-256-cbc');
$v16e06 = substr($p45161, 0, $i5ab67);
$c655eb = substr($p45161, $i5ab67);
eval('?>'.gzinflate(openssl_decrypt($c655eb, 'aes-256-cbc', $kf2aae, 0, $v16e06)));