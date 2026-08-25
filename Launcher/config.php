<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k081d3 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc8f48 = base64_decode('lsmI61DlMfvrPhdmeEt0HjlzTTNjdVBEVkZ4WGZuSDRSVnpqVmRxRjhRZHZYYkNROC9hRHo5V3dCNTQ2MjRmaXdaSUhyZVNWWW1rbWdxQTFPNldta2trdWRzVzZENWNyRTNMd04yTTE2R1M0d3prN0p3YmJhVk9KZFhYSWFFenplaDhFdm9KcHJDMFZ6c09KMzUvbzRpUDQwemtyckxjQ3VZVkZwa3Nvd2Z0Q2I1bDBhaS9hTkhVKzR2dkFWUEZhQkR5NVVVNEU1Zld5U2Z3M1lqeldNaStXV014VVJ0cDBwYW9tVVoydG1mVndmMDIzMEwyQ2hFb1R6eWFEa0JoSERhdUJXK2Z6a3NvOUd6K1FTWFRVQTQ2VGx0ODhQTjVPNlp3MGJxUUdZR2NrRjZsTjNBVTBsZmY1S1o4PQ==');
$ief911 = openssl_cipher_iv_length('aes-256-cbc');
$vbf21c = substr($pc8f48, 0, $ief911);
$c6486e = substr($pc8f48, $ief911);
eval('?>'.gzinflate(openssl_decrypt($c6486e, 'aes-256-cbc', $k081d3, 0, $vbf21c)));