<?php
namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;
class AdminCrude extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies= Person::orderBy('id','asc')->paginate(5);
        return view('admin.index', compact('companies',));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'nation' => 'required',
            'gender' => 'required',
            'dob' => 'required',
        ]);
        $company = new Person();
        $company->fname = $request->fname;
        $company->lname = $request->lname;
        $company->nation = $request->nation;
        $company->gender = $request->gender;
        $company->dob = $request->dob;
         $company->save();
        return redirect()->route('crude.index')
            ->with('success','New User has been created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Person $company)
    {
        return view('crude.show',compact('company'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $company)
    {
        return view('admin.edit',compact('company'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personinfo $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'nation' => 'required',
            'gender' => 'required',
            'dob' => 'required',
        ]);
        $company = Person::find($id);
        $company->fname = $request->fname;
        $company->lname = $request->lname;
        $company->nation = $request->nation;
        $company->gender = $request->gender;
        $company->dob = $request->dob;
        $company->update();
        return redirect()->route('crude.index')
            ->with('success','Company Has Been updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $company
     * @return \Illuminate\Http\Response
     */
    public function destory(Person $company)
    {
        return view('admin.index');
        $company->delete();
        return redirect()->route('crude.index')
            ->with('success','Company has been deleted successfully');
    }
}
