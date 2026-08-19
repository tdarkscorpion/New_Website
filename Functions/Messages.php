<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k880fb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfa1aa = base64_decode('/252pvChUrweKLbSRLgeZmNaVC9VOHd1L3JLMmhNV090QmhoSFZDSlVUYUtvRTc5MTNQKzM5OUFQMkd3QjB3Nzg2NXh2V1RYVERoOS9PY0dNUDQxMHh3TStpTFEyRXM5bE1hQXpjT2t1NkpOMXpDWjc1VVlUQmp3TjF0clVxTnZFMStZT05JUGJZZ2xpM3R0dDZDZ0Nwek1BL05DeUkzOHBwRjdTZVE2WFJYeWlLaHBNS2RHb2sxTlZkQVFyWmRCam5PRS84aUdibjZrb0FiY0hzVjdhSTJsR1Y4bzJLN2FQT085UzZFNThnK3RTY2MyeDB2NkIzL1NUckdiTVlBVmdLZDVKTXA4MGRQZXV1enlTcWtsbFh6SkY0NUFSMVNtMjI4WmVqVy9IRytMSDR1RGptUzdQWUFISitJPQ==');
$i006d3 = openssl_cipher_iv_length('aes-256-cbc');
$v95ea9 = substr($pfa1aa, 0, $i006d3);
$c4748d = substr($pfa1aa, $i006d3);
eval('?>'.gzinflate(openssl_decrypt($c4748d, 'aes-256-cbc', $k880fb, 0, $v95ea9)));