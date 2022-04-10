<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\Gallery;
use App\Models\User;
use Carbon\Carbon;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['isadmin']);
    }
    public function index()
    {
        return view('admin.pages.user.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.user.create');

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
            'name' => 'required',
            'password' => 'required|min:5',
            'email' => 'required'
        ], [
            'name.required' => 'Name is required',
            'password.required' => 'Password is required'
        ]);


        $request->passwordverification ==$request->password ? $user= User::create([
            'name' => $request->name,
            'type' => 'user',
            'admin' => '0',
            'email' => $request->email,
            'email_verified_at' => Carbon::now(),


            'password' => Hash::make($request->password),
        ]):'';
// return $user;


        return redirect()->back()->with('message','user has inserted successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $folders=Folder::where('user_id',$id)->get();
   $images=Gallery::where('User_id',$id)->where('folder_id',null)->get();
        return view('admin.pages.user.show',compact('folders','images'));

    }
    public function showfolder($name,$id)
    {
        $folder=Folder::where('user_id',$id)->where('name',$name)->first();
        return view('admin.pages.user.folder',compact('folder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('admin.pages.user.edit',compact('user'));


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
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ], [
            'name.required' => 'Name is required',
            'password.required' => 'Password is required'
        ]);

        $user=User::find($id);
        $request->passwordverification ==$request->password ? $user->update([
            'name' => $request->name,
            'type' => 'user',
            'admin' => '0',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]):'';
// return $user;


        return redirect()->back()->with('message','user has updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendMail(Request $request)
    {

        Mail::send('admin.emails.user', ['title' => $request->title,'containt'=>$request->message,'name'=>$request->name], function($message) use($request){
            $message->to($request->email);
            $message->subject('from ghanem project' );
        });
        return redirect()->back()->with('message','the email has sent');

    }
    public function delete($id)
{

   User::find($id)->delete();
    return redirect()->back()->with('message','user has been deleted');

}
}
