<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k14e06 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pfd55a = base64_decode('r0NEZaQwhy/qXKAOCDI4PUdHR2xiNzNNYk1wUDd5NDdnamIvd1owUGJSWjVsT0wyc3BPazVHbkdSelBCS09tL015SmJ3cGhGU0JwUUd0eWFxY0ZtQjlQTU9veTJwTDAxSVBlTmh3TjQxMFVjVU1sb1E4bDRuQlQ3OCtxL0RLQmdvWGFwb21tMGtCZnpqRlFTTWpSaXBrdDNUYTM1QUhrWDM5Q2VrYktqTTRXNE5jZmhraEhBQTZYS3RxcHdjL2pHOThkMGJhenhHcFIvaXJqT2xGeFlKWlNZYndQVnp0c1lVejBQL3Z2VENHL05ZVzY4a3dFNUxvKzNTVG9jWnBOejdSb01HdHVyWTVkV3dTV3AzL3djK0xoODlsTHQvUU45dkp6NFVMSUE1ZU10VmJhWU9WTVhKZVNVMmx4STJBOUxrNlpLemNKTWdpb280Y1hKUVpsZzM1bjMyaEhMS1R3bzZrYlBsZz09');
$i18179 = openssl_cipher_iv_length('aes-256-cbc');
$vc000a = substr($pfd55a, 0, $i18179);
$cd4ef2 = substr($pfd55a, $i18179);
eval('?>'.gzinflate(openssl_decrypt($cd4ef2, 'aes-256-cbc', $k14e06, 0, $vc000a)));