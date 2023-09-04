<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Summary of store
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Valida cada imagen individualmente
    ]);

    $title = $request->input('title');
    $description = $request->input('description');
    
    $ad = new Ad();
    $ad->title = $title;
    $ad->description = $description;
    $ad->save();

    if ($request->hasFile('images')) {
        $images = $request->file('images');
        foreach ($images as $image) {
            // Aquí puedes manejar la subida y almacenamiento de cada imagen en tu servidor
            // Ejemplo: $imagePath = $image->store('images'); 
            // Luego, puedes asociar la ruta de la imagen al anuncio en la base de datos si es necesario.
        }
    }
    return redirect()->route('home')->with('success', 'Anuncio agregado');
}

    public function show(Ad $ad)
    {
        return view("ad.show", compact('ad'));
    }
}
