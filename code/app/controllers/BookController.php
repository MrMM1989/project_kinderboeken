<?php

class BookController extends \BaseController {

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
        If(Auth::check())
        {
            $avis=Avi::lists('name', 'id');
            
            return View::make('book.create', ['avis'=>$avis]);
        }
        else
        {
            View::make('error');
        }
    }
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        $rules = array('title'=>'required|unique:books', 'author'=>'required');
        $v = Validator::make($input, $rules);
        
        if($v->passes())
        {   
                $book = new Book();
                $book->fk_user=Auth::id();
                $book->fk_avi=$input['avi'];
                $book->title=$input['title'];
                $book->author=$input['author'];
                $book->publisher=$input['publisher'];
                $book->about=$input['about'];
                $book->save();
            
                $title = $input['title'];
                
                return View::make('book.success', ['title'=>$title]);
        }
        else{return Redirect::to('/book/create')->withInput();}
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