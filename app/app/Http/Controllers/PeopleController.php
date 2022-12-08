<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
   
    public function index(): JsonResponse
    {
        return response()->json(People::all(), 200);
    }

    public function create(Request $request): JsonResponse
    {
        $people = People::create($request->all());
        return response()->json($people, 201);
    }

    public function show(People $people): JsonResponse
    {
        return response()->json($people, 200);
    }

    public function update(Request $request, People $people): JsonResponse
    {
        $people->update($request->all());
        return response()->json($people, 200);
    }

    public function destroy(People $people): JsonResponse
    {
        $people->delete();
        return response()->json(null, 204);
    }
}
