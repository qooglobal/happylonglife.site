<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleAds extends Model
{
    use HasFactory;
    protected $table = 'google_ads';
    protected $fillable = ['target_url', 'attack', 'last_seen_at'];
}
