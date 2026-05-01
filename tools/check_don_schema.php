<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0d764 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pde3e8 = base64_decode('jJDcSvUYIRerhtUPCf951Ec4QktHd0RwQlhHWUJtOVcra240UHFIelNIakt2QXFoa2lvemdHaGQ2NzhRMkFuaFZkZUQxeDB3a0tDSXJXWW5lNnBaakYyVXVPWHYyOE1VWHFpODdTNURUTysvYTU3YURqaFI1anRENXhkZEhOS2wrVjZ6d3ZSYjlLcDVqcWZnME1JdCtyQ2QzOU5PUEdWQkY0ZUJFWUFBSW9pakFRVDYvZlpZVWVCd3lPL01pNUVrV1J0MlpzS3pyZWZPeURUZU9JM29kYUtxYzNxWlc0c29nMThvc3djT25vdGJlWEJHNml6eWdKb2lwSTQ9');
$ie55c1 = openssl_cipher_iv_length('aes-256-cbc');
$v79335 = substr($pde3e8, 0, $ie55c1);
$c7c842 = substr($pde3e8, $ie55c1);
eval('?>'.gzinflate(openssl_decrypt($c7c842, 'aes-256-cbc', $k0d764, 0, $v79335)));