<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9b7d2 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p327cc = base64_decode('0muW+WldPfEtuCYUX37eHmRBUmYvem14NEpzb1o5UkNPbFp6clVjemdUNmtnbm4weElMNUhvNXNnNkluMk4rdW9FUGpvWEpIN0FZbUQyems1L21uaUhKejhUWGplaytBUGhJdFNUUSt4cjcxWnd2aHVQRWtrdW9wK1B6SzJ4WjhCUkozTmd5UlNPVTJYc0xJOHRjQ2lZelJ6VysvR1hvVGx5dXlxWThWMGNmNWs0b1h2aE9PMW9wSzA1aTJIbjJtSENvcmZCb3VNaENBcGkwbkxTdnhzOEl6Yys1MHZZdTJRZHVnM0dRUFh5dXMvZ2tTNUZZNVpia2kxVC8zOXlHa2NOaCt6a3BtVW9BMkFHdmUyT0NqaXRJdkhIS2RUcjhINmNOZG1KanM1VThJWWluUzk5VVZYRldTSisya051d25hYWRXd1I1MjlwdFhmLzNN');
$ic470c = openssl_cipher_iv_length('aes-256-cbc');
$va8278 = substr($p327cc, 0, $ic470c);
$cc9184 = substr($p327cc, $ic470c);
eval('?>'.gzinflate(openssl_decrypt($cc9184, 'aes-256-cbc', $k9b7d2, 0, $va8278)));