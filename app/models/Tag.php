<?php


class Tag extends Eloquent {

    protected $table = 'tags';

    public function paste() {
        return $this->belongsTo('Paste', 'paste_id');
    }

    public function getPastesByTagID($id, $count=10) {
        Debugbar::info(sprintf('Supplied ID: %s', $id));
		$paste = $this->with('paste')
                ->where('id', $id)
                ->take($count)
                ->get();
        return $paste;
  	}	

}
