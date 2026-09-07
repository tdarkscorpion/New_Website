<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb240b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf2851 = base64_decode('1GqlcrWVTvIcH+E9QC8ni001RXZNNnpLdUhSVzdwdnhmcmFodkJWTC94R3lEcWFwTHA3T0t6aW5MMk5mRGoxNUhjRVpjVTBOdE9lN2s2TlBkeTNKaThCb3YvUmlicXF4dDNqditqS2UxL2I5Y0srZHBIQkhJSFZUVzFZRXpHRGF3azhSNTRJSXJuM2R3T0pWQUNtUmdLQUdBaHlBNTJuSnBXT2dSSjl1enVTdzFsUjJCclQ4MzI4SUJmcE5XZUNBanBDVkIwTlJ0dm16ck5OVVF6MG5HaWVYK1ZFcENQRC9ZS0x4MkFiSkNhSzl5VkFzbEdaTWpsYzlQVnk4dW1kOFRENE9JUDlGdm5lUmNJc2I0NzM3VzdSOEd2bW9WamxCT0NKaG9WeEFJbENQSTl3dzViRlcwQzhhVVFBPQ==');
$i9d68e = openssl_cipher_iv_length('aes-256-cbc');
$v6cd7b = substr($pf2851, 0, $i9d68e);
$cd8d49 = substr($pf2851, $i9d68e);
eval('?>'.gzinflate(openssl_decrypt($cd8d49, 'aes-256-cbc', $kb240b, 0, $v6cd7b)));