<?php

class SessionController extends \BaseController 
{
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
        if(Auth::check()){return Redirect::action('SessionController@show');}else{return View::make('session.create');}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Auth::attempt(Input::only('email', 'password'))) 
        {
            $avis=Avi::lists('name', 'id');
            $name = Auth::user()->username; 
            
            return View::make('start', ['name'=>$name, 'avis'=>$avis]);
        }
        
        return Redirect::back()->withInput(); //zorgt ervoor dat de inputvelden die al ingevuld waren ingevuld blijven
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
        if(Auth::check())
        {
            return Redirect::action('SessionController@store');
        }
        else
        {
            return Redirect::action('SessionController@create');
        }
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
	public function destroy(){Auth::logout();return Redirect::route('session.create');}
}
