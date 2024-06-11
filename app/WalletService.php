<?php

namespace App;

use App\Http\Services\LiteCoinWalletService;
use Illuminate\Database\Eloquent\Model;

class WalletService extends Model
{

    public const WALLET_SERVICES = [
        1 => \App\Http\Services\WalletService::class,
        2 => LiteCoinWalletService::class
    ];

    public function invoice() {
        return $this->hasMany(Invoice::class);
    }

    public function site_wallet_services() {
        return $this->hasMany(SiteWalletService::class);
    }

    public function scopeActive($query) {
        return $query->where('active', true);
    }
}
