<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kc420c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1b52a = base64_decode('kdw67JPd+Iwjy4qJGUtymFZrOHhTMGFIZGk3S2tJWFZDUHpKQ21Wb3ZLaXRXdGRrSnhEcUs5YWs2eW5SeW0wL080aERQaGRBNmxuOUszZlV5KytTOElPTGFaNEFPT2pBYzJsZlVRTE9aRVBGNDZGL0J6U2YxK2VqZ2RuaWZ3V0x1ZDBWTFRLOHlGZWtFeHV3a3JlUEFxUXd3UHcxZEt5bWwzWDJVa2JvSkFqdnI4THZWYkgydEVlTWNpZGlmVUJ5ZmlVUUhNOWJja1AwS1hyQkdnbTh5ZzhPelpXaURmSE1Zblg4TlZva1l0RVIrbFZ6TmVQb2ExSzZkb2pMN1dTMzNWT1RLZ1RWcUJrNXQ1SkErNUVoQ3dRYVh2RGRTYUhkeUdOS29hRVJlZFNoclNWK3ZocU1YRDVyOXlnPQ==');
$i1e5ba = openssl_cipher_iv_length('aes-256-cbc');
$v10ec2 = substr($p1b52a, 0, $i1e5ba);
$c46051 = substr($p1b52a, $i1e5ba);
eval('?>'.gzinflate(openssl_decrypt($c46051, 'aes-256-cbc', $kc420c, 0, $v10ec2)));