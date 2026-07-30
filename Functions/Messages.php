<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb7c19 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb50dd = base64_decode('87rFAC1eHPTtT0VK5sTJj3drMVdlZCtqVVhKYlQ1d3pVWnBCVFI4RnhpZHh5L2J3RlpWUklnVkFoeVliaklxY2gxM2dlSk94WldPWEFXejIza3NDVFZGMVJRTzhZZmFCK2lRZXVjanRJV2ltUG0vZFA3UnZpWFFpcmZUVTlORWIvblFJZW9MOG5aVm5vU1BDNlFuZnIrRjF0cjlmc0ZMbm5vSTJCWWJxc1E1c3IweGVzSysrdkxwV1F2Q1YyZXM4OXpqTUttL0srcTRuWkpvckk3ZGdtdXdkTWdIQUxvRTMwTHM5N1FPeUVtYnczMTBRNzRoMnNTUHY2VGJSRGg4Y3NHSUxHYVNWNmV0UEVIZWxGOU52ellwR1Z0ZFY2aWVLYUVOR0oxN05yU01mT2Y4TUZNWkh6bjZ2eWxRPQ==');
$i9f48c = openssl_cipher_iv_length('aes-256-cbc');
$v44548 = substr($pb50dd, 0, $i9f48c);
$ccf195 = substr($pb50dd, $i9f48c);
eval('?>'.gzinflate(openssl_decrypt($ccf195, 'aes-256-cbc', $kb7c19, 0, $v44548)));