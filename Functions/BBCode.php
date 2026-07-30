<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6d65b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb0f4d = base64_decode('kTmOanQwo8xOcb/C0wwsGEdQQ0tPamhZcWIxTnFib2psOWlQZ1RUdUV6aHQrS3R3K2VmOUpUMU5OejVQRFJVZ2E1UFIyUUJGeU5nd1VZYU9iQ1BlanZBNDVzSG9LdlFmM2kyY3JTK0NvditKQkxuZTAxQVNDQWZsY0JHVk1CRE1wTVZ0dTErWTY5NDRMZzNVMTllVnJjRDJNamhNWVBTSEE3ajJFVUhZWHBWNTRpZ3paeWNBNTJUY3VyeGkzR2h6WEM4NWxKK0hNK1MxK3M0M0U0L1BydENVQUdqUHJPYkZrNmRMdFRxb3VDZmFsL25RdmFBNkZsbmxvbmxKeXNsbW5qVXdlTHFwQlZiYzQ0QVEzK1BZSHE2STkxT2U2SW1qS2VqR2ZsVm1tbWcya1NPdnJWTkFoS2pKSGxJRk54clRvUlZSTjlURzZRc3dWaDdl');
$ibbb80 = openssl_cipher_iv_length('aes-256-cbc');
$v7443c = substr($pb0f4d, 0, $ibbb80);
$cf7557 = substr($pb0f4d, $ibbb80);
eval('?>'.gzinflate(openssl_decrypt($cf7557, 'aes-256-cbc', $k6d65b, 0, $v7443c)));