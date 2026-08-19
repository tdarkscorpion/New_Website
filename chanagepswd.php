<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k08283 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p00488 = base64_decode('f4RrxX8OSnVKp6ItifqKzmF5SlM5RUpmdWpPQllDRHVuYktLL0JMRkwwcnhDTUpJQ3pmb0VDa3dsODk2WmF2cENkWmJQUUY0M1VNcmk1RWNpQXdCOSswa05rNUFEVzNDK290ajhsdVVxK2Y1QjJubTZLdTkrREJyZW81aUZSRWJVQm5TMnZhYk5zeThzcUxUMWdxL09pZVVpK2pMUjByVEJwR2FGMnBNb0ZIRUxRNDd1S1FwRVlLY0llMi9wc29FUE15N0JOQWFxSjFCaW0zdlg3WWRhMUxjOFRHeWhyV3FLK05LUXMzdmZ6V0FSRytneFhCUE5kbUU3a2N2d00vNjYzZGliSFdXeU8wbjhvZW9ZQksvOGlGSk1yem1jbGFpMEhaZWhpREYyN0sraXVYZmJ0ZE9qelBrWXJScFJkTEgxeGRPN3ZnQ1NHaUl2YjZJUGNhTVk1d2JsZWtiMzdtRWNwWHZtUT09');
$i481ba = openssl_cipher_iv_length('aes-256-cbc');
$v2a37c = substr($p00488, 0, $i481ba);
$c1f84b = substr($p00488, $i481ba);
eval('?>'.gzinflate(openssl_decrypt($c1f84b, 'aes-256-cbc', $k08283, 0, $v2a37c)));