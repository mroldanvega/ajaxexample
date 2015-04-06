<?php

function getHint($hint)
{
	if(strcmp($hint,"Manny")===0)
	{
		$response = "whats up manny";
	}
	else
	{
		$response = "who are you?";
	}
	return $response;
	
}

//echo "HI";
//echo $_GET['q'];
echo getHint($_GET['q']);

?>