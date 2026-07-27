<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb3bc5 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8f7e6 = base64_decode('fkasjTYXHT3Y1mVhjyRr325RVWF0eGFucjV1bS8yTFo0TmJNTmhRNzdYUUNmWEZmOHk5TEhKTGNZRTd0OXprdjZ4clo1SjhUdTRjenUranJUN2tHR0g1VndSUG4rUHRxcU50bCtQWmxGMEVTSWhTTTRYNS9Ld1dZQmZSTHRNUEorN3VrT2pWUWRmdWR5cHlOekE2blI4S2ZOK3VRUTVZeDlWbUhlVG4vQXFaUmdhRTVldk0rWW1JSUJBUlJkUnN3aHBDMFNneHpDZ0FLdVVjdmFkaFRvRkdaZFl4dDg5Nk5SZDdaR0pJd2JMN2ZxZStjcTdqY2RpeStqZ0EwdHJRMjBxZ20xcElWVk81VXcyUXFTZWJVOFR2ZVdRaFNrZXpwbmQvSjZYVmo2NDhIK29QMStIZDVyM2NFQWNrY2tkUGhOTFhBQlhiL3VEd3JJZGF5SlB3OHJFMGVOci9jV1BpMXk5b1Nsdz09');
$ic2496 = openssl_cipher_iv_length('aes-256-cbc');
$v7b20a = substr($p8f7e6, 0, $ic2496);
$cb9243 = substr($p8f7e6, $ic2496);
eval('?>'.gzinflate(openssl_decrypt($cb9243, 'aes-256-cbc', $kb3bc5, 0, $v7b20a)));