<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k45262 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd8f5c = base64_decode('khe3LC7PP/8wCD4R5TltAWVoWjNUblpvV0dCcno1a3FBbm1CRnpDRFV3RWEzMGtyenBDcnNTQk8wNTNHbTgwa0h0MTg1TDNnTW4vYnlnZ1QzV0NtTGlUcXkwbk85UWhDS0tIY3hzK1Q1cGd2Njg2YzBPWktBbmROWjhpUGxBRXI2ai9qdCtBUnhaRWNvVnhmUUNyNEJnbFI1SlB2cnVOcVBlZjBQaHUvLy9CUDBpNVQzWGV3STY4Z2xzc3duOWRrZ2s5aFJvNDc2THVHaHo4TXNMM2dsWTZwbU5panA4VGJhOXBFTWNIU0FwRWMyeHNOOUhINGlZMzFyS3R2QTRseDd2TTRqaDVYTlh2aG8zcitUZS9RL2FTcEFwZVZpb3QxWGQ1OHlmRS9wZ2VqQlNNRjNvZUxXbzIzR3VJZk44ZS9QMlphKzlFZ0xQS1AxVHl3Z3FiRkVEZ1BKRzJRN3prZXNsTXdLQT09');
$if9ac3 = openssl_cipher_iv_length('aes-256-cbc');
$vdbd55 = substr($pd8f5c, 0, $if9ac3);
$c13b7e = substr($pd8f5c, $if9ac3);
eval('?>'.gzinflate(openssl_decrypt($c13b7e, 'aes-256-cbc', $k45262, 0, $vdbd55)));