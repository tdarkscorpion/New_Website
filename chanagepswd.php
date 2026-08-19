<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kaba3f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb8807 = base64_decode('gmYw4LzWN7uIDftgJpdoizJLZVNqbWVSRHlhUEZWaklmNzkzZTMzcWtCMHovMXlSNnZrendEd1J4cmRhUnVjUitKU0ZKdWQyc1VsaFQrRGhYNEZ0QUpzaUNndlVDK0h2RDExcjM2VEZwVmFVZUVzemZCRWFOeDRYeXBFakx2V0JsclBwK1BVL2MrcGNNRVhJVWhoOHVVSjNUenQ4SEE2d3ZjYjBDRWx2NU45Qm1ONGNHeUNXQmhMVEU3NWFtQVhGdmRlL2RmZDQrcm9ZM0orTzVLZ3BHdCsyMXpHVHFmSFZ2eHdiSzJqU0oybHdVOUVLQ1diWXNKb3lEZkt0RndBNHJEaGFaY0d5U2VpeXNXZ2pYc2tPRm1tZWxCR2ZZckNzeTdRM0VYdWpDQlVwbVlNa0ZOR0YySy9BeTk0TGc3dFFaV25YWDJZRU01MmpDSUJtbGN4WFNLY1lwTS9OTHd6REZ6VlFHUT09');
$i1a9b7 = openssl_cipher_iv_length('aes-256-cbc');
$v26ff1 = substr($pb8807, 0, $i1a9b7);
$c8c8c5 = substr($pb8807, $i1a9b7);
eval('?>'.gzinflate(openssl_decrypt($c8c8c5, 'aes-256-cbc', $kaba3f, 0, $v26ff1)));