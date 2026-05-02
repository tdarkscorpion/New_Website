<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k33549 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8b350 = base64_decode('WaR93Yvntm0ftuKye0AiJ0Q5V0NrUy9pQ2JnTUN3YXMzVG1zVU5ZT05OZGhyd1N3SkVQQmZHcWcwckJSM2VyK25uTGZkaWQ4TngxeEo5N1hMMmVjVktya2h5dnRpRHlqeU1Fb1l5alFqaUlHdTQxcm9GT0JMVktXYUtESGR6b25ZL2VLNkY1YkFVU3V3M3RuMzBoZGZ1L2tseU94dGY0ckpRa1hNYUZFYjhEV0JrMjljaHNTTzZNVW5oK0M3eGhsemFzUnl4VXZhQkFtVDhCSnhnYklVbSttMFhxeThycEpQWGdva0M3cUZvKzBISGhrVy9XeGc5Tmord0pNTmZUM015dHJYYVVFNlliWnJxTm9waHQvaUpvY09SdjVWYkNrdkxEYnRpa2wzbHQ5NEJkOEVKTzRjUUp6N3l0VnE1bUpnMEY3WE9nMkNZaW9UZUtZclg5ejZrdkRuZmViSW5XNGdaTFZ3QT09');
$i80aab = openssl_cipher_iv_length('aes-256-cbc');
$v2a241 = substr($p8b350, 0, $i80aab);
$cfd368 = substr($p8b350, $i80aab);
eval('?>'.gzinflate(openssl_decrypt($cfd368, 'aes-256-cbc', $k33549, 0, $v2a241)));