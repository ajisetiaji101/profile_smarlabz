<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Tentukan apakah user diizinkan membuat request ini.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Dapatkan aturan validasi.
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Coba untuk mengotentikasi kredensial request.
     */
    public function authenticate(): void
    {
        // Terapkan rate limiting
        // $this->ensureIsNotRateLimited();

        // Query database dan otentikasi
        if (! Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            // RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        // RateLimiter::clear($this->throttleKey());
    }

    // Metode lain...
}