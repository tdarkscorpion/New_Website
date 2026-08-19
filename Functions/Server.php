<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8c4f8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9beb5 = base64_decode('30fm7MAhJSRFu7l3QitfZXNya1JWWW9QeCtCdlNlT0RHNENFaW96cGhoYTNxVjlkTTR3Y1dXQS83Y1ViNUpZSzF5MEZYbllxaUpnUmZTSWZ6ektuR1J0NlhweGtjOVZBdWxSQjdlQldxVmF2YVN5NlNPWXFIcGMxV1VWdFZzUG1QWkx4cHVSb2lFcW9KOXh5ckFxUmdPeWhId3BwS1RNa29nbHo0NUlyd3F3bzQzcXZKUE44YWFVWWdpdDIyMng5c0hPd0R4L0JadnlEVVMzcTFyc1NYbWpNUTJQdzMwSlE0aWl4TFpQU0diMDRaYS80bGxSVW1IWEJ6QkJpQUpkbVlGZVNxcFc1dVFBM0Z2dXVETFo1SzliNlpzd2owZ0ZHcExqRGs0RUFoTHZzZDA5MlZjTUhMZnlLbXVvPQ==');
$i77a13 = openssl_cipher_iv_length('aes-256-cbc');
$vefa8f = substr($p9beb5, 0, $i77a13);
$c64a3b = substr($p9beb5, $i77a13);
eval('?>'.gzinflate(openssl_decrypt($c64a3b, 'aes-256-cbc', $k8c4f8, 0, $vefa8f)));