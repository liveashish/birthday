
<?php




$accessURL = "https://graph.facebook.com/";
$username = "liveashish";

function collectPost()
{
	$limit = '500';
	$accessToken = 'CAACEdEose0cBAAJ3jZAvs7TtjgDmc6z4fb8xJyqqFlDpzh66KczfmeoREpfYPt4oteeDMAlxPXEIORdRZAHnTZB7cEsB1R74YvUy02DDSRrSyKEGXXqbNIL9gLA9XyeOPZAfDYxfOtY50FDJmK32vRnT82HIBzH7j0raVPAjZADWrZC91IyvNo7Vd61ZA1plXKBBZCu6yxDe7aYRuxqR5wfN';

	$source = file_get_contents('https://graph.facebook.com/me?fields=birthday&access_token='.$accessToken);
	$obj = json_decode($source);
	$bdayJSON = $obj->birthday;
	$arrBday = explode("/", $bdayJSON);
	$t = '10:00';
	$timestamp = '1410067264';
	$query = {'actors': ('SELECT actor_id,post_id,message FROM '
                        'stream WHERE source_id=me() AND created_time > '$timestamp' LIMIT '$limit''),
             'names': ('SELECT first_name FROM user WHERE '
                       'uid IN (SELECT actor_id FROM #actors)')}

    $urlstring = {'access_token': $accessToken,
                 'q': query}

    $fullurl = "https://graph.facebook.com/fql"+'?'+urllib.urlencode(urlstring)
	
}

collectPost();



?>