<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = ['question_1','question_2','question_3','question_4','question_5','question_6','question_7','question_8','question_9','question_10','question_11','question_12','question_13','question_14','registration_id'];
}
