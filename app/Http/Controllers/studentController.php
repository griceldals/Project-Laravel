<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    public function index (){
        $students = Student::all();
        if($students->isEmpty()){
            $data = [
                'message' => 'No se encontraron estudiantes',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        return response()->json($students, 200);
    }
}
