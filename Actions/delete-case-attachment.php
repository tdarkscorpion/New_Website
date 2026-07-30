<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcf27b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc0608 = base64_decode('ggfkFZbzil6yr4LKfJ2DhmFUdllDOFZKTjVxdTN3K3hpUzdyRU9kR2x6MTVlSE5XMExIUU80bUJjT0s1UWl5S1grR0NlbmhpTDhLdDNvVU1nbXZnSHNLcjBzL3AwN3VIcEpJWTVkK01NK0hsTmQxNENHZTNTQm5wRUVuL0dmYmJUWjNmVGJoNFlPNUhucjYxdXBIMTh5a2paZEs4K1RSbnZhYkpVUnJidkRYSXpyZjI1MWFKLzM3aGZmeFZBTWJ2cmd2YUlXZEYvNVhWcXZiZEhKL2RlTGMwYUt0eVJwLzV3VE5nbmFRSmVHWFNSZEx0Q3MrcEowQm0ra045Z3E3eTliQVJ1K3NkYWVna1pOVWRNWnJQb2pqOVJ0TXVNc2VLZ1JqOFhLUDZvamdYZGgrUXNmRkU3d0lOVGd2Zk85RjBxZEdTYTZrNmFVMmdhQThC');
$i3fe5e = openssl_cipher_iv_length('aes-256-cbc');
$v74481 = substr($pc0608, 0, $i3fe5e);
$ce5577 = substr($pc0608, $i3fe5e);
eval('?>'.gzinflate(openssl_decrypt($ce5577, 'aes-256-cbc', $kcf27b, 0, $v74481)));