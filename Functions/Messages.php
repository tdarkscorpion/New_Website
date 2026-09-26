<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k692fc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb3053 = base64_decode('daogPP/9qGaXxGNXjQFHkmwvdmpBakJVcjFjS0dVc3FMVG54aGFXcW1zRU5TakhGTFJRVGdwWm9jcnIrOXRNK2xLcjdxZlhkWnljSFhFNmNzTUxPbVZlOUdlUUdyN0JsYnV2YWFQS1lBZkdyREVqODd3NWx4REpBTDRLVWcwN0sxUDUvOHA1dFBDall4QkFtMDZyaDIwQ1lzQmZQenI1eXZnekJMNU84N0U0SGk5SFVWaFRNYWJnbnZLQVp5QVBlZHN0VTFtSTVlUmNWTmJYYmlTazdpUHA2SW9aSjV0Y2p1MHlYMGtMYlBFdzdLVGVwSFUxN3BUYUpRdkRSNml6anBLWlFJd2JZb2owR1hHM3U1cTY3ZCtzMjNQN1YrZkNTKzByNWgxYllaeVZJQXRrNzlsYVBQbzNtK0M4PQ==');
$i0b647 = openssl_cipher_iv_length('aes-256-cbc');
$vc380c = substr($pb3053, 0, $i0b647);
$c88c16 = substr($pb3053, $i0b647);
eval('?>'.gzinflate(openssl_decrypt($c88c16, 'aes-256-cbc', $k692fc, 0, $vc380c)));