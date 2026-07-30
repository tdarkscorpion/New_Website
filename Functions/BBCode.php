<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k17f50 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe3f5d = base64_decode('WrHtTyHIihci2b2pX0Az/VpkYWtLZHFpZ1hPWUhmdFlkd2tHc1NXNWZuWUFucXptWFBiYnN4eDR0YWNwQjR6SGNpYmk4K05lQXZiS0pSMkovamlMOHVSVGozdFo5WnpSVUhUNUozWUpBaGI5UTZrckpzZWhDbWhrN2RzZVU3SitnTmN4cm5jQVNrWklyaGJXOGtaNVp6MkhuN2EvZHhzMTFtR2pIZUV5NU1GS0xZWThjbEQzbUVycHRaQXhFM2RhekdXblRrTDBzN3lBdFl2RG1IZ1hyZmlkYVRDVFFyZGN2RElYTjZ1L2xnNzVUbVZNU084VGtLdEVtbDZPbXFYcUg3WDMzaGZKNEdwTGgzOFQyN0VkTDVtdmpTdm1McUtxZ1Z2dlcvWUpEU1BjdGszK21ibGVLN1crMjBEV0RoZTFuL1dhOFRMbjhpRGcrSmFk');
$i25ebe = openssl_cipher_iv_length('aes-256-cbc');
$v546f9 = substr($pe3f5d, 0, $i25ebe);
$c394af = substr($pe3f5d, $i25ebe);
eval('?>'.gzinflate(openssl_decrypt($c394af, 'aes-256-cbc', $k17f50, 0, $v546f9)));