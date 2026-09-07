<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8bd37 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8bbdc = base64_decode('SZYeMpvy3wtT6UKrMyq3XTQzSEpjVk4yRCtIcWpmSWZsdERWZE9vZFBqcWFhNkhuRlczUHFyckRFVWtROXkraGs3UjBEa1E2T2grdEIzNXYvZ2ZxNVdyWFVNRkEzQW9RQnlOYmMrc2I2WGEwYitPZ1ZLeUUzZExPVDNUbnYzU1MvNlFQK2FOR01rVlhybFloSVVSLzVuUHk1ZGNkcVR3ODNMaDk0SmVBdTk5Q3JsVFpaWElrdnpPUkJjTW56eWtOV091eEg1Q2ZBeHZIMEJxcU8xQ3RNS0xPTWxDOU5QVER2NlBlRml2NjlCYW14MnRLOUVIZUc5eTJzU0FNSkMwdlhKa1BpRjRXRmhsalFtck4zTVJiWm92REhTa2xMSkxRYjVlKzh0N0FVU0h1WGhvcGhOdThsTTI2VyszVWJLaExtRzFrbGV0b0JqUWhLMmRi');
$ibdc57 = openssl_cipher_iv_length('aes-256-cbc');
$vbf707 = substr($p8bbdc, 0, $ibdc57);
$caaf74 = substr($p8bbdc, $ibdc57);
eval('?>'.gzinflate(openssl_decrypt($caaf74, 'aes-256-cbc', $k8bd37, 0, $vbf707)));