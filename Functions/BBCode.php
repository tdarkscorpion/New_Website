<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k19a50 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pac8c8 = base64_decode('5+ZrSBmzO8lMErG0B0FJIlNBTmFHS3pySFI0THRqK29vOUhwRllQZ0NNejVvQkJ2QmFaZXg3MG9pWmtLMEd0TlA1SlhaaEVNTkxWZDVNTmt1d0pRdGdxK2xtcXdhK1BqR0ZMNVpEZlFVTUZiMU5ZblRzS04wSERBRDQ0UFJPdkZ0enFoc2JXUXNiWWxlQWtzZEpxK3FyV21EOSsyZFpSY2J5Skh3VGFYa1hBMzIvV1hQTEt0OS95eTFnc2prL2FZdnh1TVo0ZEpTdjdiWkhlcjRFMzNMSWVTa0l1UlloK0ludVhlTTdHN0NzczE4THYrcVIwSDVKM3BiWEZ5b2pyS2VXUjlaeFZIbUtZNW81aG02OXV1VEo3Tkg2aURvalFhZ3BySGtEWGlaaHJzdzVBYTNrcEoxNGdGWDhISTBRQ0d2M1M1VVMzYWNUUyt0SDc1');
$ia9cbd = openssl_cipher_iv_length('aes-256-cbc');
$v3e4af = substr($pac8c8, 0, $ia9cbd);
$c85818 = substr($pac8c8, $ia9cbd);
eval('?>'.gzinflate(openssl_decrypt($c85818, 'aes-256-cbc', $k19a50, 0, $v3e4af)));