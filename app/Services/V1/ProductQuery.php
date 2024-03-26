<?php

namespace App\Services\V1;
use Illuminate\Http\Request;


class ProductQuery {
    protected $allowedParms = [
        'category'
    ];

    public function transform(Request $request) {
        $eloQuery = [];

        foreach ($this->allowedParms as $param) {
            if ($request->has($param)) {
                $eloQuery[$param] = $request->query($param);
            }
        }

        return $eloQuery;
    }
}