<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3cbc0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p07032 = base64_decode('PHQ//bZO3FfaBCKXQpIjCVQ0cENhbVBzckFFL1AyTHhncmhRd3ZFcEFnZFhCNGtydWQyeGl1TUM3ZGNXWE1LSGxmODlmWnlTckkzcDJ2Y3lpWG5uQStJNy9vTW5MRVk2aEEzQzNpR3U0TFhGRDhkYXdUUkpJKzZrOTFpTjVxSXNnRTZKWlkyNVVOMUxJOFFKakdnd0FCY1N2c1ppeG14MlRtak03L0psQStzMU5XUjdPOUgremhmaHFqWW1UcGJvcUJNUkUxcjZVUkFUdlNTcnJOOTBaaklQMEEzdSs2NjlncFhNc1dIL2JMOUJKaGNHUVgyOGVLdW9MSGx4MktFcGl3TkpRbWk3VVhyVHNJQWN0MW5zVFg0d200aUI2Y0orMEM4bk9BPT0=');
$i255e6 = openssl_cipher_iv_length('aes-256-cbc');
$v7d653 = substr($p07032, 0, $i255e6);
$cbd061 = substr($p07032, $i255e6);
eval('?>'.gzinflate(openssl_decrypt($cbd061, 'aes-256-cbc', $k3cbc0, 0, $v7d653)));