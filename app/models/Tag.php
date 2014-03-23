<?php


class Tag extends Eloquent {

    protected $table = 'tags';

    public function getTagByName($tag) {
        $paste = Paste::where('token', '=', $token);
    }

    public function getTagByID($id) {
        return Tag::find($id)->firstOrFail();
    }

}