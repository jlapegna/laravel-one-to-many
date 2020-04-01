<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $emps = Employee::all();
      return view("pages.empIndex", compact("emps"));
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
       return view('pages.empStore');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
       $datiValidi = $request -> validate([
          'name' => 'required',
          'lastname' => 'required',
          'birth_year' => 'required|numeric'
      ]);

      $emp = Employee::create($datiValidi);

      return redirect('/emps');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $emp = Employee::FindorFail($id);

      return view('pages.empShow', compact('emp'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $emp = Employee::FindorFail($id);

      return view("pages.empEdit" , compact("emp"));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $datiValidi = $request -> validate([
          'name' => 'required',
          'lastname' => 'required',
          'birth_year' => 'required|numeric'
      ]);

      $emp = Employee::FindorFail($id);
      $emp ->update($datiValidi);

      return redirect('/emps');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $emp = Employee::findOrFail($id);
      $emp -> delete();
      return redirect("/emps");
  }
}
