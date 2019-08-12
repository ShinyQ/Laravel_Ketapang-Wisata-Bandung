<?php
namespace App\Services;
/**
 *
 */
class GoogleValidation
{
	public function tokenValidasi($accessToken)
    {
	   try {

	   $url = 'https://www.googleapis.com/oauth2/v1/tokeninfo?access_token='.$accessToken;
	   $client = new \GuzzleHttp\Client();
	   $response = $client->request('GET',$url)->getBody();

	   $data = json_decode($response);
	   // dd($data);
		if ($data->issued_to) {
		   	return true;
		   }

	   } catch (Exception $e) {

	   	if ($e->getRespose()->getStatusCode() == '400') {
	   		echo "token_mismatch";die();
	   	}

	   }
	}

	// function __construct(argument)
	// {
	// 	# code...
	// }
}


?>
