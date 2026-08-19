<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k14ddb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb2256 = base64_decode('muLtwtIXBcNCVZLwrkMyaVZiWElYaFk5SUpUNlJDVWp0bXZ2dGdnTzd1dGFNcWo1cWJVdERrMWNVRWNHVGVsZ1NwVmJVdGpsWWRhSUtBaytwaFJONGhQV1l3TmhaUzNWTU9pSWp5bHpQemdXNzF3azdoaGhmZXdUOHBaU2dwOXVjZ1MvRmMyUWw2SlFNZEtQYXc3V0l6enM3cUJJdC82VVpiNkNFeE1OMTZGVU5RUElqck5kUWV6V3BNcUN6bVJQaFFjeWYrK0hYSWVMNzl2U1d1VEdGdTRyZHFTUng4TTEyS05IOVVlQXF5b3lZeGhvU29mUnZ1ZEVyQWJYTHpGbm5SQ2V2eWhaV1J6L2EwZXpsMFNMaW5kK3hac2RTNnBtSmxiV2R0eUhFRkV3bzFBaDRSYXB5eXlzeGp4SG9pV1pqQUFFZ041alZlVDhMTlY1');
$icbd60 = openssl_cipher_iv_length('aes-256-cbc');
$v884e2 = substr($pb2256, 0, $icbd60);
$c6feeb = substr($pb2256, $icbd60);
eval('?>'.gzinflate(openssl_decrypt($c6feeb, 'aes-256-cbc', $k14ddb, 0, $v884e2)));