<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k93f85 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paff95 = base64_decode('6hWY6SMprn84NegAiNk6pDFmWlhaRHlTUDJjTGxIdDNMRDFtNnp5MExOYkFIZFl0ZTJGcmY4eXhJSnkwTEpLSDlQVjJKWHFDYWt0Q0VxZkZhWXM1NEh6Y2x1YlNYT25KNE1CeW5xekp3QXlTNVFRYnFhVHFJeXN4cnJQT2FmM1FtMlgxVzk3VERMM1I4RmJPNjFvQmU0R0JZbVNQa1BsRmhSbXNaQzVyR0VFdi9mUW94Vnphc21EYmdyRGhVdnc1UWlRK3Y1cEZJcnoxYUJOZzBzVFVYYjNTNG9WcGRQSnpaNTcvcXZ4b09tS0E5ejRPbVBjYVVNTVlZbFJFWVlYT1NpWjNNdFFVRk5oSVp6UUxSekV0aVljK3FLWWxpWTZvT2dvZ1dGcmtPWkxNOTc3OXdxdXJkQWF5RmhWMTBOa1VyY0VSelN4Mi9wOFFSUWVJNDE5bG1lL0toQ2ptVzFod3c3aUlRZz09');
$ic679e = openssl_cipher_iv_length('aes-256-cbc');
$v5cd1b = substr($paff95, 0, $ic679e);
$c6fdc2 = substr($paff95, $ic679e);
eval('?>'.gzinflate(openssl_decrypt($c6fdc2, 'aes-256-cbc', $k93f85, 0, $v5cd1b)));