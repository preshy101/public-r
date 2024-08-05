<?php

namespace App\Models;

use App\Models\TrainingContent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function tContent(){
        return $this->hasMany(TrainingContent::class, 'training_id');
       }
}
