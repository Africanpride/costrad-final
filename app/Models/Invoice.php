<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Invoice extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'participant_id',
        'transaction_id',
        'institute_id',
        'totalAmount',// initial amount being paid as per institute
        'outstandingAmount', // deduct amount paid from total
        'status'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
    public function getRouteKeyName()
    {
        return 'id';
    }

    #Relationships
    public function participant() {
        return $this->belongsTo(User::class, 'participant_id');
    }

    public function transactions() : BelongsToMany
    {
        return $this->belongsToMany(Transaction::class,'invoices_transactions')->withTimeStamps();
    }
    // public function transactions()
    // {
    //     return $this->hasMany(Transaction::class,'invoice_id');
    // }

    public function institute()
    {
        return $this->belongsTo(Institute::class, 'institute_id');

    }
    // public function institutes()
    // {
    //     return $this->hasManyThrough(Institute::class, User::class,'id', 'participant_id', 'id');
    // }



}
