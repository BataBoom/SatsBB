<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


class IncomingPayment extends Model
{

    protected $fillable = ['amount','wallet', 'txid', 'timereceived'];

    public function invoice() {
        return $this->belongsTo(Invoice::class,'invoice_id');
    }

    public function scopeNotPaid($query) {
        return $query->whereHas('invoice', function($q) {
           $q->notPaid();
        });
    }

    public function scopeExpiredDay($query) {
        return $query->whereHas('invoice', function($q) {
            $q->expiredDay();
        });
    }

    public function scopeExpiredWeek($query) {
        return $query->whereHas('invoice', function($q) {
            $q->expiredWeek();
        });
    }

    public function scopePaid($query) {
        return $query->whereHas('invoice', function($q) {
            $q->Paid();
        });
    }

    public function scopeOrderedDesc($query) {
        return $query->orderBy('timereceivec','DESC');
    }
}
