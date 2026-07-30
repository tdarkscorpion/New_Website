<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k09505 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p902ab = base64_decode('wOZI/SHcKazGGFdvAB2si2ZoOUdtaU1aTDB6MVpyUFFJOHFWeXhrVUF3cy90U3VCS2l3ajE2MVVmbFdtSi9PY1pkS1F6bnVYMW9RclpTdEVvUGJEaFpVOFRFTVhvVWZjdXZxSTQ1V2x6UjJDMU5nSXFwUll6Zm1KczY0aGUxakMxc0w0cW9jVU9UVjl3WTIwaHZDamUxdzJPSHFIUmtMaXZ0ZE9MY3daNUg4c0RYU09kUmlma3BpYnc4ZitlUkt3SjdkL0toeUZnRjlSN0VmVThHR2pXb2d5R29PSEE0eDljNlZWSEZ0RzIxOWtVN281VTVNeXVXelVHOVM4RzFZRml5Wm5JR3ZBR3VhSk9xOXNwQzlIaktkUjI4c0JwTCtNQ3RKeERvS1lKZmdkbWpUdWQ1R0hxY05jRTd0T28veU1yaExFRjZRTEY1VVdRUnlCcXRhV0RpdXR1OG04a3FqVjZHMEdlUT09');
$i02407 = openssl_cipher_iv_length('aes-256-cbc');
$v79d0c = substr($p902ab, 0, $i02407);
$caed1a = substr($p902ab, $i02407);
eval('?>'.gzinflate(openssl_decrypt($caed1a, 'aes-256-cbc', $k09505, 0, $v79d0c)));