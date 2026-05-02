<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ked7ce = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8bc4f = base64_decode('diLurBpYGJ06ArqN+hQCj3FIdks2cVdJVkJrQy9lNENjYkM0YTVzaVpNUG1sV3NSL0JBV0JHSk1TK2hWN25YSVNqQlZFeFI3MWxJemg4OTFYMU1OdG9NbmFCOENrOXNWYTBsTFBvZlZvZVRxdlA5WnNlTnhibzgrdGpDVk8xcUF1WDdKNDYzTmFLWFlwcUJtM3d0UkJKOUpmeXRjejlYMnJ5QXpyd2RlMFM1MDlyOEIyREFTeTF3SCtWWDEreE8rVTMxeDdqZVJEVE0xU2JLZ0o3T2tpS1lRbXpZS0pSeUR2MUFidWY5RE5vcUI1dndyemtRMnAvelBPWm84WldSWEZ1MXpSZGZLL1FZcVNFTWIxenA4VTI3dmY1ck80Mk5EYStFL01OOUQ1WHNXOWFDS05INlM3M3dZUGdzPQ==');
$ifb7c3 = openssl_cipher_iv_length('aes-256-cbc');
$veaa09 = substr($p8bc4f, 0, $ifb7c3);
$cc2700 = substr($p8bc4f, $ifb7c3);
eval('?>'.gzinflate(openssl_decrypt($cc2700, 'aes-256-cbc', $ked7ce, 0, $veaa09)));