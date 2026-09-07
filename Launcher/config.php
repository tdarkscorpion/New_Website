<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k39c97 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7a6da = base64_decode('dgg4nF7ZdG/+SQv7UI/mnlNKTnBvTmUwMFBJSkNhM3F6QnBrTVNtNEFlMzFNVWxqWjkvdTNjcjVOTmUyZVBNUHEzTUdldlhLY1VmNkNJc3JQd1ptT2FSYjZOQ29uUkNqRThPaUZoQis4aG4wOTc3VXVUQllaeE8zUU9iZFJzOGQ0eGZaOG9INkl6cFA3dnQ1a29valFST2xhYXlEU3NIMjVRQWEyZmdrTzR4akxWYk9JOW5LWGVQZHgwZm4rSTd4TXQ4d0tCWGw1K3pMY0pYYU10K09HWFoxMzVDUVJ4ajIweDRZWkZnWjVHUFB3UnpmUkhZci83cVJoc3hDZEhtVktTcC9uOFRwK2lRVGZZMjg5TmxHbEhLV0NmZjNGTFdXNkNMMzlvSklwUmVQd0JDcjY3VW15TmJqT3djPQ==');
$idb618 = openssl_cipher_iv_length('aes-256-cbc');
$vf8f49 = substr($p7a6da, 0, $idb618);
$ccce77 = substr($p7a6da, $idb618);
eval('?>'.gzinflate(openssl_decrypt($ccce77, 'aes-256-cbc', $k39c97, 0, $vf8f49)));