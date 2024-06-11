<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {
    public static $_STATUS_NOT_PAID = 0;
    public static $_STATUS_PAID = 1;
    public static $_STATUS_NOT_PAID_2_HOURS = 2;
    public static $_STATUS_NOT_PAID_DAY = 3;
    public static $_STATUS_NOT_PAID_TWO_WEEKS = 4;

    protected $fillable = ['invoice_no', 'user_id', 'amount_original', 'ip', 'amount', 'duration', 'username'];


    public function site() {
        return $this->belongsTo(Site::class, 'site_id');
    }

    public function wallet_service() {
        return $this->belongsTo(WalletService::class);
    }

    public function incoming_payments() {
        return $this->hasMany(IncomingPayment::class, 'invoice_id')->orderBy('timereceived', 'DESC');
    }



    public function getRouteKeyName() {
        return 'hash';
    }

    public function scopeNotPaid($query) {
        return $query->where('status', '0')->PaymentSelected();
    }

    public function scopeExpiredDay($query) {
        return $query->where('status', '2')->PaymentSelected();
    }

    public function scopeExpiredWeek($query) {
        return $query->where('status', '3')->PaymentSelected();
    }

    public function scopePaid($query) {
        return $query->where('status', '1')->PaymentSelected();
    }

    public function scopeNotNotified($query) {
        return $query->where('status', '1')->PaymentSelected()->where('api', '0');
    }

    public function scopePaymentSelected($query) {
        return $query
            ->whereNotNull('amount')
            ->whereNotNull('wallet')
            ->whereNotNull('wallet_service_id')
            ->where("created_at", ">=", date("Y-m-d H:i:s", strtotime("-1 week")));
    }

    public function scopeOrdered($query) {
        $sortBy = \request()->input('sort_by', 'created_at');
        $order = \request()->input('order', 'DESC');
        return $query->orderBy($sortBy, $order);
    }

    public function scopeCurrent($query) {
        return $query->whereHas('site', function ($query) {
            $query->Current();
        });
    }

    public function scopeCurrentWithPermissions($query, $field) {
        return $query->whereHas('site', function($query) use ($field) {
            $query->CurrentWithPermissions($field);
        });
    }
}
