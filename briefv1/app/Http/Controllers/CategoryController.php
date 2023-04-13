<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function create(Request $request): JsonResponse
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return response()->json(['message' => 'Category created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return JsonResponse
     */
    public function show(Category $category): JsonResponse
    {
        return response()->json(['category' => $category], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param Category $category
     * @return JsonResponse
     */
    public function edit(Request $request, Category $category): JsonResponse
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
        ]);

        // Update the product data
        if ($request->has('name')) {
            $category->name = $validatedData['name'];
        }

        $category->save();

        // Return a response or redirect as needed
        return response()->json(['message' => 'Product updated successfully']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $category
     * @return JsonResponse
     */
    public function update(Request $request, Category $category): JsonResponse
    {
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->price = $request->input('price');
        $category->save();
        return response()->json($category, 200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Category $category): JsonResponse
    {
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully'], 204);
    }
}
