<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2bd08 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p83625 = base64_decode('iK1LI9VzkMSfvJGj/i9coWZ0dnJrVWJtUGx4TVI5UEpQanY1azdXRzA2U3haT0dqTTkwRk1DRGJLQ1hpazQ4M2lYV0U0dytTZm9kdEhqcGw5cE5VK2NNTTlJMEY3L09mQUgvaUhjUW9NVndlZzFpaXkvenoxR1NFREt6T3FDUDFRRnR4MzdjZFFETkdiSi8xRTl3cDlpUk5GSkdSZkVLYjBhNHF0TGI3YTFQZVVsQ0dlTDNOTUdTTHo2WDBYbWpVQ1llWlhvTEtCUGRWUzJQSzJuQ1NQWnI2U3h0VVNadjQvNkpyUWlQUXpjdkVPTUtCZWZRK1F1QUJ0Sm93YWtHTEpzTmREd0xvYy9JUkV5NC9NUm1scG5TYzBINHBRTWFWeTFUL1lXNHVROFhlRC92ME9mSzFLMVU3R0JjPQ==');
$iaef8b = openssl_cipher_iv_length('aes-256-cbc');
$vd9c4e = substr($p83625, 0, $iaef8b);
$c5ebdb = substr($p83625, $iaef8b);
eval('?>'.gzinflate(openssl_decrypt($c5ebdb, 'aes-256-cbc', $k2bd08, 0, $vd9c4e)));