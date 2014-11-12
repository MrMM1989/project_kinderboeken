<?php

class SearchController extends \BaseController 
{
    public function index()
	{
		return View::make('error.error_404');
	}
    
    public function create($id)
	{
		return View::make('error.error_404');
	}

    public function store()
    {
        $input = Input::all();
        $avi = $input['avi'];
        
        if($input['searchword'] != '')
        {
            
            $results = DB::select
                       ("SELECT books.*, avis.name 
                         FROM books JOIN avis ON avis.id = books.fk_avi
                         WHERE title = '".$input['searchword']."' OR author = '".$input['searchword']."' AND fk_avi = '".$input['avi']."'");
            $searchword = $input['searchword'];
            
            return View::make('search.show', ['results'=>$results, 'searchword'=>$searchword]);
        }
        else
        {
            $results = DB::select
                       ("SELECT books.*, avis.name 
                         FROM books JOIN avis ON avis.id = books.fk_avi
                         WHERE fk_avi = '".$input['avi']."'");
            
            return View::make('search.show', ['results'=>$results]);
        }
    }
    
    public function show($id)
	{
		return View::make('error.error_404');
	}
    
    public function edit($id)
	{
		return View::make('error.error_404');
	}
    
    public function update($id)
	{
		return View::make('error.error_404');
	}
    
    public function destroy($id)
	{
		return View::make('error.error_404');
	}

}
