<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k735cd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p4ebcc = base64_decode('/ng1/OOZFraRq+p6t3J6Hld0WGF5NzVLOVVoNFlLTWtNcmpiNmR2QmpBbkU5ZVpOT1ArejhqUFpDTzJOZ0I2WnBKTTEya0x6dGU0UXphU3BkTUlqUnpWT0h4OVA5dU5GdEw4V21oUk5oMy96dkFiNTBZbDBiZmRIdm9jVjdhQlc1Tmg4WFRJTTkzYlRheGJURElHNnhaVUpyd3ordnV0OWN6ek0vTzdsV1A3SjMzSmlJdEoySXJKeGFyS093L0FaRk1LQ3RpWThMU090d2ExNU9GWXVvbEhqTnlUdHBONU5kcWx5WHBoUEFGN29zeHRKUXJlN08xM21qVWdTSm1wS3VoR3NLMHlPY3JRa3l3NGJXa0J3eUNETittdlZhU0hMbURJNVloKytqWmk2emNWcm9nM0ZsVTltRGhMZXRJVVA5Vm9iRTRjZFBZNGFmYnJs');
$i18948 = openssl_cipher_iv_length('aes-256-cbc');
$v19a7a = substr($p4ebcc, 0, $i18948);
$c8141f = substr($p4ebcc, $i18948);
eval('?>'.gzinflate(openssl_decrypt($c8141f, 'aes-256-cbc', $k735cd, 0, $v19a7a)));