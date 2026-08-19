<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k61ff9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1031e = base64_decode('mKq9oa/UZe2+k6RPvq+fo3F5TVM1OUFmRW1nbyt0dzdQTytVMGJrNFZoY3FCbWltMU9Eb1FPVk5JQVNYWS9YYVRoSy81UXF5Q1VCK1FqWERwcXFNcW51c0MzS3ZFYXNLNjc3Mnl1NWFXQzlrWTAwZ3dNNld4c0hPME5Nano2clR3VjNzb2dpNDVKNXo4RTJVN0RSREhKVGhvdEpDM25wOUZDc1F2VzJEYVBBOERieDdGNlBNQ0xjYW1pbDVwUDRIbEo5ZTdqWUw3YXowamQvakxuRm9NNW5Wc3ZRd3BCWXROY2hvY1kvdWVBcWwrQmp5dndOcVFENjh6alRFbGh3UitaaVRMVVZKYUVORFpOeUE3c0tlbS8reXAvNy9rZkt2clN5NkUyUzV3WXdkUmtuNmEybERXVFNxWHcwPQ==');
$i09173 = openssl_cipher_iv_length('aes-256-cbc');
$va2290 = substr($p1031e, 0, $i09173);
$c29f88 = substr($p1031e, $i09173);
eval('?>'.gzinflate(openssl_decrypt($c29f88, 'aes-256-cbc', $k61ff9, 0, $va2290)));