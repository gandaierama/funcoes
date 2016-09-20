<?
///////////////////////////////////////////////////////////

function getNavegador(){
		
		 $useragent = $_SERVER['HTTP_USER_AGENT'];
 
		  if (preg_match('|MSIE ([0-9].[0-9]{1,2})|',$useragent,$matched)) {
			$browser = 'IE';
		  } elseif (preg_match( '|Opera/([0-9].[0-9]{1,2})|',$useragent,$matched)) {
			$browser = 'Opera';
		  } elseif(preg_match('|Firefox/([0-9\.]+)|',$useragent,$matched)) {
			$browser = 'Firefox';
		  } elseif(preg_match('|Chrome/([0-9\.]+)|',$useragent,$matched)) {
			$browser = 'Chrome';
		  } elseif(preg_match('|Safari/([0-9\.]+)|',$useragent,$matched)) {
			$browser = 'Safari';
		  } else {
			// browser not recognized!
			$browser= 'other';
		  }
		 
		return $browser;
		
}
//////////////////////////////////////////////

function getIp(){
		$ip = $_SERVER['REMOTE_ADDR'];
		return $ip;
}

///////////////////////////////////////////
	
function getProvedor(){
		$provedor = gethostbyaddr($_SERVER['REMOTE_ADDR']);
		return $provedor;
}
?>