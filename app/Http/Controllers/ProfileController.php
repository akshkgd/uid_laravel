<?php

namespace App\Http\Controllers;

use App\document;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->search_value;
        $aa = User::where('uniqueid', $search)->get();
        if (count($aa) > 0)

            return view('user.profile', compact('aa'))->withDetails($aa);
        else
            session()->flash('alert-danger', 'User Not Found!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function myprofile($id)
    {
        $a = User::find($id);
        return view('user.profile', compact('a'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findorFail($id);
        return view('admin.edit', compact('user'));
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
        $a = User::findorFail($id);
        $a->name = $request->name;
        $a->email = $request->email;
        $a->mobile = $request->mobile;
        $a->aadhar= $request->aadhar;
        $a->address = $request->address;
        if($request->hasFile('avatar')){
            
            $path = $request->file('avatar')->store('img', 'public');
            $a->avatar = $path;}
        
        $a->save();
        return redirect('/home');
        
    }
    public function update1(Request $request, $id)
    {
        $a = User::find($id);
        $data['is_approved'] = 1;
        $a->update($data);
        //        return view('listings.listings');

       return redirect('/home');
    }

    public function user_details($id)
    {
        $a = User::findorFail($id);
        $documents = document::where('user_id', $id)->get();
            return view('user.dashboard', compact('documents', 'a'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/home');
                }
}
