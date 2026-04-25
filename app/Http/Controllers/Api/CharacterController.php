<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CharacterController extends Controller
{
    public function index(): JsonResponse
    {
        $characters = Character::with('universe')->get();

        return response()->json([
            'status' => true,
            'message' => 'Characters retrieved successfully',
            'data' => $characters,
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'real_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', Rule::in(['male', 'female'])],
            'id_universe' => ['required', 'integer', 'exists:universe,id'],
            'new_column' => ['nullable', 'string', 'max:255'],
        ]);

        $character = Character::create($validated)->load('universe');

        return response()->json([
            'status' => true,
            'message' => 'Character created successfully',
            'data' => $character,
        ], 201);
    }

    public function show(string $id): JsonResponse
    {
        $character = Character::with('universe')->find($id);

        if (! $character) {
            return response()->json([
                'status' => false,
                'message' => 'Character not found',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Character retrieved successfully',
            'data' => $character,
        ]);
    }

    public function update(Request $request, string $id): JsonResponse
    {
        $character = Character::find($id);

        if (! $character) {
            return response()->json([
                'status' => false,
                'message' => 'Character not found',
            ], 404);
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'real_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', Rule::in(['male', 'female'])],
            'id_universe' => ['required', 'integer', 'exists:universe,id'],
            'new_column' => ['nullable', 'string', 'max:255'],
        ]);

        $character->update($validated);
        $character->load('universe');

        return response()->json([
            'status' => true,
            'message' => 'Character updated successfully',
            'data' => $character,
        ]);
    }

    public function destroy(string $id): JsonResponse
    {
        $character = Character::find($id);

        if (! $character) {
            return response()->json([
                'status' => false,
                'message' => 'Character not found',
            ], 404);
        }

        $character->delete();

        return response()->json([
            'status' => true,
            'message' => 'Character deleted successfully',
        ]);
    }
}
