<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\v1\Controller;

class CategoryController extends Controller
{
    public function index()
    {
            $categories = Category::all();

            return response()->json(['success' => true, 'data' => $categories]);
    }

    public function show($id)
    {
        $categories = Category::find($id);

        return $this->checkModelExists(function () use ($categories) {
            return response()->json(['success' => true, 'data' => $categories]);
        }, $categories, trans('messages.book.not_found'));
    }

    public function store(Request $request)
    {
        $categories = Category::create($request->all());

        return response()->json(['success' => true, 'message' => trans('messages.book.created'), 'data' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $categories = Category::find($id);

        return $this->checkModelExists(function () use ($categories, $request) {
        $categories->update($request->all());

        return response()->json(['success' => true, 'message' => trans('messages.book.updated'), 'data' => $categories]);
        }, $categories, 'el libro no existe');
    }

    public function destroy($id)
    {
        $categories = Category::find($id);

        return $this->checkModelExists(function () use ($categories) {
        $categories->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
        }, $categories, 'el libro no existe');
    }
}
