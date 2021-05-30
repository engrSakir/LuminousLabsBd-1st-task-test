<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderInfo extends Model
{
    protected $fillable = [
                'customer_full_name',
                'street',
                'company_name',
                'city',
                'zip_code',
                'vat_number',
                'phone_number',
                'default_language',
                'country',
                'website',
                'customer_tags',
                'email',
                'currency',
                'shipping_customer_full_name',
                'shipping_company_name',
                'shipping_street',
                'shipping_city',
                'shipping_zip_code',
                'shipping_country',
                'billing_customer_full_name',
                'billing_company_name',
                'billing_street',
                'billing_city',
                'billing_zip_code',
                'billing_country',
                ];
}
