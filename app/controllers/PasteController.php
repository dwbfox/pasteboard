<?php

class PasteController extends \BaseController {

	public $restful = true;
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
		return View::make('pasteform');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	   $validation = array(
            'expire' => 'Required|Numeric',
            'Paste' => 'Required|AlphaNum'
        );

       $validator = Validator::make($validation);
       if ( $validator->fails()) {
            return 'Nastay. You failed. you Cray-cray';
       }

	}



	/**
	 * Display the specified resource.
	 *
	 * @param  str  $token
	 * @return Response
	 */
	public function show($token, $raw = false)
	{
        // Get the requested paste 
        $pasteModel = new Paste();
        $pasteResults = $pasteModel->getPasteByToken($token);

        $results = new StdClass;
        $results->paste = $pasteResults->paste;
        $results->created_at = $pasteResults->created_at;
        $results->token = $pasteResults->token;
        $results->private = $pasteResults->private;

        // Get the tags for the paste
        $tagModel = new Tag();

        // Attach it to the paste
        $tagResults =  $tagModel->getTagByPasteID($pasteResults->id);

        foreach ($tagResults as $key => $tag) {
            $results->tags[] = $tag->tag;
        }

        //$latestPastes = $pasteModel->getLatestPastes();

        // Render the view
        return View::make('showPaste', array('paste' => $results));
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