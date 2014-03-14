<?php namespace App\Models;

class Page extends \Eloquent {

    protected $table = 'pages';
    protected $guarded = array();  // Important

    public function author() {
        return $this->belongsTo('User');
    }

}
