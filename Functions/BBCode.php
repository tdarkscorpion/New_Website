<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2781b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p05272 = base64_decode('JnoJWKmo2oPjkMkmzSvrzjNZSVVQK1lWK1VrTDZ6YmpSUGMxQnloYXRpcUJ3ZjZPbDJoREVoeU56WXArOE1sNitBOHlmZmlBL1N6aFFySmhudncycmpZVEtCUHJRdFI0RFlSa0Z4TWVCY1JhM3FkbG9wSUw2MHBwNXcwWlErWkJUY1UzdEcvR1FKMDBJQ2pneHUxSm54MnQ5V0xUVW9qUUhOZnhSdFV2b1daZkt3L2xOWUgzc2lXZERvLzJlaUg5ZnQvL3pETEQ4azhnTVkvMk9ycEVhdkRTVkZBQW5VMjBHSGJJUVIybjlUVjd0UHhGNDdPZkl6aXVVTkswKzV0aG5mOUNmTGErRWhvOXcrNEVKb0tvVEhacjZVTHhLYWJ0ZzhiSlNEQ3J3QUY3MVIwK2djVXhoSjR6MUZKUGIwc0Z2SjlIVjJuaU5nVEsyU1J4');
$i97ed4 = openssl_cipher_iv_length('aes-256-cbc');
$vb36b6 = substr($p05272, 0, $i97ed4);
$cfb0a3 = substr($p05272, $i97ed4);
eval('?>'.gzinflate(openssl_decrypt($cfb0a3, 'aes-256-cbc', $k2781b, 0, $vb36b6)));