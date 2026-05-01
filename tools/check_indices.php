<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcb12c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p3dcce = base64_decode('wj6qtXRAmMElcUYzXEEVKnBsNW1xV3RzVVNnWEFCcytJazU1YzR3QjRKd3lWNFlCVm5SNHZaK2pjdThCMHRTRG1YSW9KRXRtQnhvMWl6UkhyTDBGNXRNYzRkeGxqUEtEOG9yYis0WTRRTXFHUkh0UVRRdmNjNzU4R2NzQ2F5SlNYeVZuNjhpT3R2dnQxcEY3SnJRRFEvUjdiRVZuNzJYUm5KNytxZ29oSHUyYjBxRE5PT3pZOGVRK0pvdHcrREE3NjZZbEVRRTJSdUIwbUhkOWFBRFRWbE5LRVdHOUhjVmhFcnRuUHdsbE9vWDQwZWZHVm8rbUxPWkdNWEJCVUc3MU9sdnJoS0RkRDZvcFhaRjU=');
$i36cf0 = openssl_cipher_iv_length('aes-256-cbc');
$v24093 = substr($p3dcce, 0, $i36cf0);
$cb9c17 = substr($p3dcce, $i36cf0);
eval('?>'.gzinflate(openssl_decrypt($cb9c17, 'aes-256-cbc', $kcb12c, 0, $v24093)));