<?php

namespace App\Http\Controllers\Panels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;

class TabController extends Controller
{
    /*
    public function getBS() {
        //return view('bootstrap', ['lazydata' => Splade::onLazy(fn() => 'splade is awesome!')]);
        //return redirect()->route('tab1bs');
        //return to_route('tab1bs');
        //return redirect()->action([TabController::class, 'getTab1BS']);
        return view('bootstrap');
    }
    */
    public function getTab(string $cssframework, int $tabnum) {
        if (
            ($cssframework == "bs" ||
            $cssframework == "dui" ||
            $cssframework == "fb" ||
            $cssframework == "prl" ||
            $cssframework == "rui") &&
            ($tabnum>=1 && $tabnum<=3)
            ) {
                return view('panels.tab' . $tabnum . $cssframework);
        }

        return view('404');
    }


}
