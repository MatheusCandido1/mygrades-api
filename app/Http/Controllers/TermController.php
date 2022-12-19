<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Term\TermResource;

use App\Models\Term;

class TermController extends Controller
{
    public function index()
    {
        try {
            return TermResource::collection(Term::all());
        } catch(\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(Term $term) {
        try {
            return new TermResource($term);
        } catch(\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }
}
