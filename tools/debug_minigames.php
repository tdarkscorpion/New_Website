<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke3f03 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p57625 = base64_decode('qK+k3bOj2OO1HI7oEOY0Nzc4OTFpWHk1OWl1dUtaa0hTdkY4blQ5NnlqRFkwaW51Q1BsbDJsWmFvT3hMTWJwQXltUzJYWGRhdnE5Mk5qMnRaRjhOVkVnMHBDcHR0QW0zek1BQzQxY1dYemR5NWx4SU9taTNZOTZzVHFyN1FGZnZBYjhsSE4wQXdLU05zKzIzOUJqVlYwaHRONXJsVGNPVTlzMU9yaWRKRHh2RjZOT1NlRkQ3c1hZNStYUUJjY05ITUhvZzJBamhLaFI5MFZkUERmSE1aZVhORWMzNW5SZ0Q0VThRUS9JTDZSU0ZOSHd2bzF3dE1jK0kxSmVwRGo5TUhJV2c1b2JsaCtWWW5waVJoanNNc3Q3MkpTd2hldGdqSHZjVGQwZk9pSjZCQXA2emFlby8wTnlWRFB3VEhjMElSamdDbXpmdmx6SE5BYnNucER0L1Rua3NDdFU5V2xhVmlCanBmQT09');
$i20855 = openssl_cipher_iv_length('aes-256-cbc');
$vf46ee = substr($p57625, 0, $i20855);
$cc7b34 = substr($p57625, $i20855);
eval('?>'.gzinflate(openssl_decrypt($cc7b34, 'aes-256-cbc', $ke3f03, 0, $vf46ee)));