<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteWalletService extends Model
{
    public function site() {
        return $this->belongsTo(Site::class);
    }

    public function wallet_service() {
        return $this->belongsTo(WalletService::class);
    }
}
