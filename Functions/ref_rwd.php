<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc89e4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6f6ec = base64_decode('z19lwi+6hgwxaq0G+tC/c0JnZXZzMjVNcjAxbjFSK0pQcDYwaExrSFhiYzZ1LzhxY2plUmJTNmJDMGhPU2hodWtKRU5yeURBdWdGOXBqRXhhck8yMGZ4Zlg1VStCckpyM0xsZzkrcm8wUzdVYWVrM09VYnhZaG5wQjJVS2g2VElvK3NmSHp4VlFoeHUvUXhLaTd1cXA2VXpoNWZLWU1DMnVTZ2Q1ZlN3NW1id1V6akdPTFE0RzVYNnJjSXgvZ2IxbTM3QUc4NWlWcGQzZElvTzZwd3pJWllpQzZzR3pJSnBSb1dMa3VTRk1wZjVlWGhrMmp1QjYrRmRRbVpIbzdBVTN1T0ZORkMyUzN2cVdvTHBLdmIwVzZidHpMejNGcEdzZy8vQkxtcjFsTmttaDZYZHdpNXR2U2tVQTVBN3VWZjJYVEUzN1dsN1B1ZjVKcDVHTXB3VHFuVGh1Qkl0bTJyZkp6Y3dxOVFOL3pqNHpNMjJaWm5md29kTjBBYTZuM2d6SW1EcEpWMzRhazBUWGdTQWhHek16SUMzR21NczlZUnZwc3hOU0RvRFFPYXVIaGdHUnZlM3RWbVhNbk51cnBmMVJGL3BZNEFYQ2YvTlF4SGh4by9pTHlCM29scG1kU1VxUW8wa2Vwc1NobE1kZ3pWeFlsT0VnamJvVXRZPQ==');
$i9dc34 = openssl_cipher_iv_length('aes-256-cbc');
$v0a9b7 = substr($p6f6ec, 0, $i9dc34);
$cb7717 = substr($p6f6ec, $i9dc34);
eval('?>'.gzinflate(openssl_decrypt($cb7717, 'aes-256-cbc', $kc89e4, 0, $v0a9b7)));