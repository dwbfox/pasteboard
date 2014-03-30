<?php


class Tag extends Eloquent {

    protected $table = 'tags';

    public function paste() {
        $this->belongsTo('Paste');
    }

    public function getTagByPasteID($id) {
        return Tag::where('paste_id', $id)->get();
    }

}