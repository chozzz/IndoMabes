<?php

namespace App\Src\Curls;

class IndoMabesClan
{
	public function getMembers()
	{
		$apiKey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjBkMmFlMjUyLTk2OTItNDQ2ZS04MWY2LTY4NjI4NzI3NTQ2NyIsImlhdCI6MTQ1NTk0MzU2MSwic3ViIjoiZGV2ZWxvcGVyLzAxMjBhYzEwLWQ4OGQtZWJmNS02ZjFiLTM0ZmQyYmFlMjMzOCIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjE4Mi4zMC4xODIuMTQ1IiwiMTI4LjE5OS4xMDkuMTA3Il0sInR5cGUiOiJjbGllbnQifV19.EkIuTK7VIM2lgkGq9DSqFMtnnhagKZDsRvtiaTllVmQ3rg0Dq-LCwLNKyCxDAqVYZ9USazHscTjT-Pfa8PxuNg';
		$memberUrl = 'https://api.clashofclans.com/v1/clans/%239YGL8Q98/members';

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $memberUrl);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json','authorization: Bearer '. $apiKey));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
		$result = curl_exec($curl);
		curl_close($curl);
		return json_decode($result, true);
	}
}