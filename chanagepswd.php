<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kad718 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdac3d = base64_decode('7jfVOPoOw6y11mjHX/1yIXFIUzJ5T0hpaUpmSkl2enJaelNvWWZManlHTkM2Qmo3aTFZWTgzOHA0Skxsb2tqK2N3Nmt4YjhsbDBaNW1nRVZBZElkZ0lmOWYvcGc3Z2ZSOE94MkJRQlBvT2thY2hSS05yc0tEc3BDcDYzOWNwK3Bld1FyN1hUYjB2N01hRHFSRjJCWjF6M2dSRzZ0bVBZL1ZTdzZta0JPN2NnZUVnZXFxR3pjQ0xpTnhWaldDckFybzhVNEQxMW1EbGJkT3k5Qk8yelNJd3N6RlowOHJqM2lUNWNmSGpaQjJBbnRFUnJhaW56TmhFeis5c0J1eDhBbDh2Qk13T0tLUWlLM2xSYWhOWmNSY3NYRGFidWMya1JxVW96Yll3M2owSWUzQlFBVWFERXBZbDUzbXBQWHNNNEpZRDlRbFFOVTlSS3ZoaVJPWlRJL3kxUzJMK255VkF4MHFnbC82UT09');
$i09c79 = openssl_cipher_iv_length('aes-256-cbc');
$v1231a = substr($pdac3d, 0, $i09c79);
$cd63e7 = substr($pdac3d, $i09c79);
eval('?>'.gzinflate(openssl_decrypt($cd63e7, 'aes-256-cbc', $kad718, 0, $v1231a)));