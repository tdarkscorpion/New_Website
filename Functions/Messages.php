<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k02814 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8e0e5 = base64_decode('tT+sv8YxClvwoo373B01p2V6eUhIK3VRbkI0YTArdkM5RjR0WUVwZXowOGU1NzNVU1hKV3FRd1VtWTlSVHpkZzVRS0xXSjhWVEQ4WlZ5WG1ldWRFZzVTVUV0UWxUZkdwYXBmM09XSURvN2JDNTBMc1I3SHNyRHdBN2o1QzJGbnhad3dIc2prVm1XdVJ5bkxxWkJ4K2pTeFIyYlo0bXZFSktGR1NxcnZuUFZjb2lNWkFNSVVQZEdBMXBmZklnb0ZmemZQL2FzNndqVVhoQUVyMDFKMXNHdHRRNDFMODhUMVJ6OUNkb3ZEN1RHeGJkaW50RlhTTmdhSlBkQ0lmNTd2QVM5ZTZQcWJMbXlHQm9rdDVKOFNHMlNaWWloWlh6b0pmOW12WnliWU5XRUFKM3gxTzFCS0RISjJpOVVNPQ==');
$id9c24 = openssl_cipher_iv_length('aes-256-cbc');
$v7e9b2 = substr($p8e0e5, 0, $id9c24);
$caae94 = substr($p8e0e5, $id9c24);
eval('?>'.gzinflate(openssl_decrypt($caae94, 'aes-256-cbc', $k02814, 0, $v7e9b2)));