<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k2baf9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p62d64 = base64_decode('mMYPLMWPSAgjKsr1rwGtIjY1Z1ZTck9kZ1BLU01QSkx1THNhMWdHMVVPOFNJdWJ4WVVSNzcxemJDWUUrSFFpYW4xSitZdWY1aENDS2kzdDFTMGp2cnVFaGtOdWJJdXZjWHdrNUZ1MFdFelBpVitmaXBFWUVOMzZWMExjOFdBbndaRUkyaEdTblBWL1RqT2Fzc0xqTEJjdk1nYTlEeTFaNnlEcTlCTmdibnZjUXk5aUNMMTRNb1lBOG95YUlNZHAxanlkLzJsR2hSTTI3RjRxTll1eENWT2RIMGJGNUloV1Rsd29WL0JJYlVPQ0oxVi9IS1Q4YXF1bjdEQ2lUb3pMVFNzR3QrL1JMV2prN2hSRE9QNEVWRVd0ZjQ0SFNNbXlGQTdPM055M3h5WnhBM0pmYUxkNUpJcG9KVjdFPQ==');
$i0a3f3 = openssl_cipher_iv_length('aes-256-cbc');
$v6e365 = substr($p62d64, 0, $i0a3f3);
$c0a3d8 = substr($p62d64, $i0a3f3);
eval('?>'.gzinflate(openssl_decrypt($c0a3d8, 'aes-256-cbc', $k2baf9, 0, $v6e365)));