<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index()
    {
        $kategoriaks =  Kategoria::all();
        return $kategoriaks;
    }

    public function show($id)
    {
        $kategoriaks = Kategoria::find($id);
        return $kategoriaks;
    }
    
    public function store(Request $request)
    {
        $kategoria = new Kategoria();
        $kategoria->kategorianev = $request->kategorianev;
        $kategoria->timestamps = $request->timestamps;
        $kategoria->save();
    }

    public function update(Request $request, $id)
    {
        $kategoria = Kategoria::find($id);
        $kategoria->kategorianev = $request->kategorianev;
        $kategoria->timestamps = $request->timestamps;
        $kategoria->save();
    }
    
    public function destroy($id)
    {
        Kategoria::find($id)->delete();
    }
}
