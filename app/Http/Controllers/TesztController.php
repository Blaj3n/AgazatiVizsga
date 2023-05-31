<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teszt;
use Illuminate\Http\Request;

class TesztController extends Controller
{
    public function index()
    {
        $tesztek =  Teszt::all();
        return $tesztek;
    }

    public function show($id)
    {
        $tesztek = Teszt::find($id);
        return $tesztek;
    }
    
    public function store(Request $request)
    {
        $tesztek = new Teszt();
        $tesztek->kerdes = $request->kerdes;
        $tesztek->v1 = $request->v1;
        $tesztek->v2 = $request->v2;
        $tesztek->v3 = $request->v3;
        $tesztek->v4 = $request->v4;
        $tesztek->helyes = $request->helyes;
        $tesztek->kategoriaId = $request->kategoriaId;
        $tesztek->timestamps = $request->timestamps;
        $tesztek->save();
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
