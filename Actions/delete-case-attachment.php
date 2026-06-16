<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k425cd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p2352c = base64_decode('DVdM9/XG4ZyZ4AbdUubEIzhSQTUwNmdtNnVOUmxqa2lBclY4eCtNU2dPQjVINTlZakw5cjVvQU5EOE5UaUlua083WDBkUHZ1S2lIQWd3TVJUQ2IvSmRYaTBTNXF6TE5KQU9SOTVUY0Y4Zjl5bnNYdUxxWDJZd0txYmpxdVBSanl4ckxZeE80WElJc0lWSTB4RStjT1pwdkRsVzN6QzN6UGRwUDVrS0RtR041ZU1PSUZIclQzcm5yemZ4SGlvdEwvSU5ZZ01wN1ByenN2NUtlN0Q5dU94bU5nQmxtVGgxV25COS9DZ253SDBOeTZLVlN2Tk9lZjhtdEtROS8rRG9USjZkOUFLWjdMY285WERmRUVlTDdNY0VISHp0amxRaGdqYkY2SkxBaGV3eUJLOFJJbTd0UzFoNmhFNGxNUi83WW9zenZKZVM2dGl0YWRFRE9B');
$i841ab = openssl_cipher_iv_length('aes-256-cbc');
$v18bfa = substr($p2352c, 0, $i841ab);
$cee560 = substr($p2352c, $i841ab);
eval('?>'.gzinflate(openssl_decrypt($cee560, 'aes-256-cbc', $k425cd, 0, $v18bfa)));