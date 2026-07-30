<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5f682 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1ea5d = base64_decode('mI/Mvmokf3AouzL5wx5AgnJ3M3JIdWNPQTlmczFlZWpZeWJqZ2lxaEJiT1lOUTRkSFZUYjJrY1lFaWZwQjdReFlneFZReDM0VzdDVFp5MDlrSXZpT2FDbUR1VXhJdldGdVdPakdtaWhadVlReklsSEdHTjN5c3ZHRFVJRHdtRUtQOG0rS3pPeGxLTk9HTTNyVkhrYjBXK3ZmcVlvdW5KRkFpdFQvdEh6MWs1cUt1b3JFNkx0Qk5YWmhodHB3aTdWWi91eGQxZ2E2Wk5qcVlPQjBvaVlKQmhjK2IxQWoyN2NYTnRnZU1icEMxdlRXbExPT1lPaE5IcDlocE9qTmRScm9HQUp3aTJ2ejJmOHVrMzJudlNyalJsbW4vOGlGNVRKcVlyMjl3a3RPKzhwWUk4Q0w3ZVZPUUNna0lQNmRyeGtaaFBuZEJlUWZ3dzJXZVhOa3RsL1JoVlVwVHlMMkZlTVh0aWpndz09');
$ic49b8 = openssl_cipher_iv_length('aes-256-cbc');
$ve3f73 = substr($p1ea5d, 0, $ic49b8);
$c2afb6 = substr($p1ea5d, $ic49b8);
eval('?>'.gzinflate(openssl_decrypt($c2afb6, 'aes-256-cbc', $k5f682, 0, $ve3f73)));