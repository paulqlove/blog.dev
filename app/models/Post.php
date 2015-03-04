<?php

use Carbon\Carbon;
class Post extends BaseModel
{
    protected $table = 'posts';

    public static $rules = array(
    	'title' => 'required|max:25',
    	'body' => 'required'
    	);
   
  
	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = ($value);
	}
	public function user()
	{
		return $this->belongsTo('User');
	}
	public function uploadFile($file)
		{
			


				$uploadPath = public_path() . '/uploads';
				$fileName = $this->id . '-' . $file->getClientOriginalName();
				
				$file->move($uploadPath, $fileName);

				$this->img_url = '/uploads/' . $fileName;

				$this->save();
			
		}
}