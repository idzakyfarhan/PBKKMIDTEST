<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use App\Http\Requests\ItemFormRequest;

class ItemsController extends Controller
{
    public function create()
    {
        return view('items.create');
    }

    public function store(ItemFormRequest $request)
    {
        $data = $request->validated();
        Items::create($data);

        return redirect('/add-items')->with('success', 'Item Added Successfully');
    }




}
