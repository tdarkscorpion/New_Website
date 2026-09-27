<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k96802 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0d2f9 = base64_decode('nz6Q9w5KVrxoZmCiLOQTxm1xUnF5bW1uay8zdWYwWGhOV3gvZkQrUHpjd2hBQUlBcTZLbkd3U2Q5QS9qS2Z0empKRzV4MmJ4ejZKVlcwblVYUUM0ckNXUll0SFBraFpkZ1Fjd3NQcHVlSXJQeXU5YmlHcEpYdlMwY1ppeEF0OVVpZVZNSEwxazBBdkcxVUhQcDhUOXR0REJBVExQT09iZkpKUU9IMmhlTDVCcWR6aGZ5eE9SSTlIekFPVkNMR3ExNFFoYitmeVdGejRDM0FSLzUzSU5MOVkvSHNQZUFhVEFiYmRFZ3FwNko5dzl6Mi9iOFVvYS9PV3ZtOHJicXpXSUZzTUpWbjRqWHFvaUNiU2piTFNSQ1NWWURZRlplMVY1R3NLL3BaVWVYT0RlUk9TT01VWllxMC9SR21jZWVvTmJtK2dkZXlWZjFZd1E2RklO');
$i98587 = openssl_cipher_iv_length('aes-256-cbc');
$vae66f = substr($p0d2f9, 0, $i98587);
$c81e49 = substr($p0d2f9, $i98587);
eval('?>'.gzinflate(openssl_decrypt($c81e49, 'aes-256-cbc', $k96802, 0, $vae66f)));