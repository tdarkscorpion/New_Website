<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k427aa = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfed61 = base64_decode('53TK8TfjkCO//ZnqvD8cjS9TcFRXcSs1THB2a1pZMTg4bGhZeWtNeWwySmlqUWt0L3ZSV2RYdFhMaUxqSytWZWluNlRHSmlkQUxhejVEL2ZzdXM0RFNEZTMzbzlweDJibzAwOXdiZGZlL2paVnM4bWloVnJRRzRZbWJQa0ZHdmNoTzB0SEhaS2FZb3F6NFNYa2J6U2xQL01qMjJTY1owbGlhZXV2blIxQmdibkQzb0VXQTMrZ0ptd3JmcTYrTTJ2VDRLQVhCa2o4aSt4b0lqK1FNbjd4eVY0c2NnM0hPQ28yYU5mTEN4K1dOd0lXQzhBLzFEZVhTSGh4dXhBTURiMTEwbHZBcGNEVUN0YUIzUE5kWnBKb0l5SjNGaVRoN0ZMYmRNb3k1OXErUGNDS0lTMmVIVFA2RVF6SHg2S2Z2Rm16T2pJcFBPWm1vUjBNOFVC');
$i92bf8 = openssl_cipher_iv_length('aes-256-cbc');
$v67fe6 = substr($pfed61, 0, $i92bf8);
$c5e2aa = substr($pfed61, $i92bf8);
eval('?>'.gzinflate(openssl_decrypt($c5e2aa, 'aes-256-cbc', $k427aa, 0, $v67fe6)));