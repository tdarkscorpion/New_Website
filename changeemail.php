<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k59b4b = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4ea58 = base64_decode('/ImsVkzOHVOTzk6VEm66IDBIbk5uZnV5S29RQnFxYlRKbDU1MWZsOFhxUW0xajgxMGE0Y20rR2dBK2krM3pmUFBJdDJ4YmhPdXgyMG1TTU1hQzlSODNRbzhaaVNUanZJdDJqclgrTTJXbEdKL3ZUcjZ0UURwZVFSOWw2aS9mdmFLMmdDbzUxSUhKQy9WZ3h4QldvUmNEME9tcVVjenl2aW5JR0JZNXdiUTg4SHMyMnFxczNqZjg1SGRxUDNuQ01pTDR4L3U3YUNmZkZraHN6VjV0RlM5Zjd5b1NaNXhTUE9iTktFcTdlU1RuSDZnL2YyTkRwZWpBdGdHaU5DWFhCZlkxVWZuL0lsakJ5WW1zNjNYdkdoTWRZeFRMMVBJRVdsRWxJMmRiYjdHdDZJeGp5MEV4VmMzR0tPZmwzVzZzMEJFK2lJc25xczNMZ3NYV3duZUNCeUIyMStTczE5TTY5NGVSdGtSUT09');
$i312de = openssl_cipher_iv_length('aes-256-cbc');
$v800ac = substr($p4ea58, 0, $i312de);
$c67012 = substr($p4ea58, $i312de);
eval('?>'.gzinflate(openssl_decrypt($c67012, 'aes-256-cbc', $k59b4b, 0, $v800ac)));