<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\BaseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SpbeHomeController extends Controller
{

    public function __invoke()
    {
        return view('spbe.home.index');
    }

    public function domain()
    {
        return view('spbe.domain_spbe.domain');
    }
}
