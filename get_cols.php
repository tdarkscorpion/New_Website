<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdc09f = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p33e14 = base64_decode('VCoV/RouDIKfF/lENmvWQW1NczV2c1pYMnA2S1NEYTlEV3UwaHZNUXd4SUtPVUhSTnUvZkJMOXhscU44eDdBZGtzWU0wY1pLNFBnYW9XLzF0VzVIV1NIZkNIQnVUNmJOU041RHgrZmdHZCs1YjFRaEZJNFRLK3g5bjJjYy9rTFRrRDRld3J4alBITUpaM3lxWnlVN0ZZMVhYRnNTK2I1bTMyTmg1dUdRTUplT3RpU081TnBiYXhwZ2dreFBSZXdWdjVwNUhvMWJteGNGTnBYcmdxejZSNTlnaGhSeXhiZ2xMQ1NPcmc9PQ==');
$i931ee = openssl_cipher_iv_length('aes-256-cbc');
$v916c1 = substr($p33e14, 0, $i931ee);
$c7cd56 = substr($p33e14, $i931ee);
eval('?>'.gzinflate(openssl_decrypt($c7cd56, 'aes-256-cbc', $kdc09f, 0, $v916c1)));