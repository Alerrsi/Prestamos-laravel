<?php

namespace App\Http\Controllers;


use App\Http\Requests\EquipmentRequest;
use App\Http\Resources\EquipmentResource;
use App\Models\Equipment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        

        $equipments = Equipment::with("category", "user")->get();

        return EquipmentResource::collection($equipments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipmentRequest $request)
    {   
        $data = $request->validated();
        $equipment = $request->user()->equipments()->create($data);
        return EquipmentResource::make($equipment);
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipment $equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment $equipment)
    {
        Gate::authorize('update', $equipment);


        $equipment->update($request->all());
        return EquipmentResource::make($equipment);

       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipment $equipment)
    {
        
    }
}
