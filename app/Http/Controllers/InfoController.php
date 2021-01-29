<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'clickid' => ['required', 'string']
        ]);

        $data = DB::table('clickid')->where('clickid', $request->get('clickid'))->get();
        
        if ($data->empty()) {
            abort(404);
        }

        return $data;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'clickid' => ['required', 'string'],
            'event' => ['string'],
            'type' => ['string'],
            'app_id' => ['string'],
            'sell' => ['integer'],
            'reg' => ['integer']
        ]);

        return DB::table('clickid')->insert(
            $request->only(['clickid', 'event', 'type', 'app_id', 'sell', 'reg'])
        );
    }
}
