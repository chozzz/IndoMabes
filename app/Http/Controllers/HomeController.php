<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Src\Curls\ClashOfClan as ClashOfClan;

class HomeController extends Controller
{
	public function __construct(ClashOfClan $coc)
	{
		$this->coc = $coc;
	}
    //
    public function getIndex()
    {
        $indoMabesClanTag = '#9YGL8Q98';
    	$members = $this->coc->getClanMembersByClanTag($indoMabesClanTag);
    	return view('pages.home', ['memberItems' => $members['items']]);
    }

    public function getCustomIndex(Request $request)
    {
        $clanTag = $request->clanTag;
        if ($clanTag != null)
        {
            $members = $this->coc->getClanMembersByClanTag($clanTag);
            return view('pages.home', ['memberItems' => $members['items']]);
        }
        return 'Missing parameter clan tag';
    }
}
