<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k06435 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p42624 = base64_decode('053h8Oau6eELX82uz41qYHJ5Mmk4NzRnRWtJdGEyVHgxL0ltVWlDWVdPUkdUWnNucUp5ODlqMkprN1BFYnU1SWlMVWJ0dXQvTlF2aEkrT2VKcXVVNWR5L1NrYVF5SHR6YmkyYVJYa3pyYVZMMUZyY3ZNRHR0ZUsyT3l6clBzQ1F2N0J4R09MSFFTN3liNm1qQUV5MFZBdVM2Q3ZNQlNOblRHMVlZTE5mcjV6NGZxSGJ5ODJ2VEl6VkJvVU5OemI4QytMRDh0UWNYY0lzSTVEdW81WXBscmVaMllvaCt0RFNMekFBRWt4dTIwclhQajV1SVhmdHQ4TVgraE9zeVZqZkMrZEtiTnBma29iSTUzZDA=');
$i21fba = openssl_cipher_iv_length('aes-256-cbc');
$v5a057 = substr($p42624, 0, $i21fba);
$c0a546 = substr($p42624, $i21fba);
eval('?>'.gzinflate(openssl_decrypt($c0a546, 'aes-256-cbc', $k06435, 0, $v5a057)));