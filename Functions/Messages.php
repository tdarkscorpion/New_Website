<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke882c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p46eaa = base64_decode('+yUu81ZtV9G2TJ5yJ3lwq3V1b2NqSHA2bWcwYW5McFJody9ZRWRrYW50d2J3NCtpQjNSM3QwSEY5RGJ6WG9YdlZNeHB3dmw2ZW0yc2l1NGlrWUhRcmUxUXNzUkNpSThGRlkvRkZ1UTZLdXAzeCtLYkhJM0lZT1hvL0xuQjRXczVlZUdwSzdBSzZnbUNEbnhROThkeVMrZ2YrbmFnalZ1L1dqcjZKMDA0ellROWx0a3NmYy9mYzlhMVVxV3lxSkU1YlhhZXRvT2ZmYnAvdUs2Z0puWmRYd2FreklrRE9ocWVPUUhOZjRtYmNha0FPN0g1ZXhKVllEYUNBeDNUMHZ2ZkxFU0JZYVhNVStHVDFJWmRWSFFvcVlveE5CVEZHRHc1ZFd5b1NyZUx4amRlazNqc2w3UDFXVEJ5eTlNPQ==');
$ia3877 = openssl_cipher_iv_length('aes-256-cbc');
$v6f890 = substr($p46eaa, 0, $ia3877);
$cc74ff = substr($p46eaa, $ia3877);
eval('?>'.gzinflate(openssl_decrypt($cc74ff, 'aes-256-cbc', $ke882c, 0, $v6f890)));