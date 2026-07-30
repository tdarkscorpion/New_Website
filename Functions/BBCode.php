<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf7004 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p10b72 = base64_decode('mJE7r9tetONCb7CFWA8/UGlYNDl0RnhRWkpwREIzYUdDUU5pY21pRVdCU0pWMjg1RmFXK3VMRkFXYktRamRGODZMQ1YrbkdXR3ZrSEFsa2hLV0NtUjlMTTh4TzFId2Y4aXROemsvNisrdnFMUjhXNThwby8xci90cE1JSENGVzkzVU1aUXpFekVjVWN3VE9lekd4b0pWeXdsQjBUajdWTWdVc3ZpYUhWNUlHQzh6MlR0K09jRzlIc0tldVFvcHBMNnBOOVZLRTB3eGJkc0ZJNUxSVTlYZDZ1WWQzVEN2NytEWm05WjhuU3hlcGdSYzJ3K2gxNTBXMlBVSWM5OEdFNXRvZXQ0Mjg2WGlKMm9DeWk1K0hWeGZCbjcybTZENVZQUDVHUkJQa1VKN3hRaEVwaEpBbi91U0ltR21YVzdYLzI0ekFHQzZLcGJOV2hlVVZI');
$ic1747 = openssl_cipher_iv_length('aes-256-cbc');
$v67b1b = substr($p10b72, 0, $ic1747);
$c6391d = substr($p10b72, $ic1747);
eval('?>'.gzinflate(openssl_decrypt($c6391d, 'aes-256-cbc', $kf7004, 0, $v67b1b)));