<?php

namespace App\Src\Curls;

class ClashOfClan
{
	protected $baseUrl = 'https://api.clashofclans.com/v1/';
	protected $apiKey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjBkMmFlMjUyLTk2OTItNDQ2ZS04MWY2LTY4NjI4NzI3NTQ2NyIsImlhdCI6MTQ1NTk0MzU2MSwic3ViIjoiZGV2ZWxvcGVyLzAxMjBhYzEwLWQ4OGQtZWJmNS02ZjFiLTM0ZmQyYmFlMjMzOCIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjE4Mi4zMC4xODIuMTQ1IiwiMTI4LjE5OS4xMDkuMTA3Il0sInR5cGUiOiJjbGllbnQifV19.EkIuTK7VIM2lgkGq9DSqFMtnnhagKZDsRvtiaTllVmQ3rg0Dq-LCwLNKyCxDAqVYZ9USazHscTjT-Pfa8PxuNg';

	public function getClansByClanName ($clanName)
	{
		$activeUrl = $this->baseUrl . 'clans';
		$params = array(
			"name" => rawurlencode($clanName),
		);
		return $this->performCurlRequest($activeUrl, $params);
	}

	public function getClanByClanTag ($clanTag)
	{
		$activeUrl = $this->baseUrl . 'clans' . DIRECTORY_SEPARATOR . rawurlencode($clanTag);
		return $this->performCurlRequest($activeUrl);
	}

	public function getClanMembersByClanTag ($clanTag)
	{
		$activeUrl = $this->baseUrl . 'clans' . DIRECTORY_SEPARATOR . rawurlencode($clanTag) . DIRECTORY_SEPARATOR . 'members';
		return $this->performCurlRequest($activeUrl);
	}

	// Performing Curl request and returning it as decoded JSON.
	private function performCurlRequest($activeUrl, $params = array())
	{
		$ch = curl_init();
		curl_setopt_array($ch, array(
			CURLOPT_HTTPHEADER => array('Accept: application/json','authorization: Bearer '. $this->apiKey),
			CURLOPT_URL => count($params) > 0 ? $activeUrl . '?' . urldecode(http_build_query($params)) : $activeUrl,
			//CURLOPT_POSTFIELDS => ,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPGET => true,
		));
		$result = curl_exec($ch);
		curl_close($ch);
		return json_decode($result, true);
	}
}