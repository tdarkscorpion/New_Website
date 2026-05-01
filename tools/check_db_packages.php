<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke8fe3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc171c = base64_decode('zue2eBijYMP3Fw3CUudubWhvU2NKWnZheVhiWXZ4d29mek5iTGN6bzBzVGczVStpQ3lPN3hITXdHWnZybWwzeUVSOGxKTnQva2JDZU5PK2VicmxySGI4SXR0eWF1cVNLRlNtSnphYitackJiWmljUTE3VTVLM2FUYmNRTitJRXU2MEE5dkdXa1pKQk1LeklTeG9yeW9EUUhsV3NtNmtTVUlMUWFIbU9zVFZ5b1FVR21JMjhhWjFtZVQvajJmMGJzS0VSN3BZZVZycmtjOEhVZDdwV3F6bnYzUnBLZWRvK0RqRVViRHc9PQ==');
$i8a543 = openssl_cipher_iv_length('aes-256-cbc');
$v5306c = substr($pc171c, 0, $i8a543);
$c131d5 = substr($pc171c, $i8a543);
eval('?>'.gzinflate(openssl_decrypt($c131d5, 'aes-256-cbc', $ke8fe3, 0, $v5306c)));