<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Src\Curls\ClashOfClan as ClashOfClan;

class SearchController extends Controller
{
    public function __construct(ClashOfClan $coc)
    {
        $this->coc = $coc;
    }
    //
    public function getIndex(Request $request)
    {
        return view('pages.search', ['clanItems' => array()]);
    }

    public function postIndex(Request $request)
    {
        $clanName = $request->clanName;
        if ($clanName != null)
        {
            $clans = $this->coc->getClansByClanName($clanName);
            return view('pages.search', ['clanItems' => $clans['items']]);
        }
        return view('pages.search', ['clanItems' => array()]);
    }
}
