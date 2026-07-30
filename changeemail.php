<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k449d8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd20dd = base64_decode('Ln4xUiRMPn09sQ7yMGgWxXJ0bUFlQ0IxRjIyRXo1Ym5hTEVtQSsyZlJ6TlNTYUVEcDg5N1JlcEdXUnZZSTNNNXVtSWlGQXdvQVVJczBsUGwwbHZTY3pGMk1CRzdwR0xqemdtaDRqdFFScDVzc29NNVZramJ6c3liTlJGRk5vVE14Y2VBZWZYV3dXM0NZQ0NuZ0NMU2MwSXQrNThWNFFzV0lraVMrdDAwUzNMNHBYWkk1VHlNNWVoS1VxQTkzNTR5N2I1WU0xY2tIZ0ZEVFc0dS9GT0w1RWRHbjZPMHIwYzcwaUtmZlJPVFhIZmlZYjBORkV3RktwTzkxSFJGVU5yVUt4ZWxPVEdGVlVvVGhHeFdJdnllNVdvU0lINE80TGlxYi93MTBQL0RPMEFVTzZtRTcvWktUbHFqRG52OXdaNFAyU0toZHFvbmE2ZlphM2xmZFg1YTZDSWlxMjFFVVhxYU9uci9xQT09');
$i8ca40 = openssl_cipher_iv_length('aes-256-cbc');
$vaaa06 = substr($pd20dd, 0, $i8ca40);
$c2ad14 = substr($pd20dd, $i8ca40);
eval('?>'.gzinflate(openssl_decrypt($c2ad14, 'aes-256-cbc', $k449d8, 0, $vaaa06)));