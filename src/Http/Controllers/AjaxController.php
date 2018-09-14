<?php

namespace Epartment\NovaUniqueField\Http\Controllers;

use Illuminate\Routing\Controller;
use Laravel\Nova\Http\Requests\NovaRequest;

class AjaxController extends Controller
{
    public function validate(NovaRequest $request)
    {
        $query = $request->model()->where($request->attribute, $request->value);

        if ($request->has('id')) {
            $query->where($request->model()->getKeyName(), '<>', $request->id);
        }

        $count = $query->count();

        return response()->json(['result' => $count == 0]);
    }
}
