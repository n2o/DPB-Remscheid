<?php namespace App\Models;

class Article extends \Eloquent {

    protected $table = 'articles';
    protected $guarded = array();  // Important

    public function author() {
        return $this->belongsTo('User');
    }

}
