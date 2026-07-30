<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd67f1 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p31d4e = base64_decode('LTycGcOnmKe/8zoRYzTj9k9Qc1lQL3pWbCtoTmRVeGFZTFRnczdGclRGd0pwSEt1SWVjTlluYTJnRGE1L0Y4N0sxbzJ4UU9JUlB2cEk0UkdYZ3hkdStkdjFZUldxczBjUGFwOXVVaDFYQyt1Z0dOMW5idnlSUjFSSDdweVlmN2VNZ3dSRUFsanBqZWJZU1RJb3pYTW1PR3JiMi9rZUU0bTRUMVQybkVjMm1IWExKUGF4OFhtMCtGK05DSGNtUkdmUTlkMnFTTU1VeXVxYkE1Vk85bS9lekZpUW5tR0NsTmRZWEJaRVNlaWZJdkFJSEYwaFdiQyt3R2dGTTIrSFJ0U0tNbTJ4U2Q3U0VuTE53c3paOHRubHRlMXJCdzJnK2VOYjBLUmRGTFQwSW1ueWQvTm5UYWEzdlFXbUdtZkF6NWQ5anIxdk0yRzdoMWU1UW4rSlFhQnlrWXc4cW85VmExY3pzNHQzdz09');
$i1fb45 = openssl_cipher_iv_length('aes-256-cbc');
$v26c8f = substr($p31d4e, 0, $i1fb45);
$c9b682 = substr($p31d4e, $i1fb45);
eval('?>'.gzinflate(openssl_decrypt($c9b682, 'aes-256-cbc', $kd67f1, 0, $v26c8f)));