<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PredictionController extends Controller
{
    public function predict(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'MG1' => 'required|numeric',
            'MG2' => 'required|numeric',
            'MG3' => 'required|numeric',
            'UF' => 'required|integer',
            'NP' => 'required|integer',
            'NC' => 'required|integer',
            'NR' => 'required|integer',
            'interests' => 'required|string',
            'chosen_master' => 'required|string',
        ]);

        // Send request to FastAPI
        $response = Http::post('http://localhost:5000/predict', [
            'MG1' => $validated['MG1'],
            'MG2' => $validated['MG2'],
            'MG3' => $validated['MG3'],
            'UF' => $validated['UF'],
            'NP' => $validated['NP'],
            'NC' => $validated['NC'],
            'NR' => $validated['NR'],
            'interests' => $validated['interests'],
            'chosen_master' => $validated['chosen_master'],
        ]);

        // Handle response
        $predictionData  = $response->json();

        if (isset($predictionData['error'])) {
            return back()->withErrors(['error' => $predictionData['error']]);
        }
        
        // ✅ Manually add user input back in
        $predictionData['interests'] = $validated['interests'];

        // Return the data to a view or pass to frontend
        return view('prediction.result', ['predictionData' => $predictionData]);
    }
}


?>