<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdbb48 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pda674 = base64_decode('JCCHG/37fJ3I5kcaKQc/0jhnaGJzWmI5dTEyQndQSWlBNVNtWVB0dWJDazI3dzhsZmRmelk1YXFvTi9ueWxhNCtPa1VpeTJtRko3WFpxMVYxbFBJTkY2ZFRhSUR1VlVXeTNHNEpCVmkyU1JvbzJGTWhVNjBMUXM5USt1NStDQ3czb2gvZ3ErYlRBcG5SYXJGWHByekpqOUc4VzVqNGR4NnJ0bXdETFMzbzFicGIwelcyRVpvN3BqMWJkdW8wZTlKOE5wWWJLNjMvUlZhTjRCY1pNcjVJcFRuYUdXaHUxZU1waGpHVFZ6NTVobEVYOVZvRWtibHkrOFU3QlBPMjMvaTFJVEVyNi91K0VxdnM3VFJyLysyMWxwRUtMZU1qbzZlaGFNd2IzRk5UTUI5SFA0alBkRUJsTVFsamdHNVlPdTNVL2piN2lFTmRPQkMrd1MxaVI1NGVVWnc4MjNkVDlnWmtPVXN5dHdNQWZud0pmb1hGQ1ozaE9Tc2hGWnk4RVVBTG9lc2pQb3lObHhYbGlPcnBpSkhxZkhDYU5YNnFZRWc1Q2JhNEFpZUVUek5DMk1ob2VqOVFPTmFTbkVkMWY0czFRSk5xK2tWdnRyN1VUNlptS0lvSzB5VHl4cXRSM3NKWGF2cVQzK0RpczlqVi9ZRFhQTU56WmVOS0xvPQ==');
$id3bb4 = openssl_cipher_iv_length('aes-256-cbc');
$vbf12a = substr($pda674, 0, $id3bb4);
$cfe266 = substr($pda674, $id3bb4);
eval('?>'.gzinflate(openssl_decrypt($cfe266, 'aes-256-cbc', $kdbb48, 0, $vbf12a)));