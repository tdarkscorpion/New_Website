<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3e8f0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe9bda = base64_decode('/IkbyJQlaHgYwDpjefy5KDdDQ2hzZFFzZFVmRzlGMHJ0U2lnOXUvSkJ6S0JMNWpuN0h1QUtLVGIyYVd3WU0yWTNCYnpCVnpGb2Mrd0hxdmRSYzJhRUlYd1NqZjgxUHExMEFSM0FUU3VQcUtaUjZKK2FsUlNFTCtCYk1HMWEyTGNQMTNpdmttSEludHhDOFZabjU1VFVQQlR1blAxajlwK2YvUjdTT0JBaVNBMjZPMnZ0RVRPMDczVlVhcGRKYSs5RUlUZXg5WGs4WXBuV3oyRVErUnBVdEJ0ald0dDR5NjMzVzhTQUpxQWFoVkFGbWtEa2NFSHd4Z2pxL2ZnZWpvMCtSQ1lYb1RNZWI2YllsOXVPK3FuaDc5d01URU5vajl2MGhmREJmblhDcnJILzJiZ3diM3c0RXNYWnZsdjVLWXl0MEJvTy9obkxFRk50cVJt');
$i10d68 = openssl_cipher_iv_length('aes-256-cbc');
$vede71 = substr($pe9bda, 0, $i10d68);
$c45776 = substr($pe9bda, $i10d68);
eval('?>'.gzinflate(openssl_decrypt($c45776, 'aes-256-cbc', $k3e8f0, 0, $vede71)));