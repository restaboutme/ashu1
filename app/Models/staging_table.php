<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staging_Table extends Model
{
    use HasFactory;
    protected $table = "Staging_Table";
    protected $fillable = [
        'Source',
        'Subject',
        'OrderDate',
        'Price',
        'Earning',
        'Email',
        'Item',
        'Claim',
        'Name',
        'OrderID',
        'To',
        'Decision',
        'Granted/Denied',
        'Date',
        'Subtotal',
        'Discount',
        'GiftCard',
        'Refund_Value',
        'Total_Refund'
    ];
    public $timestamps = false;
}
