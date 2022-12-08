<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        return response()->json(People::all(), 200);
    }

    public function create(People $people): JsonResponse
    {
        return response()->json($people, 201);
    }

    public function show(People $people): JsonResponse
    {
        return response()->json($people, 200);
    }

    public function update(People $request, $people): JsonResponse
    {
        return response()->json($people, 200);
    }

    public function destroy(People $people): JsonResponse
    {
        return response()->json($people, 200);
    }
}
