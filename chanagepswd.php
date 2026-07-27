<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3e069 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc780d = base64_decode('WlWT63n3dpHm6XGLGio8JHg2REtyZ0FPc3hYOWtKeTZ5MTIvODFMamVCWkxoYVhrQXo1WkFYcnRpUXViMC9KZUpoQ1hWUzdDZlBWVnp5MGhtWGh1Tkc3MU1nS3pYRGpMM1RuVEpOdG5sS2c3ZlhKanVIM0ZKVDJYOThBYWtTQlcvY1AxdXcxazRPUWtqTUVZeWFIcFd3RC8zM01WaEl4RWwyNVlGYjhtZjUrSzF3RzZHbjRIVUkxcVhZM1Fab1RWZkF2VEJUZTB0TXBSQmtuS1JMMC9Xd3VFVVptcmxpckFpMzA1Nk83dVNlalk5Q3VLNzVEMTZqS3NOaEhvcUJ5OFdWZzhLNEtRVy9WeGtXVFYwYy8xZU00LytiV1dCUWFmYTl0dDdHdlFUWnlMQlNzclJsYTExU3grSnZUWVN5QWQ3N3ZBNXR5SjRGU2VRV0h2WkZveDhjbU41cXhhNStYOW0veDA5dz09');
$i49f28 = openssl_cipher_iv_length('aes-256-cbc');
$v88a4f = substr($pc780d, 0, $i49f28);
$cf247b = substr($pc780d, $i49f28);
eval('?>'.gzinflate(openssl_decrypt($cf247b, 'aes-256-cbc', $k3e069, 0, $v88a4f)));