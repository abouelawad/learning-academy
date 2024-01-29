<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Endorse;
use App\Models\SiteContent;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
  {
    $recentCourses = Course::select('*')->orderBy('id','desc')->take(3)->get();

    $data['banner'] = SiteContent::select('content')->where('name','banner')->first();
    // dd(json_decode($data['banner']->content , true)['title']);
    $data['coursesCount'] = Course::count();
    $data['trainersCount'] = Trainer::count();
    $data['studentsCount'] = Student::count();
    $data['endorsers'] = Endorse::Select('name','major', 'description','image')->take(3)->get();

   

    return view('guest.index',compact('recentCourses'))-> with($data);
  }

   
}
