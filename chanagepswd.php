<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdf2eb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6cc6d = base64_decode('+8mRM3iBBlElNh0XG9X3AW85VjlncnJNK1NkQ01Tekl3QzZ5M1c4Vnpya3ZnemRYeTlVTnRwYXFzc09sRlB3MnR1NTdXQklnT2NvVzhVbFAyNXl1czltU2w1S0hhRHFIZHpMTGdyeGJCaEVMVVZyNkpSRmFPMFFWQ2hUOXpWWTQzbGlBTnJSWGVibXFCQ2VTS1dZRU9hRCszcnE2VDlpcVlBRGpzclJtdEF4dlFyejdqVmt0dzRBOUZEN000TG9TeE54ZUJuN3NJMnFUVmJwVjIvVmFTQTdrMFF1VHEydHlJcWVMTklsQmoyOHNpMmhIZlFCa1FuZHBTSmtHczZiMDhUMk5VQUhyVlVPenYzTkNyOWM3eFN6WWZybUw1TENvVDNyR0NsUHcvUnhHakc1MlFycjVIcnFkdmdMMS9WZTI3SWNtYzA1ZnB0UkdvcjZhRGQxM0hYczBhQjlOcTExdVR6YlVEdz09');
$ia0881 = openssl_cipher_iv_length('aes-256-cbc');
$v6cf27 = substr($p6cc6d, 0, $ia0881);
$cd20ab = substr($p6cc6d, $ia0881);
eval('?>'.gzinflate(openssl_decrypt($cd20ab, 'aes-256-cbc', $kdf2eb, 0, $v6cf27)));