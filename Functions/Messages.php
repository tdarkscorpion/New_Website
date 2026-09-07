<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k7f93c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7cae4 = base64_decode('1Z9SjZF5UzHtiTe3TrjR2TFBeCtJSFpkOUowQlpHcGJmTUpoTVlhczZneDE5UURYTnRCMDI0VGJVcllZSFJ0dUhNd1VMWjBQY09rZVRvZ1ZreVJuV21hMk5nYURXTlZWdEd2RVJTRzArTTJidkV4OVlJMkhkS3c0bHBxSzNKRDBrYzhaZWc5Vk9NaGs4UEpLRzI3RWZYYTF5VVVTOStNWTZHMkVJUkU4UTE4cjJZM041T01xdk05ZjhFMUtsRGd0Zmlzam4wWjhXR1hscmMwaGYwV0s1QVVTWmNEL1k2Wmwxa0VuWCt1dDh3WVMvSi8waUhYSndwR1M2anpSOXB1cWV2QkErcWZTekN6MlhqQzVYcFlHYXdTT0xKSldMU1VqcmhKSEhiLzNMcUE4R3ZTYzVNMGdXTUVqTUdzPQ==');
$i1c49e = openssl_cipher_iv_length('aes-256-cbc');
$v10e35 = substr($p7cae4, 0, $i1c49e);
$cc1997 = substr($p7cae4, $i1c49e);
eval('?>'.gzinflate(openssl_decrypt($cc1997, 'aes-256-cbc', $k7f93c, 0, $v10e35)));