<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k82132 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa0393 = base64_decode('GzpGfQBbZyo5w6vzrCJOIDJpNTlYUEdYeU85Vkg3My95NXRGM2Nna0lmN1MxNkxnTDJKazl1by94S2twZU1MRWVUNkVJRm8wTjdObEZIZ2tWeW5OTk5PZGtPZ3FhODk2Y2t3NzRZbStsZnFPS0grcmt6akIyYXdHMnhHQmdadlEwZUNPbjFtQ1NNZzBrL1dIQVRiUlRna1dsdHZ3bnp1U3BJQzNYaUlrdFRDUTh5dG5hMDdjRTZHY0NvclNTSmFsRVhHd0J6aUwvRlpJNEoyWnMwN1FHcFJ4TjF1UXExaXBXMUZLaEE9PQ==');
$i403d0 = openssl_cipher_iv_length('aes-256-cbc');
$vd6bdf = substr($pa0393, 0, $i403d0);
$cf57fa = substr($pa0393, $i403d0);
eval('?>'.gzinflate(openssl_decrypt($cf57fa, 'aes-256-cbc', $k82132, 0, $vd6bdf)));