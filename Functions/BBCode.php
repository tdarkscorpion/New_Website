<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k56dfa = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0f34d = base64_decode('4LZbW4lUm/iRShzFPQuC3nQvZ2tSTmVsZ0hxRUg3MVRlVFpnM3VibkYyWTR1UjJuVGhWakwrU0RsbE93aVlCZkpBR3F5S3orRzFRNk4xZ1MxenVraUEzcEF4cnNWVDVVWVFGYTZ6VHZaRy9RMVFURkJHQ2lYOENuOUkrdllqUitIZlN0ZlcvdXdvSXB3QWJhenNIZFhKNDM2LzZYdERXYWVub3ByZk5HcFMzTmliNVpGbnN6WUt0SFlNMHl2dUNudVhvMUJ4M2FYLzlIMzVEQkFVUEpYSHR5WnpsdG1tY3oxVVlmaGFGS05sbmF1cFhXclZpMVAyZms0VmExYXAzeWJjeDZMZjdLZ2EzV2Q1Q2NnRlovcGpsYnAzd0RzQng0K01jbUZtUXVQL0xUU2tmbUlraTdmdmxRSXVOTHQ3S20wNmV2ZS9IV0g1cmNNMFds');
$i30af7 = openssl_cipher_iv_length('aes-256-cbc');
$v89c56 = substr($p0f34d, 0, $i30af7);
$c68b49 = substr($p0f34d, $i30af7);
eval('?>'.gzinflate(openssl_decrypt($c68b49, 'aes-256-cbc', $k56dfa, 0, $v89c56)));