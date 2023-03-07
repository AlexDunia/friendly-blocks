<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    // use HasFactory;
    protected $fillable = [
        'Title',
        'Subtitle',
        'picture',
        'Contentone',
        'Heading',
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

}
