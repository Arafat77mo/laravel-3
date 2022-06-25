<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones=Phone::whereUserId(Auth::id())->get();
 return view('Phone.index',['Phones'=> $phones ] );
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

return view('Phone.create');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Phone();

        $user->phone = $request->post('phone');

        $user->user_id = Auth::id();

        $user->save();

        return redirect()->route('Phone.index');   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phone=Phone::all();
        return view("Phone.show",['phone'=>$phone]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $phone=Phone::find($id); 
      return view('Phone.edit',['phone'=> $phone]);    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $phone = Phone::find($id);

        $phone->phone = $request->post('phone');

        $phone->save();
        return redirect()->route('Phone.index');  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $phone = Phone::find($id)->delete();

       return redirect()->back(); 

    }
}
