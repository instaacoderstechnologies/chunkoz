<?php

namespace App\Models;

use App\Models\Activity\UserInvite;
use App\Traits\ModelScopes;
use Spatie\Image\Manipulations;
use App\Traits\CreatedUpdatedBy;
use Carbon\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Activitylog\LogOptions;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Models\Role;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, LogsActivity, HasRoles, InteractsWithMedia;
    use CreatedUpdatedBy, ModelScopes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $fillable  = [
        'org_id','name','username','email','password','phone','image_url','role_id','is_active','status','createdby_userid','updatedby_userid'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Spatie Activity Log
     */
    public function getActivitylogOptions(): LogOptions // spatie model log options
    {
        return LogOptions::defaults()->logAll()->useLogName('User');
    }


    public function fullName()
    {
        return $this->first_name.' '.$this->last_name;
    }

    /** Relationship */
    public function otps()
    {
        return $this->hasMany(Otp::class);
    }

    public function userActivities()
    {
        return $this->hasMany(UserActivity::class);
    }


    /**
     * code for process applicaiton
     */

    public function org(){
        return $this->belongsTo(Org::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }







}
