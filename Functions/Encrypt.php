<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5b6f3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p941d9 = base64_decode('r6TqLle0NoiZkq6cqrOl72FuMFJWWDdXYWJqMkU4RlRXK3d6TCtNYUxtQkVLMXZZRDRIbnAvOERvWGFlMCtjTkZBWTBDekxwbUVwTEFZUm1mWUZ2NGtGZmxlSGd6czZhOElhV2FRTGxWbnJEQkN6N1JqRDlXTkc5MEczM2lSVVFudW5hejlxaE85aWU4RG50QVB4dGZ1TWxHa3U5N1djMVZGNGtydTZUTGhiU1Y0OWhEdWk1WFdqbUZjVFY2WGlxbTdXK2JQdFFiMnk3S3dkdmV5SlAvUktCWG1zWDdiNERPOEphUkdLYXZIRXlMeVdYcG5wT0FnQy85b1BIQkpoVlJOaXpvVGtYa1h6TmJLeEpGc0wvbExzaTI5WGNrMERyOFdjQ0lrOWVKMXdvRDdSWEQ4V2M4azFFSlp0c3FrV3gwRXd4WTNzT2tqNzVXV0pmaFJEL0xldy9jb2tOMmcxeHJma2xlN0NXbFQxdjMxTXFZS3NUSGUycEk1REJsaWNJY2h5TklDTmI4SVdYNVMwakYxL2NsYzhZd0s3MkhwTUF5TnBYVnhPeHlLTlJQWTFhYUNhdnc1T3hsb2g5cXcxeXJaRDB2MFVhZEp4em1EYjc=');
$if4afd = openssl_cipher_iv_length('aes-256-cbc');
$vd99d0 = substr($p941d9, 0, $if4afd);
$c39c2a = substr($p941d9, $if4afd);
eval('?>'.gzinflate(openssl_decrypt($c39c2a, 'aes-256-cbc', $k5b6f3, 0, $vd99d0)));