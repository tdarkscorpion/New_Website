<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb2122 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8ca45 = base64_decode('TnK9NRriY7nk7ab1+988vWVOT1hUWGRQVUgrcXVvN2FWQ3RhV3ovdllJcE8vc0ZnQmxIVDVhWDh2M3U5T3NIbFFzbzAzaXJwV0hMa0w2RzZORlhJRDFjYTJqaG9OUm9xeHNTOTV6UitXbDdQaGRFZjJmeml6Tm95eHhrZVp4M2s0N1M2cmNUWlpmOGVoVlVZbERxWEx2RVM0dnZ5dDViOHV1bWtsdnZ5OFZOSTFyOUIyZkErY0JCK25xbjVveGtpT0dDRHhwTTJOSm9lc1VXUmI2QmRaL3B6YkxSU3hlS2F1ajR4SmdWWW15eTRrTFNmMERyUmVjanBHTGpUcW5rd2ZzQytyMnM3dzFOY2VMRjVRK1QzdzJ6eFArcEpCdnBnaXU3WU5tTHVneVhSd3h6ZzgxNkdCT25iUjVRVFBsSXc5SStwQjJ4cFh6NWRFQ1A5amdMeXpEbDhrUFJWbGNwT25TQmhYUT09');
$i0e747 = openssl_cipher_iv_length('aes-256-cbc');
$v20bde = substr($p8ca45, 0, $i0e747);
$c975c1 = substr($p8ca45, $i0e747);
eval('?>'.gzinflate(openssl_decrypt($c975c1, 'aes-256-cbc', $kb2122, 0, $v20bde)));