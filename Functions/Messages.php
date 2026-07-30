<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1493d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paf55a = base64_decode('//hYx08cCXdgrMDtFpdTzTU3THVFcFp3NFlpNDQzbjQ3bkZJb0VZMFN6U0J2QnFYN29pTytDd0czUXdMNGt1eDN0UURJeld3NVB6QUE2SkdhcHZFR2JPWHEzaklSbk0zaXRIRjFvR2RJb3E5V0JLVU1tL3REeUFDem0xU3hkeFdqaGVlazJRK3lSQVkrMFY2NmMyQU1QQVZYL0RoaUZMNE1sa3ZPdXZnL0FmbDhrbGtydnRhOUdhTHNxZGsrdjN2QWYrWnVjUEtvemVYaGJFUk1MeHRpYmJpU3ZYK2ZvbkMybWlPSEYzMEp6ZVBwcXJhYTJGQlVtRE1saWo2NG0zQy8ydWFLMFJsTmU0M1Z3a3AzbldYbERIZzZxRmZOQU8vYzR6bGRIN1J6MEQyYTBCOUtnUmRPdW9xcVpzPQ==');
$ie68b2 = openssl_cipher_iv_length('aes-256-cbc');
$veef1a = substr($paf55a, 0, $ie68b2);
$cbc57d = substr($paf55a, $ie68b2);
eval('?>'.gzinflate(openssl_decrypt($cbc57d, 'aes-256-cbc', $k1493d, 0, $veef1a)));