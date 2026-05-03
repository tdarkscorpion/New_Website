<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6eb49 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe64e4 = base64_decode('4gnRmWHFGJwOgpxGwe6vVTVBSlBKYUM5OU45cmU4VWp5Vy8xYUZCMU51blJHbHgzUjk1MGZCREt6YVVJTnpkV3lzUkg2emlmcjJnY1hBZFF5Y3JhRVhwVkwrYmpOdVhWVXZ2Tm1zcTlkYVB6QlZzM3Y3RlR5cWx3MUdxUElXb0Z1b01nVWpqdlMwVWlMNDZ1NzFWcFUrNmo1dXlBaVgybGpnYmx0VklNZ1VwcHcrSkxUeTRValNmL2xoYlZBekVSZWNZMHYrTGp4WHF2dkpZbVJuRTMxOHoycWp1aWZpeVl3bm9mUkVrNUpzSlZUcFEvS1hPYWtqSVA1RzZlVUQ2Q2Qya1BZMlJlSWZUSUcrRUlmUWxCcW1QN0wyWm13aVhqMHVnb2VlUXZUNHhVbyt5NHJiUnBneDJ3aStvRUVIaWRpNFI2cmtnVnViN1pMcjRv');
$i528f9 = openssl_cipher_iv_length('aes-256-cbc');
$vec7e1 = substr($pe64e4, 0, $i528f9);
$cc638a = substr($pe64e4, $i528f9);
eval('?>'.gzinflate(openssl_decrypt($cc638a, 'aes-256-cbc', $k6eb49, 0, $vec7e1)));