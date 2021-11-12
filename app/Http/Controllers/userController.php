<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_crud = User::all();
        return view('userCrud.index',['User'=>$users_crud]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userCrud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //add data
        User::create($request->all());

        // if true, redirect to index
        return redirect()->route('userCrud.index')
        ->with('success', 'Add data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users_crud = User::find($id);
        return view('userCrud.userview',['User'=>$users_crud]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users_crud = User::find($id);
        return view('userCrud.useredit',['User'=>$users_crud]);
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
        $users_crud = User::find($id);
        $users_crud->username = $request->username;
        $users_crud->name = $request->name;
        $users_crud->email = $request->email;
        $users_crud->password = $request->password;
        $users_crud->save();
        return redirect()->route('userCrud.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users_crud = User::find($id);
        $users_crud->delete();
        return redirect()->route('userCrud.index');
    }

    public function searchUser(Request $request)
    {
        $keyword = $request->searchUser;
        $User = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('userCrud.index', compact('User'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('manage-users')) return $next($request);
            abort(403,'Anda tidak memiliki cukup hak akses');
        });
    }
}
