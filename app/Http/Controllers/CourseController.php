<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Course\CourseResource;

use App\Models\Course;


class CourseController extends Controller
{
    public function index()
    {
        try {
            return CourseResource::collection(Course::all());
        } catch(\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }

    public function show(Course $course) {
        try {
            return new CourseResource($course);
        } catch(\Exception $e) {
            return response()->json([
                'error_message' => $e->getMessage(),
            ], 500);
        }
    }
}
