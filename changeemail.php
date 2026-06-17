<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb69c7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p842af = base64_decode('VcskwwUdjjXDopbUPhL16DZESk5PL1lJWjhIN3o5aGgvK3FXWndNSWVsbEFRZDF6ckRHQ2FWL3I0K0RsNTdtcjhDOWc1S3ZCM01qeU54ZXA0cExzeDQ5bkVKcHEzRHpiN3Y5RzNRRkxFNUdTQ2RsYVNDRi8waEJsMVo5TzVwdGN1bEYxZHp0K3FjeEZidmN5d1d6VHdjOGg2ZHh0bFZwQlhEdlpST0hsV1dRNGxJbklvMkdGaDRKOU5Ibk81TllsUml2OWVKR2xLTUVzdXF4ZVJJSlBZMUxmY1FPUUhsL2ltMXJVUVY5a1hveFVuWENGYXdpRU42QU5xdXNHbyt0L1BxRGxiY1F6VkVsb005c1VYSC90RW1VMjQ4aVhFTnFLVzVzbXR2THA3cmtxQnJaYkttZkhNVXJveVlTZmRhZTZzZjZUV3ZLa3JMRlNPYlQyOE5XZDE1bU1VRkZheVliR2t0aTV2Zz09');
$ifb189 = openssl_cipher_iv_length('aes-256-cbc');
$vb5966 = substr($p842af, 0, $ifb189);
$c642c2 = substr($p842af, $ifb189);
eval('?>'.gzinflate(openssl_decrypt($c642c2, 'aes-256-cbc', $kb69c7, 0, $vb5966)));