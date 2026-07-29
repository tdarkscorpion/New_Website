<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf57e0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfd7e9 = base64_decode('usOOEG2jfOCEFlSP4kH1aUpVakdydTl3YkdMZnFqeWxNMHBHY0txV0FJcXhyOWRKZUtzcXdYUUVidFNQQUUxUkJZRVNBeHdpTUkvZTBQd0lKSDFCUnN2ZE9FUTFwRks1MGcrd3pPdWJoYXNra2FBNHNpbVJXQU9SRmxUNXhiOERpcFhiSHAzSjd1TldTQk1VTS83R1dETGlMUnkzQk1uTGV0S3hyQ3Y3YlVLdEIvU0cvbXVLU2JiKzhWb1JzdDJ0dStFVkRsdkI3YWFOdUZKb2YySVhnbmNXRkpkdVdjY3JGTjdONXhPc0ZsT3laN3VjQVJFQ1oxTFIwZCtFc2tpaGNBWTRId3hYdUlPMU1tRlg=');
$ie2ad6 = openssl_cipher_iv_length('aes-256-cbc');
$v37e34 = substr($pfd7e9, 0, $ie2ad6);
$c89c7e = substr($pfd7e9, $ie2ad6);
eval('?>'.gzinflate(openssl_decrypt($c89c7e, 'aes-256-cbc', $kf57e0, 0, $v37e34)));