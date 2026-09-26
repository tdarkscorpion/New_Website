<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k14ada = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb5d6a = base64_decode('FsX/Yww3fhlXFlmVwuH4LVBkUkRGalgvUnBWWElYN3dVNXZ6S0d5MHdldTN2S0d1cWVvT1VWcEczMFNzczdDZFhsU2pMVWJzTE9zL3o5VDNQcVRDMU0yMnNQUmQ5STdmV3Z4emxDQTYvNG9LTlN6bWdabU1MWXh1QnJxdFV0UTZCZFQvdktwWUhBOC9kNEg3NkVXU0V5SjNYQXRFb25NdEdjazUxWGhzRTY5U1l5T3J6SGlEVnpMT3Urd3BRRWU3aG9HVmJvbzdhVDlSbDZ3WTRrWUJocDlmWGwwZ2lBRFpSUFA0alpHWk5keVhteXQvMDd1TUNuMXhLK0o4QUVYemI1TjdJVDJNQzdVbk9xbzlETHZVU0dUbjBDblFOaE5JNHJLYW5RYU1US05weU1OUk5ZZG9ZVldEdEQrRkUwaHVrZmtKMlkyaTZQY3BVRVFlelVVRVN1dW83ajI4TzV1M3J4a2pzWkVtbk5nQVV2eTFxcWFRSWRaSkNtQ3FhQ3k2VzFIeHpnTzc5cVlIYlFLUElVZUhkaTBYZEd0RFZjbmIrQnY1c1lCbFhzMWJjcm1ibkpPanZxbmdCbkFMYkgvSzdCbHR5Z2V6NlZBQUpGUnk=');
$if94bc = openssl_cipher_iv_length('aes-256-cbc');
$vd160f = substr($pb5d6a, 0, $if94bc);
$c7b5dc = substr($pb5d6a, $if94bc);
eval('?>'.gzinflate(openssl_decrypt($c7b5dc, 'aes-256-cbc', $k14ada, 0, $vd160f)));