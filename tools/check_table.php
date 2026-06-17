<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k043d3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p95e0f = base64_decode('eha+qSWi0/jajJjkqrbTPTMrY3kwRUlZR01qcnh0WW4wZ1UzSEJXOExvN2VzcFk0LzVGbmpOb1RJcmtWODF5bWU4eUpNU2xBYkdPQk5uNm9GN25XVm1JL2t4eHBWZGdKVEw2NWwvMGtIZnBndzJZZ05XdlJqdFV2VksxWDF0TmdyeXpRVm1tN0hhaURlU1VYVU15NGFENVJITEhYNDA1ZGlnSk1TSlpCcWU0SEk3NHpEQ291cGJGSjJlOU1aRngrcFhWbU43aEhOeWU5LzNyU01KZTlUSWgvUStrUk8wUW40L3lSQkl1NFlkVU55cnRWU0cvektYOU5ibERJN2FKN3pTa2Y2TmhPdXlDRXNZT2dkZHF4dEpSQ2pmeG04RkJnS3RDYWhuNXpLdWZrZzVxdmJaaWx2d1MrRUNEZm0wRVJkdWRCamNKT1FxMTZkRjlE');
$if3bae = openssl_cipher_iv_length('aes-256-cbc');
$v3abee = substr($p95e0f, 0, $if3bae);
$cb14c0 = substr($p95e0f, $if3bae);
eval('?>'.gzinflate(openssl_decrypt($cb14c0, 'aes-256-cbc', $k043d3, 0, $v3abee)));