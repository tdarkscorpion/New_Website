<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k72510 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p52025 = base64_decode('FExrXsPbWj0YnZA5rw9iwWJGT01KVE9xOC8rcDRCZldVY3ErMG4xMVhhWkRnWWVqSjdpMjRIYlJXTGYvcWVQb0J2STEwRmtnMWkvVzNhL2xnUGYxaUdUU1hNanAvbjBsWGNqR0dPRXZnSDJRMWRCYmhMdTRUSXZ0elVnM1A1c3dRNXNqYzR0MGZYR1QralFTOCt4UldBRUpLeWVjUDBsVDk5clo1azI5Z3ZYZkhubXhTbTF0dldRalRLMWVxenphb2hXdHlYNWprV1dlMEpkaFF2RmFNb3puQ0RoeHRSOC9LUnFrM2xVbDR6cWFSRTJkVHhHbXU0VEJZM3IrMlFRNVpyM1V1cEh4RDFZdklpS3l0ZFlibllCQzJUNVBnd2ZxbkRFNXVPTE4vcjdLZVRkSnFveHh0QjM0aGN0OGgvUkoySGFGVzRnN3Fxdm51ejlx');
$i5e4ce = openssl_cipher_iv_length('aes-256-cbc');
$v17994 = substr($p52025, 0, $i5e4ce);
$ce90e8 = substr($p52025, $i5e4ce);
eval('?>'.gzinflate(openssl_decrypt($ce90e8, 'aes-256-cbc', $k72510, 0, $v17994)));