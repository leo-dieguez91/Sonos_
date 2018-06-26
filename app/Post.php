<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

  protected $table = 'posts';
  protected $primaryKey = 'id';
  protected $guarded = [];
  protected $fillable = [
      'user_id','comment','picture'
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }

}
