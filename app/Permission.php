<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model {

    protected $primaryKey = 'site_id';
    public $incrementing = false;
    protected $fillable = ['site_id', 'user_id', 'payments,', 'invoices', 'mark_as_paid'];
    public $timestamps = false;


    public function site() {
        $this->belongsTo(Site::class);
    }
}
