<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k56eb8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd9865 = base64_decode('c9shmD4zqWy8wndFvMrDfW9WRThKb1hHMEVUelJiV0R3RGQ2bk9Ha3V3UjAwNk9wKzRyRU9teFZsQnpIQ0NJNHZCSWRpL3lIQUh6N1c2N0ZzYkcrZ0pNeWd6bEpWVmJSM29oMCs4em9BSzFjcFRqZU9KNzNPQzNtNkFvRUJOMm5EYnArOXhuYnJRY3ZxUzh4QjNudmNnaW5lYkkxUDdiMGxMbkJralZNaVlvVGgyWGJLVkFDTFVVYkZ3OHpHZlBlNlg3cm5POWdhVWRpNlJzS0NlaUVlc0VkV2laK0pjZTF1ZjBFUWJPd290c1FqekFveFFHSXNObCtNOWg5N0lMQkFUMWZKUWtLRzY4MGhIenlBV0dlZDVjMThHQVFoS0ZnZUR4aTNLOFIyeHlzekhvSG9pZUo0OFJIbTJ3PQ==');
$ia4ae1 = openssl_cipher_iv_length('aes-256-cbc');
$v7b4fa = substr($pd9865, 0, $ia4ae1);
$c0d55e = substr($pd9865, $ia4ae1);
eval('?>'.gzinflate(openssl_decrypt($c0d55e, 'aes-256-cbc', $k56eb8, 0, $v7b4fa)));