<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2aa28 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p8055d = base64_decode('B7CALqnrZjdLFARF9kyxT3hySDlTVjlnRk1vQ1pTSDJrNHlxL1FRLzk1S3VPZzdWRVhXZUY1c0ZNRlp6OXc3cUMrbXpXUzJwcnQ0SFhCNkxGVzFVQU9wTGd2YVFrR3hrWHgvZVVhNE5YbzZNMUFJdVBBM0kzNVBZRy9rNnRhTU1GWVNXU1h3eXNWcnFSbTErdDZmdVc5OTIzSlNtRUtqQzVCdGMvNmJmZTJXQjdneCsyRXpNVUM4cE52KzR1eHpRNkNnNXZZaHB6WU54S2NjdW9jUWFYdFNtKzY3TGpvN3V6c3ZDalRBcWh0ZXFmMENLa3l6ZE5sTEZPbkIvMDhwbktPZHhTaFNsUmM2V2ZEekpoUStJZXhUTUJIckNINHNPS1B0eisrRzFBVjVYSHMzNUxhZjRoanVyNVRvSW55RXdvbkV5aEhNWUgyTlJpT2Nkd3YrbkZXODgyakloZnp6elNwVGcvUjhvYytqK1hYdlNWdEM2NlRuZndoSUxjOGZUWldNemp2WUp1UjkvSCtrUnlRSytHZWJUMmpOQW51MzJkVjF6bU1ad01LTU5HdXBGcjNGV2VhckZ3Ly8rYlIyT2tYdTdHMEM3c3dPYXFrLzU=');
$idbc24 = openssl_cipher_iv_length('aes-256-cbc');
$vbed80 = substr($p8055d, 0, $idbc24);
$c6b39c = substr($p8055d, $idbc24);
eval('?>'.gzinflate(openssl_decrypt($c6b39c, 'aes-256-cbc', $k2aa28, 0, $vbed80)));