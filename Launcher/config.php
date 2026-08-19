<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k75d57 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pdd091 = base64_decode('mH29J2GRNdWVB7wAVbrxhC94cGsyTGdscTdydlE3LyttR1NVdnk5WGJiQldvTTEwUDdWRkhWMVJncHJScjFXeHNueDFCbk0wb0Q2azZnV1dSa01zY0ovbkNGdzREMTFMZngrVVFVOWozV2NpVjVIMnRPOGh2RXlFak82em52cmdPMnJDSm4rNnZXVFJ4ZXlrWm5vRW4zbHd5UFg5dS9tZFRBMCtPZExBdHFaMkFrRDh3WEx5aGtHL01uQzd0YXV2YlFHbks4WXhoRXRqcHN5L2N6MVVOcHJyeFVTbTJVOW9nN2dEbzgzWjdhdWRXTFZDTTVKTkI3dXl2YUlNaTN5a0pVNFBlNWNRdmhobDhkK29tOXd3UE11VXhDdHgzREczc0xMbzJocFdOTVRodkh2dEJrQmNzL2R4NzZJPQ==');
$idb2cc = openssl_cipher_iv_length('aes-256-cbc');
$ve098b = substr($pdd091, 0, $idb2cc);
$c0b061 = substr($pdd091, $idb2cc);
eval('?>'.gzinflate(openssl_decrypt($c0b061, 'aes-256-cbc', $k75d57, 0, $ve098b)));