<?php

namespace Askedio\Tests\App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use \Illuminate\Database\Eloquent\SoftDeletes;
    use \Askedio\SoftCascade\Traits\SoftCascadeTrait;

    protected $fillable = ['name', 'email', 'password'];

    protected $softCascade = ['profiles'];

    public function profiles()
    {
        return $this->hasMany('Askedio\Tests\App\Profiles');
    }
}
