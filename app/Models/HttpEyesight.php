<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HttpEyesight extends Model
{
    use HasFactory;

    protected static ?string $recordTitleAttribute = 'name';

    protected $guarded = [];
}
