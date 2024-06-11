<?php

namespace App;

use App\Providers\OwnerProvider;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{

    protected $fillable = ['user_id', 'name', 'site_url','return_url', 'callback_url'];
    public $primaryKey = 'id';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function invoices() {
        return $this->hasMany(Invoice::class);
    }

    public function paidInvoices() {
        return $this->hasMany(Invoice::class)->where('status', 1);
    }


    public function permissions() {
        return $this->hasMany(Permission::class);
    }

    public function payment_services() {
       return $this->hasMany(SiteWalletService::class);
    }

    public function payment_methods() {
        return $this->hasManyThrough(WalletService::class,SiteWalletService::class, 'site_id', 'id', 'id','wallet_service_id');
    }

    public function scopeCurrent($query) {
        return $query->where('user_id', OwnerProvider::getOwner());
    }

    public function scopeCurrentWithPermissions($query, $field) {
        return $query->where('user_id', OwnerProvider::getOwner())->whereHas('permissions', function($q) use ($field) {
            $q->where('user_id', auth()->user()->id)->where($field, 1);
        });
    }
}
