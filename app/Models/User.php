<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected function password(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value,
            set: fn ($value) => Hash::make($value),
        );
    }

/* These function names may or may not be called, but they get called in the controller */
    public function incomes(): HasMany {
        return $this->hasMany(\App\Models\Income::class);    } 
    public function futureIncomes(): HasManyThrough {
        return $this->hasManyThrough(\App\Models\FutureIncome::class, \App\Models\Income::class);}
    public function actualIncomes(): HasMany {
        return $this->hasMany(
            \App\Models\ActualIncome::class);}

    public function fixedExpenses(): HasMany {
        return $this->hasMany(\App\Models\FixedExpense::class);}
    public function futureFixedExpenses(): HasManyThrough {
        return $this->hasManyThrough(\App\Models\FutureFixedExpense::class, \App\Models\FixedExpense::class);}
    public function actualFixedExpenses(): HasMany {
            return $this->hasMany(
                \App\Models\ActualFixedExpense::class);}

    public function variableExpenses(): HasMany {
        return $this->hasMany(\App\Models\VariableExpense::class);}
    public function futureVariableExpenses(): HasManyThrough {
        return $this->hasManyThrough(\App\Models\FutureVariableExpense::class, \App\Models\VariableExpense::class);}
    public function actualVariableExpenses(): HasMany {
        return $this->hasMany(
            \App\Models\ActualVariableExpense::class);}
}
