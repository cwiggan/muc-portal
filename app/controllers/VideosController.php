<?php

class VideosController extends \BaseController {

        function __construct() {
           
            $this->beforeFilter('auth');
            
        }	
	
	/**
	 * Display a listing of videos
	 *
	 * @return Response
	 */
	public function index()
	{
		$videos = Video::all();

		return View::make('videos.index', compact('videos'));
	}

	/**
	 * Show the form for creating a new video
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('videos.create');
	}

	/**
	 * Store a newly created video in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		
		$validator = Validator::make($data = Input::all(), Video::$rules);


		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$file = Input::file('image');
		 
		$destinationPath = public_path().'/uploads/';
		$filename = str_random(12).'_'.Input::file('image')->getClientOriginalName();;
		//$filename = $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension(); 
		$upload_success = Input::file('image')->move($destinationPath, $filename);
		
		$data['image'] = $filename;
		Video::create($data);

		return Redirect::route('videos.index');
	}

	/**
	 * Display the specified video.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$video = Video::findOrFail($id);

		return View::make('videos.show', compact('video'));
	}

	/**
	 * Show the form for editing the specified video.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$video = Video::find($id);

		return View::make('videos.edit', compact('video'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$video = Video::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Video::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$video->update($data);

		return Redirect::route('videos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Video::destroy($id);

		return Redirect::route('videos.index');
	}

}