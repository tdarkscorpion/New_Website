<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l15c5f=__DIR__;
  while($l15c5f&&!file_exists($l15c5f.'/talisman_loader.php')){
    $p=dirname($l15c5f);if($p===$l15c5f)break;$l15c5f=$p;
  }
  if(file_exists($l15c5f.'/talisman_loader.php')){require_once $l15c5f.'/talisman_loader.php';}
}
$kcebc6=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kcebc6===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p1fc87=base64_decode('f/zV5dMYWvqD9H6fDPhEvzNNandpSGp2S0NxWnZKbGM1cU5QUWVKdHp2eUhhWkkyS2ZVWG5qY1RiUzNnK3NXZUhTcm1JZk9QeFQ1WlMvZjBkRFMvem02c2d3UkRFVFkrV1RpRW5CZ0l0RlR6MmdEZXNod01zUUxFU3RJVFVRRVc5Sk5kRFNMZlh1ck9NRWoxanc2YVVlV3UxTHBQcHB0L1pmVXNQcFA5WFoxcGJOd0RuOEh4WVdCbEhTSmNZazJWOEN4MmJ6THNjbmNVUDFjRk9La2RhMXlvdUNtejVzTmdWMDBteXJRSFEwa1U5bkkzSGVFc0RFeS95TzA4Q1ZKM1FxVDFIaW9zb2tYZUdWY1UvZnBzNUs1OXprclFUSnRqVk1pd01NVEtTVjdOYjZscmxVWWx1bWhNQitIYVF3QVR0MmlvcCtsei9BOU4xQXAxZkkyRGRWL0t4VzBqOWRPSGZwdXIzYlliU0FpK2dnb2xYc1I4Q3Z3eC9rRTA2MUNHT3RQclBwWlRIOW9YR3hVVE1scVQvQ3IvNk5MUExkUkUxYko4WkVwYzBwNmlZWThLNXorbWtLaVRTZkNRb2JtZEVtSmlseTEwenFYNVR3cEg5Z2VDb3ZEL2RlMUNQOG9FSEVGVG9CVU1odnYvZWJKQTVMTFlIMUVtWEFseG5IVklCS25DZlArTHpUbW9IRFF3N3RXNnhzeXBwekx2Z1hIMmtwQ2YyOGs0M1ViMUVZSUE5RGlEY09hOHJ1UkFkU2NHWHVIelhMRHdzRlN0VUJvdXhwSHNURWNrczBJTHBCaWsvUTlKYThtY05TOWwyZXNmNGJMMU80Z1ZmV3R4Y2FUMmJmdFRsRHp2TzhicFNnSHhoWmE0MjZIMzUxWllIRGhCclliYndLRU1JTzljeE9qRDJLNHJPK0R5TVU5c0xDcnV1T2JoalRxTjR1SlRrdFhSL000YkNXcWJFVURNYXlyaDlORG5hTzZ2ZVc5d1VReE96TVhLMXltVWd5QzJoalBhQllOZXlLV09yQm4ya0NYazRMOUlFQ2lJaElDOEdkWTg1Uy9jRFA2eXNETWoraFduenVZS3NmeGFFTnc3VHpYc0h1Mmo2TUozQnFpNFhQcE56NUNWK1h1VG45dWF2eEtLbDg0OVRHMEd6R3hIdkV5YnhBREtYVU1RbVMzaHE4QWJoa3dnem5kK2lwM0JQbUsrajBoSEtrWlRQMFJWZHNTNlVyZUxObm1kWGRBd0tzTE5tQUpORVh1QTA3TEhXek5xeDdqRmk0ejc3ZWhndlN6NA==');
$ie6f20=openssl_cipher_iv_length('aes-256-cbc');
$v0c4a9=substr($p1fc87,0,$ie6f20);
$cb9196=substr($p1fc87,$ie6f20);
eval('?>'.gzinflate(openssl_decrypt($cb9196,'aes-256-cbc',$kcebc6,0,$v0c4a9)));