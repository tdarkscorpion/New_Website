<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kef9c4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8f41e = base64_decode('vGQq8fK0fDdt7igBh9SAjjNxUzVEUFlQTUhWNi9KcXErbTBFUG80Rm92Q3c2VDRHVlRtbGFYY2hHOFcxcVh6MTdSd2hmdXFuNzJnMk1mMXhvSjFQZW1MR3E3b3lKWkdJWlRucisvdk1GbDZJbzlkY1lyZ0xaZEc5YTFBMWpPWEFGMjJDOEY1dmFEdEVUU3VsQWxaVndSZ1lXSnVQN29FQkxhUTFIcmtpakZkRkVGZXp4VElsb3YxaHNPc2x1d0RvOTRLeHdmQW0yQUd0eUdEOEptZDNOOGlCNGsvMVVneXlhVnBYTmpBU2tienRLcFV0QkJad1BnY0UzeXYyeDlpc0FKSGlzQkdiSVJvQ0hieUJ0RE9yTW9rclNiVUF0dzFJdk1tUVcxNXlaemY1RGVsNThoOC9hRmJNZjBWSC9OckFneGRhZ29EdU1FQ014dTZnVkdxeUR2WFZYVE03ZENkaWxhQ0xma2MxQURHeDM5LzN3RUQ2ZGhqdnpma3lzT3BwM0lNd3Y1Z0NUWlUveWFyVkkwVk5PaDlFVDUrTWx4Y0NSZUQyVmlBeFRubkMxeDRrQ0ZTZ1p6KzZkOTdTLzNHVktjV3BiRUxqaG0ycmZVMnA=');
$i966a7 = openssl_cipher_iv_length('aes-256-cbc');
$v4a82a = substr($p8f41e, 0, $i966a7);
$cafaa3 = substr($p8f41e, $i966a7);
eval('?>'.gzinflate(openssl_decrypt($cafaa3, 'aes-256-cbc', $kef9c4, 0, $v4a82a)));