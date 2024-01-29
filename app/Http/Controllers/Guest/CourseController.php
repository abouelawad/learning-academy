<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function  index (Category $category)
    {
        $data['courses'] = Course::where('category_id', $category->id )->paginate(3);
       
        
        return view('guest.course.category.index' , compact( 'category'))->with($data);
    }

    public function show(Category $category ,Course $course)
    {
        
        return view('guest.course.category.show', compact('course'));
    }
}
