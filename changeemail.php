<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka09bd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paeb31 = base64_decode('uePLru3DaPAOrsSekJ55ImJSeUZ2V3hZVHFPVkhBckRoaUdESzNvV3VwS3Vsck5TRjVXWXhvMStpd3hhQ29wUEo5N1N0cGhXdG92TXF3MXBZTU5PVWQ0bmFYVjdBNE8vem1MdlAvT2c2QmVSYnE0Z0ZwUGxkSEtOOGZqeXNuelMzQjlHMXVEcW5XK0lUOHVNOVlQY3BjRnZKWFVvWWd0VlEwUjVBOHk4ZVF0eVRyNjROejhMVXIydUpaY0xuQklXbG5RbmQzemF1MjZ6WkxEbnZKRDlpVVhtMDF0QzJPV09tV1Y4aVhyQitTMmtIdE53b2ZJcWRNN0hDQ0I4djZEMXYwK09tdzVzeUtRb3ltUTcvN1huTlI0ajdZek83dEV6bU9kb0xlVkhVL0p5c1lJRWNHSUJLWDZhMFF5dWtKb1pOT0JqbWhuN2RJR21yYTB0MDN1ZTU2VDVwRzJURzJrdDVKTmdjZz09');
$ic7deb = openssl_cipher_iv_length('aes-256-cbc');
$v10629 = substr($paeb31, 0, $ic7deb);
$c13fdb = substr($paeb31, $ic7deb);
eval('?>'.gzinflate(openssl_decrypt($c13fdb, 'aes-256-cbc', $ka09bd, 0, $v10629)));