<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_type',
        'unique_id',
        'address',
        'company_name',
        'trading_name',
        'phone_number',
        'address_line_one',
        'address_line_two',
        'city',
        'county',
        'eircode',
        'priority',
        'exemption_reason',
        'collection_type',
        'retailer_type',
    ];
}
