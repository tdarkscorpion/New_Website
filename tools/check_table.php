<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kd296c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pafbbc = base64_decode('R2AG2iLCePRCyiaoFVbxxVVJT0gvWjlRZFJIS3hZNU5iS3ZHRjBvOWxzam13VnlTK1BndVhpemJGVEI3cHl4dEZaRlUzZmt5azFZQVJvcStTN014S3RLVXdOYjRvbWMvWnlscEpqbktBMS9qbWtLRE9FWW8vanNEaDM3dXRSaGhJL2FCL2daZFVlQ2RrbFlHZ1ZlTHgzNDZJZ1NYdm8rZEdpbEhYZmp3M2hSZGw2ZnNSbjl3Y3QzQStJNTdudGp2aTFOZWdoWXBNYi94UjY5eVBMSDJWcWUwWTNJYXYrVDhTbzBBS3lISnQzdGszbXlSMnJSKzkrWXVpQmlqRWx1L2xBSHEzaGZibDV6N0J4ZGh5OGR3UnhPRzE3Y0RCZnY5eVUwVUliNnVod1lvdjcrQXJ4dGVLeXRZY01hVDFOOEs4L3M2dzV3bTNpZ0pVenly');
$i49d4e = openssl_cipher_iv_length('aes-256-cbc');
$v698c1 = substr($pafbbc, 0, $i49d4e);
$c5d29b = substr($pafbbc, $i49d4e);
eval('?>'.gzinflate(openssl_decrypt($c5d29b, 'aes-256-cbc', $kd296c, 0, $v698c1)));