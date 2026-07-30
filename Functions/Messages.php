<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3131f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd5933 = base64_decode('gsKIQs/MuGHjYXvBMi+T/3NrUGNYWFNCU1M1enhxZlYvRmUyUzFlTGRjNFlKUy9zMmgvVFIzYlpydTllMHRad29QZzNyZW9ZWDg4b21LbUc1YW9qRXQ3M2pZODN5N0lEcGhOMThrQmt2V0RLcDZXcEhwTTg1ZHRrc3UrQUtlRUV4ME5RdnJLSnRJN3JHaEQxeDkyT1ZydFRKMW80ekFiTnFPbzFJUjduMUVvK1NocUJxSmhjZXNHRlREU1lFTzRLbVBQQ01yL0pBOStGbFhCNVNEaVJlMERMNGVFYThiZ2ZsZU53czcrNVR2d0tmMXV0VlhuRG5zK3NJT0dndGh0eU5OZUVFSy83ZjlPVGE0MWtjMFI4eS9pd0Q1MW54TTFveElKWEs4bW1KTkZyam82WFhtM1lXZ0FWZkQwPQ==');
$i7371e = openssl_cipher_iv_length('aes-256-cbc');
$vee873 = substr($pd5933, 0, $i7371e);
$c0fb27 = substr($pd5933, $i7371e);
eval('?>'.gzinflate(openssl_decrypt($c0fb27, 'aes-256-cbc', $k3131f, 0, $vee873)));