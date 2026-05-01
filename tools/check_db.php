<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k60d88 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbd5c8 = base64_decode('DM7uD3B/NfR2SuYiWkqoJmNYeUNqK05ONjZvcU81eHNYMDh4WjJZaWxFMFZmNER3am9iSnF4alZDZU5Ccy9FSW9VMUZCMGJKelNRLy9TZmVycUwvNUhmQ2NWR2YxaVVGNm9sWFg4eCtXTkMvcFRaellodlV6NlZCNmJydEt5TUM4amxsakdmVkNndHMyeDR3ZlVPNXZwV2hzbUloNWs1UnlSWGordFZzWWdOT3RoblhDL1k4aGRpaXc0QzBwNEJJbm1Qa28vaS9XRmc1N0VRNDU5OUNsNm1TeUkzUU00eVlYQUtLV2I3ZUN2T3VWeVpNdFp1ODFBTmtFQ1I1UDBDSFlqY2hGR1ZYUWkwQXVSMGhHUVhOUmw5MTgrcDZNN3ZMTFRtWWd3UUppdEM3ZnUxamFlMG9USGdHZnlybUJEWTdXTEUvZFBUb0MvNzA2SThr');
$i4b5f6 = openssl_cipher_iv_length('aes-256-cbc');
$v5cc6a = substr($pbd5c8, 0, $i4b5f6);
$c9b24c = substr($pbd5c8, $i4b5f6);
eval('?>'.gzinflate(openssl_decrypt($c9b24c, 'aes-256-cbc', $k60d88, 0, $v5cc6a)));