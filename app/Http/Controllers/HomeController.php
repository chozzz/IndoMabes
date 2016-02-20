<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        $indoMabesClanTag = '#9YGL8Q98';
    	$members = $this->coc->getClanMembersByClanTag($indoMabesClanTag);
        //$clans = $this->coc->getClansByClanName('INDO MABES');
        //dd($clans['items']);
    	//dd($members['items']);
    	return view('pages.home', ['memberItems' => $members['items']]);
    }
}
