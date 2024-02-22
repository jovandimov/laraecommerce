<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ColorFormRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    public function create()
    {
        return view('admin.color.create');
    }
    public function store(ColorFormRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1' : '0';
        Color::create($validatedData);

        return redirect('admin/colors')->with('message', 'Color Successfully Created');
    }
    public function edit(Color $color)
    {
        return view('admin.color.edit', compact('color'));
    }
    public function update(ColorFormRequest $request, int $color_id)
    {
        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1' : '0';
        Color::find($color_id)->update($validatedData);
        return redirect('admin/colors')->with('message', 'Color Added Successfully');
    }
    public function destroy(int $color_id)
    {
        $color = Color::findOrFail($color_id);
        $color->delete();

        return redirect('admin/colors')->with('message', 'Successfully Deleted Color');
    }
    public function index()
    {
        $colors = Color::all();
        return view('admin.color.index', compact('colors'));
    }
}
