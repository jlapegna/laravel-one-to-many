<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class MainController extends Controller
{
  public function index()
   {
       $emps = Employee::all();
       $tasks = Task::all();
       return view("pages.empTaskIndex", compact("emps"),compact("tasks"));
   }
}
