<?php

class Post extends Eloquent
{
    protected $table = 'posts';

    public static $rules = array(
    	'title' => 'required|max:25',
    	'body' => 'required'
    	);
}