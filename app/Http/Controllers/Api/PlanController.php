<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlanResource;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PlanController extends Controller
{

    public function index(): AnonymousResourceCollection
    {
        return PlanResource::collection(Plan::all());

    }


    public function store(Request $request)
    {
        return Plan::create($request->all());

    }


    public function show($id)
    {
        return Plan::find($id);

    }


    public function update(Request $request, $id)
    {
        $plan =  Plan::find($id);
        $plan->update($request->all());
        return $plan;
    }


    public function destroy($id): int
    {
        return Plan::destroy($id);

    }
}
