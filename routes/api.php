<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use App\Http\Controllers\EquipmentController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



# rutas de equipment
Route::get("equipments", [EquipmentController::class, "index"]);
Route::post("create/equipment",[EquipmentController::class, "store"]);
Route::put("updated/equipment/{equipment}",[EquipmentController::class, "update"]);


# rutas de category

Route::get("categories", [CategoryController::class, "index"]);
Route::post("create/category", [CategoryController::class, "store"]);
Route::put("update/category/{category}", [CategoryController::class, "update"]);
Route::delete("delete/category/{category}", [CategoryController::class, "destroy"]);