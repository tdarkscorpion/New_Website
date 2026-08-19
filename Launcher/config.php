<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf1356 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0f0e9 = base64_decode('UIRp953PuIxc93fwD9pK0zZlY21rUzBXMnFtUnlaSi9Yek1yY3pibnRQY3dZcDBjTVZ2cXZDOUFnK2tnY3FjYmZscjVkOFJWd2xmUVVkc3ZkU0NobEU1TWFPQyswTDNnN2dPT2xtQnR4RWYwajFDSHRIc0t4TW1vYjRmMWFnMWlHSUc2UTYwMzdCKzBMdzB3OXRwUDB5Wmw4bXg3WEFGUWhZUnZEanhiUVdDT09IcjEwUkVTZjc5a0RTUklHQVo0ZHhLMjh5VTJuNTJUMzl0ZTI2QzJ1TXFrVHI1ZHk4Nk94dnlUL3M1VjdNaE9iWXkzT0hSc09LSkdBbGRJTGFrUkpMUmRTTDBleG5QM0kxbjBkWW5JWTdNZTJqZmRhREtJZkRlSjRVT2dHQVlhV0xENzlQb2l0TTVTQVFJPQ==');
$i9548f = openssl_cipher_iv_length('aes-256-cbc');
$v1e866 = substr($p0f0e9, 0, $i9548f);
$cf3bf8 = substr($p0f0e9, $i9548f);
eval('?>'.gzinflate(openssl_decrypt($cf3bf8, 'aes-256-cbc', $kf1356, 0, $v1e866)));