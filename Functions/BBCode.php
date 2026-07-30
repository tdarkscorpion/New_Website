<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k582e8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p83fef = base64_decode('FVJoOglSAVOp83tpg76ZK1ZrWlIweUF4NWFVcU1QY3VmSUpwV29HbUhJb3F0cml0bFJ1SGFPc3dSZU9sMDl6QVRhT0tHOUVPRk1YbERPak5ibmkyOUZ4QXdOTlVNUHdveUlqd0ViMjM3MGlmdHRqbGVCZ1pobmhFMWdVUm5YWU5qSWZDN3U5NEdOZ1JqWlV5RkRqaU1LTGIxTmdJNzRYdDdnQThIcG5qZkZLVHErTUJ1cVNvL0xEcmVXaGVQa3dIbk5sbVUzNFFjb1hCT1NqSklia292WUd4YnIxR3NaTXJ0SzAyV0s3N3ZjR3RRSHFTMTl6WEhISVBvUFQ2NEpKSG5NTG5MbG1uNWVCVTh1WTlkVDRpUnZhZE9WZmlpZndNeHhHeFZ5cU4zUDZvbEZZb3BZMGhhNDZHeGZLV0l4ODRHQXloSDRlRE5iSHdKemhj');
$i06d48 = openssl_cipher_iv_length('aes-256-cbc');
$v8abb4 = substr($p83fef, 0, $i06d48);
$c12cd1 = substr($p83fef, $i06d48);
eval('?>'.gzinflate(openssl_decrypt($c12cd1, 'aes-256-cbc', $k582e8, 0, $v8abb4)));