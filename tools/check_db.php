<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$keebfd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2d882 = base64_decode('f5wnU4jldnuCAkJj16CZ7lAxcFhITkk2MU53c1VpV1dtWXBjYWJDTDVWbUJNSjZMb1NJMUhnMWtzVUYrbHZYQlhnU2dmcEVLTjdnbER0QnhkUkJ6WHZjWEpaQmd3MEo4L25ZMGZZRHF6UmRETUhIUlF1TWRWMDVSc2hyVmM5ak80SStZL09VU3hLK0Y2bjEySlBtNnIzTmZUTHhqNzV2LzY1NlQxcW8za0pIWGhjamQ0TTkyT1BNWWhaOEV4OC9VMVFXblNwOUx4elZwRFY3TmQvM0RFY1pCSUNZU0t4S3JpbFRsNVlOZ1RCNHdrK3JMQVZ2ZlVSVEdRZk4wNmFFYUxTbGc0T0lWL1ZwM0l0cWozODlBa29BU20xdm5OUStValVpckMyeGh0UFl0Y1cvSmxHTGh0cmtTS0VyV0lESXB5c2hLOFVmdHY4SldPeUhC');
$i70ac3 = openssl_cipher_iv_length('aes-256-cbc');
$v1ff03 = substr($p2d882, 0, $i70ac3);
$cb3ee7 = substr($p2d882, $i70ac3);
eval('?>'.gzinflate(openssl_decrypt($cb3ee7, 'aes-256-cbc', $keebfd, 0, $v1ff03)));