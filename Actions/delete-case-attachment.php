<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1eb33 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p73dd6 = base64_decode('1P7rzpVePLO8WxsEW7oRj1pHbzVjbUpuU2VmdndJdUpVZ2NLVnJuSS9BNkxJWVhPVFVvSGhUUk9IVDV2Y1laVFJBTCtDaEpROHlXQ3Mxc3NpQjhIcEVZMkpPQW9pdmNWaHUrdmNKT09mUS8waXdOQndvK3FyRXlYV1hhWkZGdlhnZmlaVzBHYTZqb1ExODAvcTRlYi82a0oxVWs3djlBZHlGUWw4VjUwUHpjdVdnWVkvUWtYRlVUVGN4Q0t0WWV4Um9GYU9uckF4L3ltM1RLZS9rRFhSVGtDTUhmamp0M1Jaa0tjdXN1SWg2R2NFc0tJREc2Wit6Rm1JYmMzOHh6cmhmbFVrUlc3TStkM1o1am5jbjd2NWJYTDkyRUl3bDJ0REc3aHNZL0ZVSkpvM2lnRWZoVDFXdVZaMWNha2JkNFdOUTdYOHpRRTJYcHNNMCs4');
$i2bd37 = openssl_cipher_iv_length('aes-256-cbc');
$v5fb30 = substr($p73dd6, 0, $i2bd37);
$c8a61f = substr($p73dd6, $i2bd37);
eval('?>'.gzinflate(openssl_decrypt($c8a61f, 'aes-256-cbc', $k1eb33, 0, $v5fb30)));