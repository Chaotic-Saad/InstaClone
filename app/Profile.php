<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = [];
  
  public function profileImage(){
    
      $imagePath =  ($this->image) ?  $this->image :'profile/WwsBe2Lz2LVLLJy1maMAEMszonDURXGYUsap6flm.png';

      return '/storage/' . $imagePath;
  }

  public function followers()
  {
      return $this->belongsToMany(User::class);
  }

  public function user()
  {
      return $this->belongsto(User::class); //relation 1 to 1
  }
  
}
