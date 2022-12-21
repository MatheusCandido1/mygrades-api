<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Grade;
use App\Http\Resources\Grade\GradeResource;
use App\Http\Requests\Grade\GradeStoreRequest;
use App\Http\Requests\Grade\GradeUpdateRequest;

use Illuminate\Support\Facades\DB;

class GradeController extends Controller
{
    public function index() {
        try {
            $grades = Grade::where('user_id',auth()->user()->id)->get();

            return GradeResource::collection($grades);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(Grade $grade) {
        try {
            return new GradeResource($grade);

        } catch(\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    public function store(GradeStoreRequest $request) {
        try {
            DB::beginTransaction();

            $grade = new Grade;
            $grade->course_id = $request->course_id;
            $grade->term_id = $request->term_id;
            if(isset($request->points)) {
                $grade->points = $request->points;
            } else {
                $grade->grade = $request->grade;
            }

            $grade->save();

            DB::commit();

            return response()->json([
                'message' => 'Grade created',
                'data' => new GradeResource($grade),
            ], 201);

        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    public function update(GradeUpdateRequest $request, Grade $grade) {
        try {
            DB::beginTransaction();

            $grade->grade = $request->grade;
            $grade->save();

            DB::commit();

            return response()->json([
                'message' => 'Grade updated',
                'data' => new GradeResource($grade),
            ], 200);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }
}
