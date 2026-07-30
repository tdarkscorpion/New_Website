<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k09c07 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p88ed2 = base64_decode('caK3QfYfmOzh/jMFKUPc5nNPMGJaOWd1YUdSekE3WFF5OUNWWDFSOVg4cktYdUJEY2I0NVlLK0tURG9HUXZKRndyL0NValNTKzc1RDRzY09sYmh0aWw4SFA5WlkvTUtuMThaYUlTV3V6dllpN2NpQ3JMbkVOWjRaY1hlWUNJd2xrMVI3R3ZQSkpUNTlYOHRTMWRlVCtqQzB2bU5sczN1eVVMS0c0ZlViTVhOUElTNnV3TkUwcDhFcHpPb1pTdzdoRzNCMmVZWjJwck5EZmpvRnZaTnFrQTJtVWhQRTYrbmM2eXZyZGFvalNhc0hHNVNlMXFMSk1NR01jZW14eWJDNHAyK3U0YzN5L1hzTVdmUjA=');
$i8a88c = openssl_cipher_iv_length('aes-256-cbc');
$v15ebd = substr($p88ed2, 0, $i8a88c);
$c0fca7 = substr($p88ed2, $i8a88c);
eval('?>'.gzinflate(openssl_decrypt($c0fca7, 'aes-256-cbc', $k09c07, 0, $v15ebd)));