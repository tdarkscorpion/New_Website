<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4c17b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p09f51 = base64_decode('ugvPfAO3VcVjJvjXRRdYuENENjFuVmNBSk8veGFyRUNYWWVHQ0xtWWVDOEVLeE0ybk9QYlVCS1cvK2VDZWlEejFXaVNkaUNqS3ZkcDRQY0FCUld1eVpVSFh0c3ZzTzFadmtBQW5BcThSOHJwVlVKMStDbGk0N1B6YWNWL3grZVJLQmc4WWJ5cU8wdU9MVXk4dmp2OXNHTzBLaWxCeUpaOWgzdlV1S095UDdJcndSa3FCUlVYcloxeGVKeEgvK3EyZFpJVzlubDRvd29ZN3Y5NzRjcXJVVE5jczJIWUtuaGR4UkhGL1E9PQ==');
$i05fef = openssl_cipher_iv_length('aes-256-cbc');
$v9c97d = substr($p09f51, 0, $i05fef);
$c04a04 = substr($p09f51, $i05fef);
eval('?>'.gzinflate(openssl_decrypt($c04a04, 'aes-256-cbc', $k4c17b, 0, $v9c97d)));