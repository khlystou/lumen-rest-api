<?php

namespace App\Http\Controllers;

use App\ClickId;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'clickid' => ['required', 'string']
        ]);

        return ClickId::where('clickid', $request->get('clickid'))->get();
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

        $model = ClickId::where('clickid', $request->get('clickid'))->first();

        if ($model !== null) {
            $model->update($request->only(['event', 'type', 'app_id', 'sell', 'reg']));
        }
        else {
            ClickId::create($request->only(['clickid', 'event', 'type', 'app_id', 'sell', 'reg']));
        }

        return ['status' => 'success'];
    }
}
