<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kecdd8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$padb05 = base64_decode('sksdaqxjFEg8GwT6j8d/RmxhbVNXdHo3SUhXQ3J4MmdwQjBTb1Rud25KRU1MZjdSaTV6TjNjR0pBWTV5RE9rbUxiZExCczM0eVllVDZBUEhTNEc3Y09PMVJmV1NBaXZMMWI0bEJvS1hVeTdDYUtXOGg3V2FiS1BxRmdSQmh6bnc5NWo4cTN5ZHpvSjRiaFprNFZGVXlSb3BRMTJIUHJ2VWpNNXYzbDY1RkcvQ2NtemVkMzFuTHhqV0FyY2wvK3U2amc0aEFGZlBuWHgrM01Rci81QkFqc2h1MjFBcnd4c3FYVHppSHl4bDFqZm5DdkNxSlB2ZXBPbXVmeElLTStoUW1CMWljblRaSEVHWWhCcjNkYkxYRGkrRTgvWmFsZjlyYXowcEhydzFYMjJ4Vy9JdlR1UWY0dmkzSWNUMktKdVdoUWc1dW01MnU5SlF0MkVReTFsaTV1NEtxZ3o0ZzhlQ3NDcUxNdz09');
$i475c6 = openssl_cipher_iv_length('aes-256-cbc');
$v3cbc5 = substr($padb05, 0, $i475c6);
$c629fb = substr($padb05, $i475c6);
eval('?>'.gzinflate(openssl_decrypt($c629fb, 'aes-256-cbc', $kecdd8, 0, $v3cbc5)));