<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\UserAccounts;
use Models\UserAccountLoanTransactions;

class UserAccountLoan extends Model
{
    use HasFactory;

    protected $table = 'user_account_loan';

    protected $fillable = [
        'user_account_id',
        'loan_no',
        'loan_capital_amount',
        'loan_current_amount_to_pay',
        'status'];

    public function account()
    {
        return $this->belongsTo(UserAccounts::class);
    }

    public function loanAccountTransactions()
    {
        return $this->hasMany(UserAccountLoanTransactions::class);
    }
}
