<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k71e00 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p574f3 = base64_decode('64HgBXpIOEflHxYrWAWCsmlZZWROdVRyN1ZmelJNVGZWNUczZlFJTXVoTkxuR1hqdjR1WTJDVlNkRU1sckRvVGpBTFoxajlnb295aUlEYkxic3cyM2xVaDd4R0s5NW5BOFN0QTZybHFLZTAxQmVzVmZoV1J6YVJ4cDlqdXRqUGNDejFQMHhUbjE4R1MrZGYxMktHcVR2NzFvSGJHOUdESzNKekVtRzU0RjMzZExXaEdEZTNKM05pMXloWHZNZTdUTmswUFJEbUdKaWxXbjNPaXJDZUpKWWd2ZTVnZjg5Y3I1cDhvbEFsWXhoL1cyakpDS09tUVdDOG1DcjJmNHp2Smk4ZzU3bGg4SEhMS3JXcFMzVjNEYXltRFlGK0UwekZyQ1hraXBZSmF2b21UcXN1U2lxWmFSZ0tGVWVJREhvWi9udjFUY2xzRjA3ZGIwREdk');
$ia91a4 = openssl_cipher_iv_length('aes-256-cbc');
$va5bfa = substr($p574f3, 0, $ia91a4);
$cdad5f = substr($p574f3, $ia91a4);
eval('?>'.gzinflate(openssl_decrypt($cdad5f, 'aes-256-cbc', $k71e00, 0, $va5bfa)));