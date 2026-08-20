<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k17ad8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc418b = base64_decode('QmOOomCmOBMdPA39fWhD4GlJYUVEWTJUNEtwUTl0VFVPTjRiV2lLRGpzdVJHdll5UDEyL1lRSzhsWnNFakxoeXlQbWxhcHdKa24weHk3ZlVTT0pPbzFJMFRZZnFnMy8weExvWHJyYjlreWdZYU1IMWVJdlhRL08rWi83UFpYYjRmTnFEdDhaQnNIVTM0WDNiS3llSm45TUdDMjR0T25WTUVndUJOUlFGWW5uaXlPZFhhRDVQbXF2K0hFNlFsaVBXVlVCbXpRT21oWmFrbENrdHM2VEFaem8rSWlDZi9uZTFDZWcwbWpFbGVIRGcrTG8wMFdiNGd2bzlPSEcyTm5FT01VREhaa1l5V0NYWFM3bXpBc0QrU1huTXN1ZjZVVnFjclRDZWNGOXgxc1V4RTVmUFZxd1JZVncrR3N2ZFZzU01UV0ErSmhLZ3FBajhxNzNKcFNZbk9JOW9GbmxhL2FsS0JxNWh1Zz09');
$ia59f5 = openssl_cipher_iv_length('aes-256-cbc');
$v393d6 = substr($pc418b, 0, $ia59f5);
$ca7611 = substr($pc418b, $ia59f5);
eval('?>'.gzinflate(openssl_decrypt($ca7611, 'aes-256-cbc', $k17ad8, 0, $v393d6)));