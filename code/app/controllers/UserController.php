<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		If(Auth::check()){return Redirect::action('SessionController@show');}else{return View::make('user.create');}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        $rules = array('username'=>'required|unique:users', 'email'=>'required|unique:users', 'password'=>'required');
        $v = Validator::make($input, $rules);
            
            if($v->passes())
            {   
                $user = new User();
                $user->email=$input['email'];
                $user->username=$input['username'];
                $user->password=Hash::make($input['password']);
                $user->save();
                
                return View::make('success');
            }
            else{return Redirect::to('register')->withInput();}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
