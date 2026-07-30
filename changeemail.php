<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfc435 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3a051 = base64_decode('RIdj2NWJUtdvds2pecbsj3gvTzdpWHFSekg2cGUyTXVHMUxFbCtkZVFrWGZkRjdwWHg4SFFJc29CUEk1dUVRV3FoejBnMmJUT01iYVRVNHVlSm1uSE4wN0MvNk9qVzNNV2k0MVY2RHhaeSt5LzR2aThuUDh0SlpvdmpuVkFxa3c0eU9OVk5ITXRPYnI3bUFleGc4U0plMDdyc2ZabHdPanE2VXNNemtMVWErQXJyTzJoL1hFTVVGOVpEREV1azQ0d295VHZNWmJoV3Q3b2RpUXpvOHE3Z0R4Tjlra29wSkVzc1BWQXd4aDBSUVkzKytSb2JnZGtjRFBnOFhiVEQzc1oxcXh0blpaaUJTVmhjeHJrYWdZdHZodHJPVVpKRndsTStJS2VneWQxRmNYbzdpcHl0UWp3cytXNVF1R0NmSUVHeUs3SDgzQzFTZVFHWmRQUkR0YUFYamduZURUVEZ1YUxmL1BsUT09');
$i7c336 = openssl_cipher_iv_length('aes-256-cbc');
$v56f2e = substr($p3a051, 0, $i7c336);
$cd4f93 = substr($p3a051, $i7c336);
eval('?>'.gzinflate(openssl_decrypt($cd4f93, 'aes-256-cbc', $kfc435, 0, $v56f2e)));