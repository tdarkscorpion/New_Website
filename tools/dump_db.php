<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k845e0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3df67 = base64_decode('Ow9iR1oL32uUS+8E8ujG/2Rna05NcVpCWFc4MUdjZXpCVVlEQ1M1ZFJ3dnZGWkdKL2xqR1hFNTByT0xzeWI3bmIxRHR3NVZiSzZOQVp1QzNrQTV4TTMxa0MrbDFuV0d3SEdQRC9mNlB2clZTUnhzTlpBWHJCQythcXZmNy8yaGVvaWRiN0tMdms3OFVScFVSSlZ0ZGFuMk12K1VBZXJkQkcwZFk0TnliakplWFd2SzlpZEVRQkRqbC9Tc0dPamdMRFJNb2Fvd2Z0L0VpKzJlUXkrMGdnYU9HdytvOFRncjlFK2tiemc9PQ==');
$if936a = openssl_cipher_iv_length('aes-256-cbc');
$v029f2 = substr($p3df67, 0, $if936a);
$ce520b = substr($p3df67, $if936a);
eval('?>'.gzinflate(openssl_decrypt($ce520b, 'aes-256-cbc', $k845e0, 0, $v029f2)));