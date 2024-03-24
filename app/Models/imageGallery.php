<?php

namespace App\Models;

use App\Models\cms;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
