<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Universe;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UniverseController extends Controller
{
    public function index(): JsonResponse
    {
        $universes = Universe::all();

        return response()->json([
            'status' => true,
            'message' => 'Universes retrieved successfully',
            'data' => $universes,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'universe' => ['required', 'string', 'max:255', 'unique:universe,universe'],
            'company' => ['required', Rule::in(['Marvel', 'DC'])],
            'edge' => ['required', 'string', 'max:255'],
            'new_column' => ['nullable', 'string', 'max:255'],
        ]);

        $universe = Universe::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Universe created successfully',
            'data' => $universe,
        ], 201);
    }

    public function show(string $id): JsonResponse
    {
        $universe = Universe::find($id);

        if (! $universe) {
            return response()->json([
                'status' => false,
                'message' => 'Universe not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Universe retrieved successfully',
            'data' => $universe,
        ]);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $universe = Universe::find($id);

        if (! $universe) {
            return response()->json([
                'status' => false,
                'message' => 'Universe not found',
            ], 404);
        }

        $validated = $request->validate([
            'universe' => ['required', 'string', 'max:255', Rule::unique('universe', 'universe')->ignore($universe->id)],
            'company' => ['required', Rule::in(['Marvel', 'DC'])],
            'edge' => ['required', 'string', 'max:255'],
            'new_column' => ['nullable', 'string', 'max:255'],
        ]);

        $universe->update($validated);

        return response()->json([
            'status' => true,
            'message' => 'Universe updated successfully',
            'data' => $universe,
        ]);
    }

    public function destroy(string $id): JsonResponse
    {
        $universe = Universe::find($id);

        if (! $universe) {
            return response()->json([
                'status' => false,
                'message' => 'Universe not found',
            ], 404);
        }

        $universe->delete();

        return response()->json([
            'status' => true,
            'message' => 'Universe deleted successfully',
        ]);
    }
}
