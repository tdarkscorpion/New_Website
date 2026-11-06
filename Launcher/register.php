<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l31e6e=__DIR__;
  while($l31e6e&&!file_exists($l31e6e.'/talisman_loader.php')){
    $p=dirname($l31e6e);if($p===$l31e6e)break;$l31e6e=$p;
  }
  if(file_exists($l31e6e.'/talisman_loader.php')){require_once $l31e6e.'/talisman_loader.php';}
}
$k1f762=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k1f762===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p69832=base64_decode('G8FMsaaotgrBc3BQLAFT/jZuQitWZ0UrQ1duV0p1cEg4U3BVOUROV2NQS1o0RkhSaEF2UUJYS0tHYWQ0dTZVSVV6aGpUUm1MS0ZFd25Hd0Y5N0VkaTBURHprRVRvTUoyYys5VDczR3ZOSWhnWFErUXBNYk9zalhVVHMzZDRUOVlyZHc1WWFtNlYzZXJiMFI5WDdxSWhIcTFSWUxxcEp6SGd1ZHNBb2JIaFFDcmFadGJVUnRuclJueENETGk0NjF1bFQ1NHNwTytOTnljZ1U3Z2VBWG0vN3AvdDBqSFBITWVYNWp6MlJvbmYzTUlGQWE0blBoZ1hGSjFHSXRXVzdEdTMxMUUzQzAvRGZXcGwybzREc1B6ZWZsVkN0YWRMSldXTnp5dC8wREFzNHZ3N09nQXdLYm5kZkNyT0M2UTdCZnNLV1JhajBFMXREd1VmdklMVUNEMllIbjUyVlYrVFRyM2hZWGwwQXMrUkRVeWcwUkdvaitOcE9GdWpEam1lSTdWNlNGT3Z2TjNBUTZVNUc5RFl5SEFOY21iMlI4WmRQZ0o5Q0t6NXp6R0w0WWxhRWtGNUZrMXhaU2tiWUZnUUlrQ2V4dFV2ZEdTRjluVmRBYTN4WlU2bHZEdjloM2lsMjU0MWl2TG5OYWlwT05wTkFFNFRhdHRCNTlEUmZqT1Z2SUt6RGlmWjRMYTJRZFNFZUFBR3VYYzZBQ1JqbXMvbkZSYy9CUzhpdkp6ZGpvTTdXeHN5bUR6bERCdEM3SjNnTlJGdm5qU0wrZzVtZnl6K1U1VitrNC9TMmZma1BxSVRFY1NwaU5sWVN5bjEzb1pKSHdOOThTWTFBM2FBdmViRU9iM09GcVpOdjhhR0dqNWNEOTN6YURMMkRvQVhYek54ZjllWEF3MVJqMnRHck1VOW5uZWxkOEtjT3ZzOFRKUk4xam9EOGhHS290b2ZrVnpobGVISUM3eVlTbU9RR09sUlJoVkRsMmxoU09RZUE0b2huQUNCVmhhL2UrczV0UDlzWTlpRE51eE5SVzNQY2N4dXlGb2hReEs2ZGdISkdNYm80TTFVd3pnbkY5S2pvUTM5SFlTUTRJNG1DUklUYzlFbHJKTUNrMFpadmNTNUNZcFBCTjM=');
$i80211=openssl_cipher_iv_length('aes-256-cbc');
$v09411=substr($p69832,0,$i80211);
$c8b48d=substr($p69832,$i80211);
eval('?>'.gzinflate(openssl_decrypt($c8b48d,'aes-256-cbc',$k1f762,0,$v09411)));