<?php 


$url = "https://graph.facebook.com/v2.9/me?fields=id%2Cname%2Calbums%7Bname%2Cphotos.limit(5)%7Blink%2Cname%2Cimages%7D%7D&access_token=EAAImL7BJNdEBAPEbeoG5jU3cZB25A3vLs61xpWtsTEglRvkBZC1NfZCF0sMbdb7KN1hI0qWCSIgMrhHZCjLqwxBZC0ISrzPyvQvXGZB9RwZAjUz1LZBR8dIW2oijp8kt2z6vL00VfMnBmznPf5cPPYcjWjK3RQ8RVqEZD";

$c = curl_init($url);
curl_setopt($c, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);

$html = json_decode(curl_exec($c));

	foreach ($html->albums->data as $a) {
		if ($a->name == "Instagram Photos") {
			return $a;
		}
	}
?>
