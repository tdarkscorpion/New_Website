<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4b849 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc8890 = base64_decode('x001/Wm2JQcF7Alxzn6DqXB4QzdPS0VwMFNneXhvWU9JcXpiV1AzeGxKZ3U4STN2a09zbzU1ZWZCRWxsNkR2RHdiM0x3WGcrQ0lBbXBXd1YwUGtHaXFpTXlhOUhZdjJhZDV3VXNYcldha1RDYkg5TFBGQVZzWDFLUmtjNFJDaFBQMm8vZ2dQU1lwMDF5dzJOa0UvS3ZTa0xFTzFoaHRZYzNJa2NzYVUwSkhqaC9DMEE3b3hZZWI1d0tYcU0rVEl4dHpHUTIyeG94UlMvVmpZYnhjUjdQalVkVkxrQWhkQllwcXc0bGp6cy9mbVlOL2FVYmlvQ25EbXh4ZEo2OTdpM1l2dFBZZTUzcE9qLzJ1SEcwTHBkS2N3VEgvOEhlQkIyTnhhUXByb2h0cGNsUDVCQTNYZzM3cG43cnNIcDhUWjZ6bXlkN0FDZ1RDdkpubDFSOFdPeU51dDMyV3NjdVdBZjc1OWQxdz09');
$i2d0bb = openssl_cipher_iv_length('aes-256-cbc');
$v76866 = substr($pc8890, 0, $i2d0bb);
$c55dc2 = substr($pc8890, $i2d0bb);
eval('?>'.gzinflate(openssl_decrypt($c55dc2, 'aes-256-cbc', $k4b849, 0, $v76866)));