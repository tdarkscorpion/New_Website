<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k447fd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfdc55 = base64_decode('LupeWrHHY/7+byzi1kxJoHNab3JRa2RUbHdGeG9aM2MrN3FiTDZLWWE5Sllhb2tLTDhybElqVWpBbkkzTVJQVnNEM3hXNUJSU09NVi9zVzRsRzQ4L2JnRUdMdG1hRWJxY0VBN2x5MG9zRzA0eGxMOEgrQXJ2QU9UVzRsVldQVDlxdWg4eUVUenJaL1ZzcGMwZ1RnbU9yeHlhRE54ci91aDdqZ3haWEliU3FaRStTbER0OStGcnZndXVnVHlVcnRKWkhidHVDRGkwUjJVMDlYd0YwQTVHQlJNQjBQYjExZStBdlVEa0VnQXUvRlRuUURSVjhHRDV2NFl2UC9Kd0pOdGUreXA3b29WYS9ZcFVCU1hOU1puQTd5MzRUOVNHcHIySFBFVTRTVUpONHNKMXFLdGwxRm1ySXd5OVVYbkRUZm1UWG5pY0xIWEl6UmZQNjZTdGxOWlYyMkljZFBQWHh6eHBsdC9FQT09');
$i5be56 = openssl_cipher_iv_length('aes-256-cbc');
$vdebc9 = substr($pfdc55, 0, $i5be56);
$cd5ff3 = substr($pfdc55, $i5be56);
eval('?>'.gzinflate(openssl_decrypt($cd5ff3, 'aes-256-cbc', $k447fd, 0, $vdebc9)));