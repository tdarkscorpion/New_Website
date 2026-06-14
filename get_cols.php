<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka2692 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p27bf9 = base64_decode('+Ubo69EQtbeiVw3e6rtxM0NiVnVvYUFrUllxMWNzSGlNWjlWWkZRR3FkNXhSbkxkYUJmNVlqdktnaG9vTVREd2hXRjNoM25rZy9iN0drSmhwSjlKSDJwdm9FMzNQenoyRWdoSG4wNFVxT0UzbFBtbTRlY05yaU1xc3Y3amsvcFVVdk82QS9IV2NGVkpIZXpVQVp4UEZlK05kTFhLUEFNam93NlFTdDZGaW5FVkQ2a1NaSHgrc2toVDNobHJFeGRZY2hzYVovYVYwazg5cFE3ajhxOWpFenFvdzh5TDF2VDdyUDlMSVE9PQ==');
$iade01 = openssl_cipher_iv_length('aes-256-cbc');
$v9ec27 = substr($p27bf9, 0, $iade01);
$cdc5e0 = substr($p27bf9, $iade01);
eval('?>'.gzinflate(openssl_decrypt($cdc5e0, 'aes-256-cbc', $ka2692, 0, $v9ec27)));