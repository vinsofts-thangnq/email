<?php

namespace Thangbeo\Email;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = "email_templatess";
	
	protected $fillable = ['title','type','subject','text','from_address','user_id','color'];

}
