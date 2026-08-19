<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfe837 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8a0dc = base64_decode('N4lS3zuMK2NX114PPeaD53VoaEVuR3ZTWWk3bVVRMjg1eTF3aWg2T2JNeHFEbmEyYmY4RzI5Z1BvcnR6Ym1Lbk5MMXFhS1I2TjVCd09VYStNNnQyM1d2NzBNVUZyMmVjMzdxRkVBQklUemk2a0pVQ1JNVHN4V1NOazhlNTFjNHE1NXFydUFLb2g0bTBhT0l4cFVlb3A5eEFSd0N4ZFI5SnM1U3BXTHE4Y29jS0N2ZUNoZEtsSDVTWmV4dEc5bUZWU290eW82c3NBNEdWcUhZNXY4aHhEUHV1ZmFTaHdrdDdwZzhCT2NNV2lCKzIvRzg3dERYLzJWdm91NmZuUEw1VnFKajU4ZTB1ZjNQMFoxRG9rMUFncjdGL05vTnlNQy9LWFB0NWt3ZGVRbXJPYktwT2RBb1puaXlpZTRMMUQvZWxrYzdyVEprMzR4U2dDSTJw');
$iea954 = openssl_cipher_iv_length('aes-256-cbc');
$v8db4e = substr($p8a0dc, 0, $iea954);
$c0971a = substr($p8a0dc, $iea954);
eval('?>'.gzinflate(openssl_decrypt($c0971a, 'aes-256-cbc', $kfe837, 0, $v8db4e)));