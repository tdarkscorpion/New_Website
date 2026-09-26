<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0a77c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2aaed = base64_decode('kZuhRffP/ijyPmhiDjD2NW92am1YcE1iVXRmUk1TOFE1eWFwZndJZGM2aCtVRkRxdldpN281eWdXc0lCRzk3RjV3eWt6TWZwTzFjNzduZVNKUlE2RjlaOUY0QXlaUDBHcmx0dGJibzVCT3oyQkNuRHdBcTRZQXZZZGtvQis1NytsbnMwMjU2V0NPbUNzWFFib1BEVHc4Zm1rZG1TY2ZxejlPVkJzeDdnR0hQbVFNaHBtTnIyT2IrSWtXYWdvakJvUEw0Zlo2VldGbG93L1hFTm5idEl0ZjFRZm8rZzRiUzU1L01tSHA0UVVoTHBQQmxqRnFHNmtPMmxBSXlqS2liVmpOU2traHh0TFh0ejg1MVJSY2ZwcEIrb1hSTzQyRFYwWVgvcHpTckJyeDlIcW1oM0FkRGw3RGgzTGwzV1pRMmo0RXZZbnlweWp6azdKK1VV');
$i33aed = openssl_cipher_iv_length('aes-256-cbc');
$vc53be = substr($p2aaed, 0, $i33aed);
$cf340b = substr($p2aaed, $i33aed);
eval('?>'.gzinflate(openssl_decrypt($cf340b, 'aes-256-cbc', $k0a77c, 0, $vc53be)));