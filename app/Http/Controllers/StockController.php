<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use App\Http\Requests\Stock\StockRequest;

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
        Stock::create($request->all());

        return redirect()
                ->route('posts.index')
                ->with('message', 'Produto cadastrado com sucesso');
    }
    public function create()
    {
        return view('create');
    }
    public function edit($id)
    {
        if (!$stock = Stock::find($id)) {
            return redirect()->back();
        }

        return view('edit', compact('stock'));
    }

    public function update(StockRequest $request, $id)
    {
        if (!$post = Stock::find($id)) {
            return redirect()->back();
        }

        $data = $request->all();
        $post->update($data);

        return redirect()
                ->route('posts.index')
                ->with('message', 'Produto atualizado com sucesso');
    }
}
