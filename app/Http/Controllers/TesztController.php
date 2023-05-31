<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    public function index()
    {
        $teszts =  Teszt::all();
        return $teszts;
    }

    public function show($id)
    {
        $teszts = Teszt::find($id);
        return $teszts;
    }
    
    public function store(Request $request)
    {
        $teszts = new Teszt();
        $teszts->kerdes = $request->kerdes;
        $teszts->v1 = $request->v1;
        $teszts->v2 = $request->v2;
        $teszts->v3 = $request->v3;
        $teszts->v4 = $request->v4;
        $teszts->helyes = $request->helyes;
        $teszts->kategoriaId = $request->kategoriaId;
        $teszts->timestamps = $request->timestamps;
        $teszts->save();
    }

    public function update(Request $request, $id)
    {
        $teszt = Teszt::find($id);
        $teszt->kerdes = $request->kerdes;
        $teszt->v1 = $request->v1;
        $teszt->v2 = $request->v2;
        $teszt->v3 = $request->v3;
        $teszt->v4 = $request->v4;
        $teszt->helyes = $request->helyes;
        $teszt->kategoriaId = $request->kategoriaId;
        $teszt->timestamps = $request->timestamps;
        $teszt->save();
    }
    
    public function destroy($id)
    {
        Teszt::find($id)->delete();
    }
}
