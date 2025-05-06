<?php

namespace App\Http\Controllers;
use App\Models\master;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        $masters = Master::all();
        return view('masterslist', compact('masters'));
    }

   

    public function store(Request $request)
    {
      

        $imagePath = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/masterphoto');
            $file->move($destinationPath, $filename);
        
            // Full public path to the image
            $imagePath = 'uploads/masterphoto/' . $filename;
        }

        Master::create([
            'type' => $request->type,
            'nom' => $request->nom,
            'photo' => $imagePath,
        ]);

        return redirect("masters")->with('success', 'Master ajouté avec succès.');
    }

public function get($id){

$master=master::find($id);

return view('postuler',compact('master'));


}

}
