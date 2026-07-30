<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kff841 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p391d6 = base64_decode('gAZ336Qrhf9owtKPZInCJ0xmWDBJMU5LWkVUUTNWZ2RlUEs5enNqNDE0Mktzc21Sc3V2VWUyNy9yd1ZreHFEL1RlRm9wYnRJWk9HMnUycjR5MC9ndTd6bGdCYjlmeHBPTC9USHlVTi9BYi9hZGJTMVMzU29zbVFJbXZ0c1NuTjBOSVB6VWdHNlJQZ0ZlTm5iZzE2eGcxYXpKUXFjbFhUTjcrWlc0U2tvMzBENWZMOU1wbFZSM3oyRGZXenJldGYvc01scXlHYzY3ZTJlUktNYmRQdmpqM2wzdkdtdVpMN0xLRVZINTJLaXRwd3VFUWFDR0RMWXFpUitoNEx6U1BtaHVtTnB6azEvNHdFZnNPbS9Fa2hyQUxwc1NZSXNOMVMzbm9jTWxOOUpQMTJCeGVYRlRpTkhqT0Vrb2xVPQ==');
$i053ce = openssl_cipher_iv_length('aes-256-cbc');
$v5f2a2 = substr($p391d6, 0, $i053ce);
$c6b720 = substr($p391d6, $i053ce);
eval('?>'.gzinflate(openssl_decrypt($c6b720, 'aes-256-cbc', $kff841, 0, $v5f2a2)));