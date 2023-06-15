<?php

namespace App\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class blogs extends Model
{
    // use HasFactory;
    protected $fillable = [
        'Title',
        'Subtitle',
        'picture',
        'Contentone',
        'Heading',
        'user_id',
        'Contenttwo',
        'Conclusion',
        'Contentthree',
    ];

    public function scopeFilter($query, array $filters){
        // Then we kick kick off with the condition.
        if($filters['search'] ?? false){
            $query->where('Title', 'like', '%' . $filters['search'] . '%');
        }
    }

  //  This blog belongs to this user.  
  public function ouruser(){
    return $this->belongsTo(User::class, 'user_id');
  } 

}
