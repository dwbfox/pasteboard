<?php


class Tag extends Eloquent {

    protected $table = 'tags';


    public function getTagByPasteID($id) {
        return Tag::where('paste_id', $id)->get();
    }

}