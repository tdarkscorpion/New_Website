<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc0c26 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb14b5 = base64_decode('SFtR3h12FIawQAl/5fDeBlJYRC81N1JuNTBKS1V1TWxjazRTTnJLL2JTai9UWjhZaS9xS09yZVNVK2U5RG5yVExjRks3d0RqMnpMS056SUpicUdMRjVWRkRMbDgzdWJNYjRTTGJDa3ZPRFNqNTFhTVdXZUtSNWtOYTd3TUpBczhCWGNLVk54d0ROTmdoVEg1cWFSdHREVzhkcWtyV2g3c3FCSDA2WU5oM0thSzRsTnhUVzZ5NjZiL3phY0p5NmxyWVBCb1NIUnAyaTJ1VmxaRTVLN1pFVVpNbHBQakVCSEJEOWVVcElmbTI0Kzd0eTVZYVBaViswNCtncXhyaTBqUEMycEZFc1BZVTRHeXFXVFcycGhxUVY4ald2Q3hkd09mMjczZWJ1N0dORGcxOHlZM0NvbGZya2lFUk9zPQ==');
$i19e6f = openssl_cipher_iv_length('aes-256-cbc');
$v3cead = substr($pb14b5, 0, $i19e6f);
$c40405 = substr($pb14b5, $i19e6f);
eval('?>'.gzinflate(openssl_decrypt($c40405, 'aes-256-cbc', $kc0c26, 0, $v3cead)));