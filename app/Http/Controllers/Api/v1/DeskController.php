<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeskStoreRequest;
use App\Http\Resources\DeskResource;
use App\Models\Desk;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return DeskResource::collection(Desk::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DeskStoreRequest $request
     * @return DeskResource
     */
    public function store(DeskStoreRequest $request): DeskResource
    {
        $created_desk = Desk::create($request->validated());

        return new DeskResource($created_desk);
    }

    /**
     * Display the specified resource.
     *
     * @param Desk $desk
     * @return DeskResource
     */
    public function show(Desk $desk): DeskResource
    {
        return new DeskResource($desk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DeskStoreRequest $request
     * @param Desk $desk
     * @return DeskResource
     */
    public function update(DeskStoreRequest $request,
                           Desk             $desk): DeskResource
    {
        $desk->update($request->validated());

        return new DeskResource($desk);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Desk $desk
     * @return Response
     */
    public function destroy(Desk $desk): Response
    {
        $desk->delete();

        return response(null,
                  Response::HTTP_NO_CONTENT);
    }
}
