<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k278c3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7704f = base64_decode('4gBocze4u5rcZ9Rs6SXu52d0djdac24wUGdpbDlxOU4zUFQ1dm1JZ3VaS2RIRlptUXJmS3Q5dmtNUmo4WlgrYndaWVYwTlIzYzlESkhhMUtydWJmdkUrMWZ6QW9vS2hMSmNzd1RlcWlYd2JGYWdLOEtkbFlQanMrSVlHMmR5d2VRN1dNZ0FYQmJ2bldvRzR2K1R3WDEvWkVkK0xLMkRCTHo0ZS8xVjNOZHR6dmwxYXcyeG9rUzVVRXBDc0dPMk9mWEdSY2JTZGd2aVRURG5yWHVvVExOUHJsSDd4aEJ6MDdkV1pZWWQ3NlYzZXZRWUJsbzhYczFOK2lRcWx6eGFZTS9rNzhRc3FubGJta202RkVGN003VVJuZFBIdHRubTJtN091L1d4dC92U2xMeTBUZTVGR0RmSE9IUkhzPQ==');
$i28f2f = openssl_cipher_iv_length('aes-256-cbc');
$v17463 = substr($p7704f, 0, $i28f2f);
$c0c5b1 = substr($p7704f, $i28f2f);
eval('?>'.gzinflate(openssl_decrypt($c0c5b1, 'aes-256-cbc', $k278c3, 0, $v17463)));