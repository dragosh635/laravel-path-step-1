<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {
    use HasFactory;

    protected $guarded = [];

    /**
     * From the Profile model, get the user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo( User::class );
    }

    public function profileImage() {
        return $this->image ? '/storage/' . $this->image : 'https://www.pngitem.com/pimgs/m/35-350426_profile-icon-png-default-profile-picture-png-transparent.png';
    }

    public function followers(){
        return $this->belongsToMany( User::class );
    }
}
