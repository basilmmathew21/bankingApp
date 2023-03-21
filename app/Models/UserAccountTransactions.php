<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserAccounts;

class UserAccountTransactions extends Model
{
    use HasFactory;

    protected $table = 'user_account_transaction';

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
