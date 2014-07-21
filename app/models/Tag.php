<?php


class Tag extends Eloquent {

    protected $table = 'tags';

    public function pastes() {
        return $this->belongsTo('Paste', 'paste_id');
    }

    public function getPastesByTagName($tag, $count=10) {
		$paste = $this->with('pastes')->where('tag', $tag)->take($count)->get();
        return $paste;
  	}	

}
