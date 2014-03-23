<?php


class Paste extends Eloquent {

    protected $table = 'pastes';

    public function getPasteByToken($token) {
        var_dump($token);
        return Paste::where('token',$token)->first();
    }

}