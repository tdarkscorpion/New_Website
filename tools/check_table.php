<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9d797 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9e547 = base64_decode('jOxL0bF/+4H/xukwu8PpVVBOcDdiWnVBUjV4V2dDZDFYZkFCaTNsYUZlcVpEbnM1L2J3NWwrRGd1djc1alFlTjZ2ZmVLT1I0dDcvc1ZNM0lVZ0Vsbnc2T0IzWXcvYnpPSDE0YzBiUWFXMlZXS2JkVUlyeUM0aGRNcmxWR2pDcVpDVlFGRE1HSmZqKy9PV2pqWStDS0drbGt5bEFkVm9yNldHb2N1SVFZa0dvVklxN0hEOVEvekFaMFRhS2hPTytJN2g0RGJoU1hhcGo1djZzM3AzWHhiMGluM1dTSEphTC9IRVplSUNnMnFoVG9SRHdhbjl6RVVZaTF6emllck16bjJLYkdSVGRsQ1BGbGd3dkFRRlpYRGgyWmhTN2J5dHc1SWY0eDB3Q3JmUWpFeFl5RUM3Z3FkeTBLYlowZnlpK3BtZWg0MVVnZnBMVnNBclZn');
$i98538 = openssl_cipher_iv_length('aes-256-cbc');
$v19ab6 = substr($p9e547, 0, $i98538);
$c6cf59 = substr($p9e547, $i98538);
eval('?>'.gzinflate(openssl_decrypt($c6cf59, 'aes-256-cbc', $k9d797, 0, $v19ab6)));