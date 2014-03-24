<?php


class Paste extends \Eloquent {

    protected $table = 'pastes';

    public function getPasteByToken($token) {
        return Paste::where('token',$token)->firstOrFail();
    }

}