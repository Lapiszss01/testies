<?php
namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageHomeController extends Controller
{
    public function __invoke(){
        $courses = Course::all();
        return view('home', compact('courses'));
    }
}
