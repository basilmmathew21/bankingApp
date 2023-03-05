<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\UserAccounts;

class UserAccountTransactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_account_id',
        'transaction_type',
        'amount',
        'status'];

    public function accounts()
    {
        return $this->belongsTo(UserAccounts::class);
    }

   
}
