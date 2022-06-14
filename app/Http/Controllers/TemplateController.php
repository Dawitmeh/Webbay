<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Template;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
// use SebastianBergmann\Template\Template;

class TemplateController extends Controller
{
    public function index()
    {
        $user = Template::all();
        return $user;
    }

    public function store(Request $request){

        // $store = new Template;
        // $store->templateId = 't2';
        // $store->sections = [
        //     'navigation' => [
        //         'tagName' => "About",
        //         'routeTo' => "about"
        //     ]
        // ];
        // $store->save();

        // return $store;
    }
}
