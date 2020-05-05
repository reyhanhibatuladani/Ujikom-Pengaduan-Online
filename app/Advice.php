<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    protected $table = 'advices';
    protected $fillable = ['report_id'];

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function reports()
    {
        return $this->belongsTo('App\Report', 'report_id');
    }
}
