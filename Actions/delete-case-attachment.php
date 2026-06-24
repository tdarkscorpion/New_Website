<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbabbd = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p06309 = base64_decode('nU+HVKtY4Oad0XoKHEdaCG1KdCtvNFpQTVVqRnF5bUx1TEZDNGJYejY3UG9zd2dwWmxTdnhzQndIVFF6aFVPKzNkaDVvbkd5Uisvd1d0cy96VDJDL1hmZWI0YkpZUVZIK0NGSjlwcDhnQlZjUFdDeFZUb0dLZDg0NGZReDZUZ2xqaC9paUFoUGk4Ums4S3MxdDhiN1VwUldBRzFYMUZuTGJkUW9vdUpRdlNBcUZ5VTM5dFdUekFPZWNtR0FNKzFCQ3VhQlJtSWw0T0hUKzB6ZGtCSTB3Mk9YWjVISnNYbStjQ0wzaGNUKzRhZW13ZUx3WEZJRU4yTEIyS3lReWVkTncwS1lvWTE3VkVaY09haG9MZzhOQUNWaGZDN3RadUx2TnN2dWQySS9RRHdtT3pFbUE0Z1NndmRGdWRlZGVXaEtIZDZESXdEM0U0UjhxOFNk');
$ida414 = openssl_cipher_iv_length('aes-256-cbc');
$v48fda = substr($p06309, 0, $ida414);
$c3d12a = substr($p06309, $ida414);
eval('?>'.gzinflate(openssl_decrypt($c3d12a, 'aes-256-cbc', $kbabbd, 0, $v48fda)));