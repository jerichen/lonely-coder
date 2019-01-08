<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\NewHitsPlayListsRepository;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function search(Request $request, NewHitsPlayListsRepository $new_hits_play_lists_repository)
    {
        $new_hits_play_lists = $new_hits_play_lists_repository->getNewHitsPlayLists();

        return view('search', ['new_hits_play_lists' => $new_hits_play_lists]);
    }
}
