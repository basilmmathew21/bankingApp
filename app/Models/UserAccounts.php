<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\UserAccountTransactions;
use App\Models\UserAccountLoan;
use App\Models\UserAccountLoanTransactions;

class UserAccounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'account_no',
        'account_current_amount'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function transactions()
    {
        return $this->hasMany(UserAccountTransactions::class);
    }

    public function loans()
    {
        return $this->hasMany(UserAccountLoan::class);
    }

    public function loanTransactions()
    {
        return $this->hasMany(UserAccountLoanTransactions::class);
    }
}
