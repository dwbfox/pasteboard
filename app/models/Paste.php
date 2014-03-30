<?php


class Paste extends \Eloquent {

    protected $table = 'pastes';

    public function tags() {
        return $this->hasMany('Tag', 'paste_id');
    }

    /**
     * [getPasteByToken description]
     * @param  [type] $token [description]
     * @return [type]        [description]
     */
    public function getPasteByToken($token) {
        $result = $this->where('token',$token)->firstOrFail();
        return $result;
    }

    public function getPastesByTagID($id, $count=10) {
        return $this->where('tags.id', $id) 
        ->join('tags', 'pastes.id', '=', 'tags.paste_id')
        ->orderBy('pastes.created_at', 'desc')
        ->paginate(15)
        ->take($count)
        ->get();
    }

    /**
     * Return the top 5 (by default) latest public pastes
     * @param  integer $count Number of pastes to return
     * @return StdClass  The paste object
     */
    public function getLatestPastes($count = 5) {
        return $this->whereHas('tags', function($query) use ($count) {
            $query->where('private', '!=', 1)
                    ->orderBy('created_at', 'desc')
                     ->take($count);
        })->get();
    }

}