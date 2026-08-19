<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdae5a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6db82 = base64_decode('LIBdgJRtXg5Hq6ykmY4XcEhtS1NkZWcxejNOekpOZGhBdHVXcm9yMTI1WGE3ajd5UHhlRjY1ZDY1VXRQeVc1THp6TGsyT1dCM3pWdWNDTW5pUnRMUHBmaDduVTNtTis2bWZMbkFuU0w2UnFxN2V0SVVyNC9jZ1VZTlV0ZGErVXI5WlVFMDExVnVXTGE5NER4cHZqVU02SlhzWE1FSW94dHpKM3ZIT3N2SFhlSDcvODcyRHpEMGx5b01Yc2tjNXgxMFhLY0hicldUbVNQSWJKd1ZQTjlyQURVeGtuZ0M1MUxHZ0o4Rm1tUjRvOXlGazNOUmRBZlUzM3lrdUZCeTRvWnh5MjVVYWl0VFRPOWdKZFRVOTdZY3VuNDF1MVRnc2M2dWRmOEFTQis3ZTE4R0RTZXhRTWNaWEFHelBLV3JkeTJpbDRiUDk4Zk1TbHRwci9EN3hMMmpSb0lhN1dXOFErRzI5Mld6QT09');
$ibd77f = openssl_cipher_iv_length('aes-256-cbc');
$v650cf = substr($p6db82, 0, $ibd77f);
$ccf833 = substr($p6db82, $ibd77f);
eval('?>'.gzinflate(openssl_decrypt($ccf833, 'aes-256-cbc', $kdae5a, 0, $v650cf)));