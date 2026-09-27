<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ke3992 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf0228 = base64_decode('vdINvZXIjjGNSYVLOLtbkWJ1NTZKeThydHhRdCtCU1dWcUo5a0JUQ3BNeWN5OVhBczFwME5ybi9tZzFWWXZMdVBveGovQnhTbUZHa0hMdmM4aFU5QnhUNjQyeTdpdlpuQklJUlhuTnk4R2Vvd2FGdnptSUkyL2VTbVJpZmV2Z2IzcmY4YlNsUzdKYzZWTk1ZNWlMeVd2UncvR2xKdS9EK3A0Mkxic2Rrc2lqcWp0RUErem1PVmVjamNYRFZHUmFuMDdmcURpMnJKczd0N2RqOTNWTFg0WEFWa2J4ck84V2xyN1BpMUVVTElaNFh2RFVrMUNsZ2V2Z0lBRHZOQWVSbk52QVB1bHlYQWZOWlRFTVFZTnVaTVhhMzYrOHVhdzREem9zaGlWMnNlRE5zMDVpWXgrWXF5UTM3VFI0PQ==');
$i0cade = openssl_cipher_iv_length('aes-256-cbc');
$v2d5c5 = substr($pf0228, 0, $i0cade);
$cd0e62 = substr($pf0228, $i0cade);
eval('?>'.gzinflate(openssl_decrypt($cd0e62, 'aes-256-cbc', $ke3992, 0, $v2d5c5)));