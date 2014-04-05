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


	public function create() {
	   $validation = array(
            'expire' => 'Required|Numeric',
            'Paste' => 'Required|AlphaNum'
        );

       $validator = Validator::make($validation);
       if ( $validator->fails()) {
            return 'Nastay. You failed. you Cray-cray';
       }

		return View::make('pasteform');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


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
        $results = $pasteModel->getPasteByToken($token);


        //$latestPastes = $pasteModel->getLatestPastes();

        // Render the view
        return View::make('showPaste', array('page_title' => $results->title, 'paste' => $results));
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
