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
        if(Auth::check()){return Redirect::action('SessionController@show');}else{return View::make('session.create');}
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
        $input = Input::all();
        $rules = array('email'=>'required|exists:users,email', 'password'=>'required');
        $messages = array(
                            'email.required' => 'Het veld "E - mail" is verplicht.',
                            'email.exists' => 'Dit mail - adres bestaat niet in onze Orde.',
                            'password.required' => 'Het veld "wachtwoord" is verplicht.'
                         );
        $v = Validator::make($input, $rules, $messages);
        
        if($v->passes())
        {
            if(Auth::attempt(Input::only('email', 'password'))) 
            {
                $avis=Avi::lists('name', 'id'); //met Avi::lists krijg je een lijst terug wat een beter format is voor <select> als een array
                $avis_desc=DB::Table('avis')->select('id', 'description')->get();
                $name = Auth::user()->username; 
            
                return View::make('start', ['name'=>$name, 'avis'=>$avis, 'avis_desc'=>$avis_desc]);
            }
            else{return Redirect::back()->withInput()->with('message', 'Dit wachtwoord klopt niet.');}//zorgt ervoor dat de inputvelden die al ingevuld waren ingevuld blijven}
        }
        else
        {
            return Redirect::to('login')->withInput()->withErrors($v);
        }
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
            $avis = Avi::lists('name', 'id');
            $name = Auth::user()->username; 
            
            return View::make('start', ['name'=>$name, 'avis'=>$avis]);
        }
        else
        {
            return Redirect::action('SessionController@create');
        }
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(){Auth::logout();return Redirect::route('session.create');}
}
