<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use App\Models\cms;

class imageGallery extends Model
{
    use HasFactory;
    use SoftDeletes; 
    protected $guarded = [];

    public function cms(){
        return $this->belongsTo(cms::class);
    }

    public function resources(): BelongsTo{
        return $this->belongsTo(cms::class);
    }

    protected $casts = [
        'image' => 'array',
    ];
}
