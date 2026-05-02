<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k0af20 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf1dd5 = base64_decode('CLr61acAsoRWPxd/yTaO/WlDQUNnUzczQWczeWlFTTdBb0Z5OVJuMS9PZm1keitwYUxUNTlpVFRjbzcwdDhqWkhSWmVnYVNKY0Q3QjRnbGNHWkZQWXR2aE90M1pIcTJwSEIxVmNYRTJVMDBUV2FSSGRwRlBNY1lwVFJJTkxQRkRMQklqZERqdXRnMEpGd0h6SDVpTnAxVVkrZHJrVnUwSUtWMEVnM09McDl5ZWFPaVl1VEhueXlOZHVLTVh0dVB3RDdYL2pxU2g5VllXWU5UYkYyU0t1aCtMV0E4Tjl5NmpOeWY4WlhQQlh4dll5TkVENW8rQUpnV0pyZnFQcFNWVFFCYk16eWl3TzFCRVZZNFRsaG84aCtCOU9hRlRkNU5xejZ6QXFQRzV6cUpyNys1NXNSb2lYemdWem1xR3U3SlZtUitzYThHZGNHQjlyL294');
$i53a85 = openssl_cipher_iv_length('aes-256-cbc');
$v5f3b7 = substr($pf1dd5, 0, $i53a85);
$c2075d = substr($pf1dd5, $i53a85);
eval('?>'.gzinflate(openssl_decrypt($c2075d, 'aes-256-cbc', $k0af20, 0, $v5f3b7)));