<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Startups extends Model
{
  protected $fillable=[
    'startup_logo','startup_title','startup_description',
    'startup_color','startup_pitch','startup_image',
    'startup_idea','startup_documents','startup_team',
    'startup_video','category','country','startup_direction',
    'startup_status','startup_check','favor','startup_must','facebook','twitter',
    'user_id','video_confirmation'
   ];
}
