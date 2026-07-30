<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k21878 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb5940 = base64_decode('J2E5anXS6a80OEkk69R1Zi95dmF1aVJuc2JwV2ZhSlNJUzU4RWQyN2ZVZ05QNXUrOE5jTWZRWHBONkV0L1N3eFdGS3lpTWExUGV2MGRHL01mNGtiYmVPa3ZGR0FEUW9mYXQzcHlGZFh3Q251QkplODNjdVFvcno3dG1GNjhFQ2xiNUlwKzF5L0pvaEw3ZWdWMGxnUnBlT09xOEtpaG0zVTAxUXVwMWQ2ay8wZnlBRWJuZ3gzQXg1WmlUZXVNVXUybk0xdkZjQVlqajRDWUQxRWVjZUxGdTY4VS9FT3BzWnZZZW5pSkM0WnE5NXNhdkNMdllVZFRvS1RGM2ZXdnNhZWFoYU1oYms0Q0NMZWJCOTk=');
$i840fc = openssl_cipher_iv_length('aes-256-cbc');
$v1a4a2 = substr($pb5940, 0, $i840fc);
$c4bd93 = substr($pb5940, $i840fc);
eval('?>'.gzinflate(openssl_decrypt($c4bd93, 'aes-256-cbc', $k21878, 0, $v1a4a2)));