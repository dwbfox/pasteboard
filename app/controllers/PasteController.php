<?php



class PasteController extends BaseController {

    public function getPastesByTag($tag) {}

    /**
     * Create paste based on submmited form
     * @return [void] [description]
     */
    public function createPaste() {
        return View::make('pasteForm');
    }


/**
     * [updatePaste description]
     * @param  [type] $token [description]
     * @return [type]        [description]
     */
    public function updatePaste($id) {}


    /**
     * Show a paste based on the supplied token_name(token)
     * @param  [string] $token [description]
     * @return [void]        
     */
    public function getPaste($token) {
        $paste = new Paste();
        $p = $paste->getPasteByToken($token);
        return View::make('showPaste')->with('paste', $p);
    }


    /**
     * Delete the paste matching the specified token
     * @param  [type] $paste_id [description]
     * @return [void]           [description]
     */
    public function deletePaste($id) {}
}