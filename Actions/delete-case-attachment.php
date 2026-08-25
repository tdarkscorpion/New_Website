<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keab39 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pecf50 = base64_decode('EtOvy9LBdnGkfMnPuuw9zVdUdWIyWnBQamVwZjAwYlFNQ1hHOWs3aW5IN1RIUndMeHFZcUFFMVNOcHk0SG5NNTRCeXROUGRQUXpoOStiR25OazU4a1RTa1R1czA0ZkFJOE9naHkzczlkNmJkeXZsZDhtUjRDTlFNMW4yUmRWMzh1R0VsTVozZWI1WFVTT0dWVm1tZWQ3ekdhVTMrNVpwVUFZUUxLVmRtN0poc2U5UHZnYSs3WFhlaEVQMEJyUDlNSFNNRGhkNy9yK2FLend6WkxQU1RZaHlabkYzM2t1a0lDVFVCVVBJVTQ1aytKam0vU3pTZG5zQmwvMDVNK29ia0w0YzJkUk9vcVNhazlpREo0VzB3QlM5TlM5SHFISEozSnhjMzlxbDV5VlVvR2s3TEhoTnBIWGU3TmZEUWsyZ2RjR0h1YWhVQnhaM0tXb2Jr');
$i56c86 = openssl_cipher_iv_length('aes-256-cbc');
$vec653 = substr($pecf50, 0, $i56c86);
$c50d3f = substr($pecf50, $i56c86);
eval('?>'.gzinflate(openssl_decrypt($c50d3f, 'aes-256-cbc', $keab39, 0, $vec653)));