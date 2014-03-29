<?php


class Paste extends \Eloquent {

    protected $table = 'pastes';

    /**
     * [getPasteByToken description]
     * @param  [type] $token [description]
     * @return [type]        [description]
     */
    public function getPasteByToken($token) {
        return Paste::where('token',$token)->firstOrFail();
    }

    public function getPastesByTagID($id, $count=10) {
        return Paste::where('tags.id', $id) 
        ->join('tags', 'pastes.id', '=', 'tags.paste_id')
        ->orderBy('pastes.created_at', 'desc')
        -paginate(15)
        ->take($count)
        ->get();
    }

    /**
     * Return the top 5 (by default) latest public pastes
     * @param  integer $count Number of pastes to return
     * @return StdClass  The paste object
     */
    public static function getLatestPastes($count = 5) {
        return Paste::where('private', '!=', 1)
        ->join('tags', 'pastes.id', '=', 'tags.paste_id')
        ->orderBy('pastes.created_at', 'desc')
        ->take($count)
        ->get();
    }

}