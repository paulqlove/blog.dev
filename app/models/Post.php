<?php

use Carbon\Carbon;
class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = array(
    	'title' => 'required|max:25',
    	'body' => 'required'
    	);
   
    public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

	public function getupDatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}
	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = ucfirst($value);
	}
	public function user()
	{
		return $this->belongsTo('User');
	}
	public function is_uploaded_file($file)
		{

			if (Input::hasFile('image')) {
				$uploadPath = public_path() . '/uploads';
				$fileName = $this->id . '-' . Input::file('image')->getClientOriginalName();
				
				Input::file('image')->move($uploadPath, $fileName);

				$this->img_url = '/uploads/' . $fileName;

				$this->save();
			}
		}
}