<?php

namespace App\Http\Controllers;

use App\Http\Requests\WatchRequest;
use App\Http\Resources\WatchResource;
use App\Models\Watch;
use Illuminate\Http\Request;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return WatchResource::collection(Watch::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WatchRequest $request)
    {
        $watch = Watch::create($request->all());
        return new WatchResource($watch);
    }

    /**
     * Display the specified resource.
     */
    public function show(Watch $watch)
    {
        return new WatchResource($watch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Watch $watch)
    {
        $watch->update($request->all());
        return new WatchResource($watch);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Watch $watch)
    {
        $watch->delete();
        return response()->noContent();
    }
}
