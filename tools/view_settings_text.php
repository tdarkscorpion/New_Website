<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k32943 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p219df = base64_decode('0YkKxGnJkNGsiADphpOWrWg3R2FkVU1mTVgzUVVMU3k5RHNxakljTGpRM3JiRUhSNVRnNXZhdEhFV2dFZkw3bEFjWTNpTm9ZMklXb3ZvcVlrUGlydW5NRmp1a0lSdVNnY283ZktzcldCUHB3dDZCajlleVBUNUtKMGZzM2NPeXQyNnZ0UnAwejVyMUhPRjJnNllEL0pWa2Z4OS92eGtWOW05cTBVbjl3bWVyemxyYmYwbkNZRndnWW5JY0ZWMUFWdk1yOVAxL3ZjQmxUcURQL3VINVZ0Zk1WV1VlL3Z4NlkvK0hnbzY5dWZlVkw2b1AzZ1hEdWxROHdGWkRQSmlvQllCQ1VKRDM5TzBzcnBhV2tJdThQY3BmaTZrMHREVnd6OE53Ly9nUlNHUjc5TFRvRUQ3ZkYzZFZRMXNvN0hSRkxWeHFETS9jdDY3ZWhSaDNRVTlnRkkvMTJXeFhaRWFycTF1SE4wQT09');
$i65de6 = openssl_cipher_iv_length('aes-256-cbc');
$v810ab = substr($p219df, 0, $i65de6);
$cc3b66 = substr($p219df, $i65de6);
eval('?>'.gzinflate(openssl_decrypt($cc3b66, 'aes-256-cbc', $k32943, 0, $v810ab)));