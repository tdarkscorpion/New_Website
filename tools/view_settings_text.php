<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc1a50 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe7645 = base64_decode('mWRLjoqYUadFFRNF6Y9onTlGaXh0QmdlNXJxbTl5UWk1azZZenBPWTdkMmt3SnczUytVSG9VbEMzRkZxUFllV21ieUlGTm1tSndFRGl4TkdJTVlsSm8zc2R5SVgxNFlDMHJCYTdOR0dKdytOZHBFQ0ZtdS9aa3VFRG5yS0pZSjA1b0NBd2pYVklSV1BpZXI1Z2VhNm5RYllZWGpMZFFGc2N2dkxZTGx3NW5DZHNpV1paTm0xN0g3SzhBTkQxOUZDTFlmNjIraUNsMUFpOGExRzhVMWcyd2s2bFdCOGlGT0t1THdIWUNBMmNoaEhqWTY1VG5zOE53N0NoNHRwaThHcGpFd0tHejlpRjBwcENzRERmam55NXFFTGhxQmFwL2gwSUtuQXFqODhJT2ppeUlRTHUxYTZQU0hSZ3orOVplSlQ5aUFTbnpsQ2dTL2RnYWxSQ3VQRk1xVGQwQkt5amZjdHlmT0taUT09');
$ib6f97 = openssl_cipher_iv_length('aes-256-cbc');
$v9cfa8 = substr($pe7645, 0, $ib6f97);
$cbfdf1 = substr($pe7645, $ib6f97);
eval('?>'.gzinflate(openssl_decrypt($cbfdf1, 'aes-256-cbc', $kc1a50, 0, $v9cfa8)));