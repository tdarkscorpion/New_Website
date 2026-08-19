<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb161d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p92c34 = base64_decode('wgRsjStYla9RROyz7j24QmxzZ092Q0FzaVA2Z1l0NXUxVTV0OHp5cHdla1JVVVdqRGhtMEZzWUFueHVOYUtjclMvMUtuL0RNZm9LeWw1YTI1WFhRZTFITVFOaVl0b2NzQWFMcDBDNXQ1U242SGRTSllINXdXLzlLMEltZVJGNnhrUDE2V0RwclkvTS9yMDkzV3VqYytOWGNtbkJHeTVwK2xpVk4rWDQ4cllYQXBVcHFlcTlrQUE3R2x5QVZJUUJZcm5rK2dKNGNhOWFhbndMWEpzbnBGMEJWWlRRdzdRbWdWVXl1eHZMN0Q1RUZGSWtkb1FVVzhCTHcybXA2bHBtTGxvTzdOZllZV2dtQVN3VCsxUklOZ0swZllacUxaWDhNWU5OUzdJd2NkVTdTN3NzSWVqczZpN1BZc3ZJPQ==');
$iec257 = openssl_cipher_iv_length('aes-256-cbc');
$v4d445 = substr($p92c34, 0, $iec257);
$cc52ab = substr($p92c34, $iec257);
eval('?>'.gzinflate(openssl_decrypt($cc52ab, 'aes-256-cbc', $kb161d, 0, $v4d445)));