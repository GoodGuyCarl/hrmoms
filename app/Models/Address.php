<?php

namespace App\Models;

use App\Enums\AddressType;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'datasheet_id',
        'type',
        'house_block_lot_no',
        'street',
        'subdivision_village',
        'barangay',
        'city_municipality',
        'province',
        'zip_code',
    ];

    public function datasheet()
    {
        return $this->belongsTo(Datasheet::class);
    }

    public function scopeResidential($query)
    {
        return $query->where('type', AddressType::RESIDENTIAL);
    }

    public function scopePermanent($query)
    {
        return $query->where('type', AddressType::PERMANENT);
    }
}
