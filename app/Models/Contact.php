<?php

namespace App\Models;

use App\Mail\MailForm;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [
        'name', 
        'email', 
        'subject', 
        'message'
    ];

    public static function boot() {
        parent::boot();
        static::created(function ($item) {
            $adminEmail = "khasanovapti@gmail.com";
            Mail::to($adminEmail)->send(new MailForm($item));
        });
    }
}
