<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k84aec = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pead90 = base64_decode('Bz3ydNHAF7ZXbxwS5kLdDWY1NVpvOFhQN1dzTGdOTm1qZ3F0SWVROG02ZGlqNy9DQ2wvZUYwVUxFNWZxTWxBYmoxdEsxLzRWZFlweHgvaWpnd1VmRVVOMnJmM3ZQNGdRVCtPaExhell1UFVzVUw5amFnYmZqWnVyenBQTVZmdFg2RmhsbVVCQUIveTRKMGxDWWJsNnRFS3FOaWlZN21uNVFiK1krSlRPMjdycUZ5MHRaVVhsWmRUcTQ2UGg0VStpTmN1WHNDdDdWMmRUKzdKL2dwQnIvTzhzSWVrakJuSGdXSktKcWhES0VRQS9jbHFDSUJrL2RHbGVlZVNhL2dOc2gzU3l6V3hvWTlPcTF6R1VHT3JOMWpabFhuRjEyM2l2c0Q4Z1M5aDV3aXNQTmJ6ZkFMRlpkM0VkRm1SN1kxdHdXOC84WlhweGFpNFlxZVdP');
$i6df5e = openssl_cipher_iv_length('aes-256-cbc');
$v1cd97 = substr($pead90, 0, $i6df5e);
$c75915 = substr($pead90, $i6df5e);
eval('?>'.gzinflate(openssl_decrypt($c75915, 'aes-256-cbc', $k84aec, 0, $v1cd97)));