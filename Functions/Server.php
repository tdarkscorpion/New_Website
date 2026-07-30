<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k9c8cc = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p826ff = base64_decode('p7zvhKWf9pfL5IB/ls/9ZjZhSThnS1FBTk00SStTazBIOU4ySEk1ZmRocmFmYkEzTTM3U2V2MjBtUGlMOW54NTdmb1VJZlpkVWZkc1RtK0xadWNJQ29JQXY3MnVydkdzcVNDbk5FVitYSEVZTUJPN1RvczIzZWRDRVd5T3hJZFhXdjA1WmdvRE1tL0NYWlEzR3MrSzRKSUJZNFVLK2NnRStRZUxKSFZwRVNXZFBTRHZkRUxhR1JhRE1GeCtWNlJVTUI3OFhjV1EzT0l5SWk2TjRvU2VpVmU2eUpEcEZQUXNJaTRTQ3VsTTFVME9lR0R4cUk2MUxTOFNadkJQQWltK0Jyb2VreVQ1NStGd1lvQjBkenhpWnRTdloxdUl6Rzd6ZHFwQllUT3BXS3NpV1hKdm5iMDZtZ3RlbFFjPQ==');
$ia9dcf = openssl_cipher_iv_length('aes-256-cbc');
$v7dd01 = substr($p826ff, 0, $ia9dcf);
$c7c894 = substr($p826ff, $ia9dcf);
eval('?>'.gzinflate(openssl_decrypt($c7c894, 'aes-256-cbc', $k9c8cc, 0, $v7dd01)));