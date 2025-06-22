<?php


namespace App\Http\Controllers;

use App\Models\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'company' => 'required|string',
            'price' => 'required|numeric',
            'usage' => 'required|string',
        ]);

        $med = Medication::create($request->all());

        return response()->json($med, 201);
    }

    public function update(Request $request, $id)
    {
        $med = Medication::findOrFail($id);
        $med->update($request->all());

        return response()->json($med);
    }

    public function destroy($id)
    {
        $med = Medication::findOrFail($id);
        $med->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }

    public function index()
    {
        return response()->json(Medication::all());
    }
}

