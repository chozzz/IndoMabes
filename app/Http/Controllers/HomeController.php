<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Src\Curls\IndoMabesClan as IndoMabesClan;

class HomeController extends Controller
{
	public function __construct(IndoMabesClan $indoMabesClan)
	{
		$this->indoMabesClan = $indoMabesClan;
	}
    //
    public function index()
    {
    	$members = $this->indoMabesClan->getMembers();
    	//dd($members['items']);
    	return view('pages.home', ['memberItems' => $members['items']]);
    }
}
