<?php

if(!function_exists('get_API_response'))
{
  function get_API_response($method, $url, $data = false)
  {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
	curl_setopt($ch, CURLOPT_URL, $url);
	if ($data) {
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$headers = array();
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'Content-Length: ' . strlen($data);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	return curl_exec($ch);
  }
}


if(!function_exists('get_JSON_data'))
{
  function get_JSON_data($url)
  {
	$response = get_API_response('GET', $url);
	return json_decode($response, true);
  }
}

if(!function_exists('post_JSON_data'))
{
  function post_JSON_data($url, $array)
  {
	$jsonObject = json_encode($array);
	$response = get_API_response('POST', $url, $jsonObject);
	return $response;
  }
}

if(!function_exists('put_JSON_data'))
{
  function put_JSON_data($url, $array)
  {
	$jsonObject = json_encode($array);
	$response = get_API_response('PUT', $url, $jsonObject);
	return $response;
  }
}

if(!function_exists('count_JSON_data'))
{
	function count_JSON_data($url)
		{
		$response = get_API_response('COUNT', $url);
		return json_decode($response, true);
		}
}