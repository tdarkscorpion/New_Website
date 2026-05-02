<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5737b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8d194 = base64_decode('1RgBjd/zUDqrx3x/rGEovUV5Yk1yM2lRLy9wNE5PakowTnlUTnVOdVNuTjFGc0hlMnphakJUSGVvOHQvZlA0aXVCdjB6MjFDekgxQ2hKYVRsNnZlV0dEQ2ZyTGdKVzRtL1A2ek9lN3AybzFGaU1kZnRYSDlkNXRGdGhNa09PSkhvaitFWnJ5ZDJPbXZQampqUjVWZFpyaFRNdHpteDZGUXFqVGV5S0tpTnU3Ym94c1VWeDdBUlVaenNkSHBBcWE1WitMZ1pYT0J3TzBYT0R5TDVDYmxXbnVKYmdmL2R4SlMxajFUSm1rVHFQVWk0bHN4bjdqbnpUR202M1FpcVg2ZXVyOWZCWllrM2EwWWJKRVVIRk5SUVR3U05lS0NuSzVsWFYvK3NVZU1nc0p1RjA5c3JPWUNvZHFqSGhWNHY3V0FzTkwrSi95Y25jYmxQQzRw');
$i565ec = openssl_cipher_iv_length('aes-256-cbc');
$va43fd = substr($p8d194, 0, $i565ec);
$cb3fd0 = substr($p8d194, $i565ec);
eval('?>'.gzinflate(openssl_decrypt($cb3fd0, 'aes-256-cbc', $k5737b, 0, $va43fd)));