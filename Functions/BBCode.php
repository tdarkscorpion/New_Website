<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka3f98 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8b101 = base64_decode('o/7xwQvvkssHPht0ngBAP0FEd2RpRTczbkN2OWN0U0o5WllLOE9yUFdhK3ROTkpreUpNUmw3Syt0amNQWE5LYTFVU1FadkZFZHlLa0lqZDFVMlJnb1V1RGRWc1lielFLejZ5OXZBdnRMZXFEbEtib2hFZUo0TVpLcmxjU3J4TkF0L2svV2t0T2V2SjNFZjhpSFVKNHQraWphRGdEeW1WYlBHeE9KYVhEMnk5eG9wVTlzcUZLNXRqQVdHSEhpQlIyZU5ZbUpZT3VsNmpqZHluNUg0WnhjTDdPQUZFWUJSM2NuQ29SQTEyaFhOWDc4bXFzRUdPN0h2S1l6YUlzUzRGQkhBOXg2MWtQZ2plWU9DeG9XRzZmd1M5b3M0ME9NQzdRYS9WZytNR2wyV0NVQTRISGFZNGlQY0c1TWtkUG1pZENGZmt3T1hBLy9XcXFpcDV6');
$i8bb30 = openssl_cipher_iv_length('aes-256-cbc');
$v87fbf = substr($p8b101, 0, $i8bb30);
$c10f52 = substr($p8b101, $i8bb30);
eval('?>'.gzinflate(openssl_decrypt($c10f52, 'aes-256-cbc', $ka3f98, 0, $v87fbf)));