<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfe49e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2a451 = base64_decode('Rfo1Sjg1lEBFPQznyxKIuEpOejJsNk5rYU1ZNHV4bFhHUXd4ekl4aFJhNXFZZVBETTNocTEvZ0xicUZMVTg4VW9WQVlwNUtxSVZwRVBudWdYVWxENUZ5eXcvS0xxQ1IzcVlhRm95N2xmK054RUpqNnZ6eE1BbDVIRFlWWFZ5MG5HVDQxNTUva3FZRms2NkZYc0xtb2xoOTJUakMyZjZjSEdBNmJzNGxCdE10R0hsaXJ4czBpeHNvOUVmMWpBWHpEOFNTMTFENGFuQ0oycUlzTDBHL2ZHVlNVMTk4aDU5ZXZ6bFI3VkpSN09ZeDhELzFpbkp5VFdkY3hsakJMVmhYWUlNcnNwcFBGVkUrdlorSXpYNjFYckpwb3RoU05oUXpwMVBBa0Q4VVNCbHR4RFlNUC84VEZxc1NkcUVSV1JMc2JWNUxFTktTekF3L253QzhJdGVDRnlmT0JjUWFhM3A0MUc1dGpJZz09');
$ic63c2 = openssl_cipher_iv_length('aes-256-cbc');
$v9a04c = substr($p2a451, 0, $ic63c2);
$c7d575 = substr($p2a451, $ic63c2);
eval('?>'.gzinflate(openssl_decrypt($c7d575, 'aes-256-cbc', $kfe49e, 0, $v9a04c)));