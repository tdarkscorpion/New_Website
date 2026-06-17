<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k50582 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pacf76 = base64_decode('G4q0yHmb+PARpgfUfkQz1ldZY2lWSmI0dnluc1drSVBGMjFmQnlrYzBpM3gxMTVoZThjSm1kNjlSdkNkKzBUYjR6OUNxbmlWNlN5bERKcXZmLzQ1Wk0zN0F4MGVnTlRIS3ZKVTRRbEdFUU1scnBkYlV2Vnk5QThPSW1ZWXpCNm9lWjV6VWJaeEp4OURmNEoveHpqMk1RT0VubUFUTTA4UEllb1ZwQ1ZpZUtwcGRrMnN3ZmUreWFFemZQZEtDZjBZbmUvYkcxMnF5aTVVdDhsd1plYitCd3VySHI2Zi9qMVhWaDlmMEZUcENudlRzNXlrcE5pV0hLdFB4VFJvMC9sZm1EWEFqWFVQMTlxSzAwVWhuSFVKRHpIVjdMNzdnQ0RUZS9aNWFIV0U4cjNJbFpJNWtMQ2pZQWg0VThKKzZjOXlVaWJxNTlCWEhyN2RwVXcxS2tqWDgwSVdlRVBHdVhtOW5jVDYrc1p4UnJHQ3hPN0FIQTZLNE1YRW42RjRtT3RvZ01FdmdMQXk1N1JhLzFFUWN2Yy82K2g5Z1crSXRXK2o3Z1JWblE9PQ==');
$i1efe1 = openssl_cipher_iv_length('aes-256-cbc');
$v351ee = substr($pacf76, 0, $i1efe1);
$c126b7 = substr($pacf76, $i1efe1);
eval('?>'.gzinflate(openssl_decrypt($c126b7, 'aes-256-cbc', $k50582, 0, $v351ee)));