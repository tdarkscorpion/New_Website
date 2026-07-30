<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k4ba6e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8c844 = base64_decode('yOwXxkHT0wXR7biKIqCBIXVHclE4eUoxZ1UyM3ZTMUg0eU82UnNpMW1WS0k0SmdYckFxRGV6d1U3TVNkVGRlaDNFNzd3SnlseWlwcXMwVElDc2NjWjJrVU5sRC8wZ0hjT3pXWDVHUVUwYVZacUNqSGVmOHc2ZHJibmdKSWltMktBckVjS2JJaElsL1Y4b1JxMVZRQ09mTlZxcmdMK0RZRjhxRHE3enh2N0F4SHhKVVIxcFlaTEw2cmhZOVhSc1B6L3UxQzNsZUEyajJOTE12eHpZbUY2WXJVSHo2Z2laQlV1YXFPbjI5MkxUUTIwbGI1MGYyMkMrMGx4TTZOclVPTHBPQXpwN2FiTmxvSk1YZUpEVGIvMG1hMm8zc1p4NldUdnUzOXAvVFlSQk8wK2ZXRmkrUVk0dGFnOFRDWXA4UTY0cWxXTDMyVm1FQjdTR1VQ');
$i27cf1 = openssl_cipher_iv_length('aes-256-cbc');
$vddcc6 = substr($p8c844, 0, $i27cf1);
$cf98e0 = substr($p8c844, $i27cf1);
eval('?>'.gzinflate(openssl_decrypt($cf98e0, 'aes-256-cbc', $k4ba6e, 0, $vddcc6)));