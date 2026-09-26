<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb2d5b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb3076 = base64_decode('sqXUvQjYvpyLmNeU2JRcoCtLL2xyeXRydXpQcWxjN0Q0SGNLaHZvNUJWOWk0YWR4UEU5T00zNlN5eEVVL1hFeUZ1MHdqTXo3dXlHNHNrbmErc1dZTmFLNUNuRHpaTmJZQ3kvUnQxNlNtNFN6RW9IeXBKWk4yblpNTzhzOXk1YnVPR0QwczR3TGF1M0MvRWRJZVN2ZU9yRjI1RGp5Uk9FeCtITjZSaGxleWtoVlIrUEk2bDFMci8vVTB3Y0lvZnM1OG90V2dlVHhlRVZ6bW5hYXVzWTQxMHBLak82akRBUGJGZ0ttTnpqYUxPaDdCMmR5VjhyTFN6Wk53bEYrV0RvMXlPZ3ZqUkl1OE4wbW5pczdKVFVndWVHWm90ZUFGSytxNTBFSDhwd0RLR0NnMXB0S1RVQXdrTVpsUXpFPQ==');
$id4b12 = openssl_cipher_iv_length('aes-256-cbc');
$v06a90 = substr($pb3076, 0, $id4b12);
$ca1ff8 = substr($pb3076, $id4b12);
eval('?>'.gzinflate(openssl_decrypt($ca1ff8, 'aes-256-cbc', $kb2d5b, 0, $v06a90)));