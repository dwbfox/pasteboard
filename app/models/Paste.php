<?php


class Paste extends \Eloquent {

    protected $table = 'pastes';
    protected $fillables = array('title, token, expire, created_at, updated_at');


    
    public function tags() {
        return $this->hasMany('Tag');
    }

    /**
     * [getPasteByToken description]
     * @param  [type] $token [description]
     * @return [type]        [description]
     */
    public function getPasteByToken($token) {
        $result = $this->with('tags')
        ->where('token',$token)->firstOrFail();
        return $result;
    }

    /**
     * Return the top 5 (by default) latest public pastes
     * @param  integer $count Number of pastes to return
     * @return StdClass  The paste object
     */
    public function getLatestPastes($count = 5) {
        $pastes =  $this->with('tags')
                ->where('private', '!=', 1)
                ->take($count)
                ->orderBy('created_at', 'DESC')
                ->get();
        return $pastes;
    }


}
