<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::query();
        // Filter berdasarkan judul buku
        if ($request->has('search')) {
            $searchKeywords = explode(' ', $request->input('search'));
            foreach ($searchKeywords as $keyword) {
                $product->where('title', 'like', '%' . $keyword . '%');
            }
        }

        $product = $product->get();

        return view('products.index', compact('product'));
    }
}