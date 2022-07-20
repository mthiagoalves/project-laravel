<?php

namespace App\Http\Controllers;

use App\Models\Cafes;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function menu()
    {
        return view('menu');
    }

    public function cafe()
    {
        $search = request('search');

        if ($search) {
            $cafes = Cafes::where([
                ['name', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $cafes = Cafes::all();
        }

        return view('cafe', compact('cafes', 'search'));
    }

    public function show($id)
    {

        $cafes = Cafes::find($id);

        return view('show', compact('cafes'));
    }

    public function edit($id)
    {
        $cafes = Cafes::findOrFail($id);

        return view('edit', compact('cafes'));
    }

    public function update($id)
    {
        $cafes = Cafes::find($id);

        $cafes->name = request('name');
        $cafes->location = request('location');
        $cafes->description = request('description');
        $cafes->img = request('img');
        $cafes->save();

        return redirect('cafe');
    }

    public function destroy($id)
    {
        Cafes::find($id)->delete();

        return redirect('cafe');
    }

    public function delivery()
    {
        return view('delivery');
    }
    public function responsabilidade()
    {
        return view('responsabilidade');
    }

    public function admin(User $user)
    {

        $cafes = Cafes::paginate(5);

        return view('admin', compact('cafes'));

        return view('admin');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
            'description' => 'required',
            'img' => 'file'
        ]);

        $file = $input['img'];
        $path = $file->store('img', 'public');
        $input['img'] = $path;

        Cafes::create($input);

        return redirect('/cafe');
    }
}
