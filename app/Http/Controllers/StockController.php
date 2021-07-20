<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use App\Http\Requests\StockRequest;

use Illuminate\Http\Request;

class StockController extends Controller
{
    //
    public function index()
    {
        $stock = Stock::latest()->paginate();

        return view('dashboard', compact('stock'));
    }

    public function destroy($id)
    {
        // return redirect()->route('posts.index');
        
        if (!$post = Stock::find($id))
            return redirect()->route('dashboard');

        $post->delete();

        return redirect()
                ->route('posts.index')
                ->with('message', 'Produto Deletado com sucesso');
    }
    public function store(StockRequest $request)
    {
        $data = $request->all();

        Post::create($data);

        return redirect()
                ->route('posts.index')
                ->with('message', 'Produto cadastrado com sucesso');;
    }
}
