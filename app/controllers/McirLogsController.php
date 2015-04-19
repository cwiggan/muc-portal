<?php

class McirLogsController extends \BaseController {
        function __construct() {
           
            $this->beforeFilter('auth');
            
        }
	/**
	 * Display a listing of mcirlogs
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::user()->can("manage_posts"))
		{
			$mcirlogs = Mcirlog::all();	
		}else{
			$mcirlogs = Mcirlog::where('user_id', Auth::user()->id)->get();
		}
		$locs = Location::all();


		return View::make('mcirlogs.index', compact('mcirlogs','locs'));
	}

	/**
	 * Show the form for creating a new mcirlog
	 *
	 * @return Response
	 */
	public function create()
	{
		$locs = Location::lists('name', 'id'); 
		return View::make('mcirlogs.create',compact('locs'));
	}

	/**
	 * Store a newly created mcirlog in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$validator = Validator::make($data = Input::all(), Mcirlog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
		$data['user_id'] = Auth::user()->id;
		//dd($data);
		Mcirlog::create($data);

		return Redirect::route('mcir.index');
	}

	/**
	 * Display the specified mcirlog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		$mcirlog = Mcirlog::findOrFail($id);

		return View::make('mcirlogs.show', compact('mcirlog'));
	}

	/**
	 * Show the form for editing the specified mcirlog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mcirlog = Mcirlog::find($id);
		$locs = Location::lists('name', 'id'); 

		return View::make('mcirlogs.edit', compact('mcirlog','locs'));
	}
	/**
	 * Show the form for editing the specified mcirlog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getByLocation($id)
	{
		if(Auth::user()->can("manage_posts")){
			
			$mcirlogs = Location::find($id)->mlogs;	
		}else{
			
			$mcirlogs = Location::find($id)->mlogs()->where('user_id', Auth::user()->id)->get();
		
		}
		$locs = Location::lists('name', 'id'); 

		return View::make('mcirlogs.loc', compact('mcirlogs','locs'));
	}
	/**
	 * Show the form for editing the specified mcirlog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getLocation()
	{
		$locs = Location::all();
		//$locs = Location::lists('name', 'id'); 
		return View::make('mcirlogs.loc', compact('locs'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$mcirlog = Mcirlog::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Mcirlog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$mcirlog->update($data);

		return Redirect::route('mcir.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Mcirlog::destroy($id);

		return Redirect::route('mcir.index');
	}

}