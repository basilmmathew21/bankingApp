<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\UserAccounts;
use Models\UserAccountLoan;

class UserAccountLoanTransactions extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_account_id',
        'user_account_loan_id',
        'payment_amount',
        'status'];

    public function accounts()
    {
        return $this->belongsTo(UserAccounts::class);
    }    

    public function userLoans()
    {
        return $this->belongsTo(UserAccountLoan::class);
    }
}
