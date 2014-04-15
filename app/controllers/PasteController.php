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
        return view::make('paste.form');
    }

    /**
     * Handle for a paste event
     * @return [type]
     */
    public function fork($token) {
        $paste = new Paste();
        $paste = $paste->getPasteByToken($token);
        view::make('fork', $paste);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        if (Input::has('paste')) {
            Debugbar::info('Paste data found');
        }
        
        $rules = array(
            'private' => 'numeric|required',
            'title' => 'max:46|required|alpha_num',
            'paste' =>  'required',
            'expire' => 'required|numeric',
            'tags'  => 'max:6|alpha_num'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            Debugbar::warning( Input::all());
            return View::make('paste.form')->withErrors($messages);
        };

        $new_paste = new Paste();
        $new_paste->title = Input::get('title');
        $new_paste->token = Str::random(40);
        $new_paste->delete_token = Str::random(40);
        $new_paste->paste = Input::get('paste');

        $new_paste->private = Input::get('private');
        date_default_timezone_set('UTC');
        $expire_time = date('Y-m-d H:i:s', strtotime(sprintf('now + %s minutes', Input::get('expire'))));
        $new_paste->expire = $expire_time;




        if (!$new_paste->save()) {
            Debugbar::error('Saving failed!');
        }
        // Check if tags are set
        if (Input::has('hidden-tags')) {
            $tags = explode(' ', Input::get('hidden-tags'));
            foreach ($tags as $key => $tag) {
                $tag_model = new Tag();
                $tag_model->tag = $tag;
                $tag_model->paste_id = $new_paste->id;
                $new_paste->tags()->save($tag_model);
            }
        }

        if ($new_paste->id) {
          return Redirect::to('show')->with('token', $new_paste->token);
        }

        return view::make('paste.form', array('page_title' => 'Create a paste'));

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
        return View::make('paste.show', array('page_title' => $results->title, 'paste' => $results));
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
