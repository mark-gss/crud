<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    /* this is initialized if the table name in the */
    /* database is different in the name of its class here */
    // protected $table = "customer_table"; 

    use Notifiable;
    
    protected $fillable = [
        "name",
        "address",
        "phoneNumber"
    ];
}
