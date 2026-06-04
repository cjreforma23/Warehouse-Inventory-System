@extends('layouts.app')

@section('title', 'Sign In - BrandName')

@section('content')
<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8 bg-slate-50">
    <div class="sm:mx-auto w-full max-w-md">
        <h2 class="text-center text-3xl font-extrabold text-slate-900 tracking-tight">
            Sign in to your account
        </h2>
        <p class="mt-2 text-center text-sm text-slate-600">
            Or
            <a href="#" class="font-medium text-red-600 hover:text-red-500 transition">
                start your 14-day free trial
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto w-full max-w-md">
        <div class="bg-white py-8 px-4 shadow-sm sm:rounded-lg sm:px-10 border border-slate-200">
            
            @if ($errors->any())
                <div class="mb-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-md">
                    <div class="flex">
                        <div class="text-sm text-red-700">
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label name="email" class="block text-sm font-medium text-slate-700">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}"
                            class="block w-full px-3 py-2 border border-slate-300 rounded-md shadow-xs placeholder-slate-400 focus:outline-hidden focus:ring-2 focus:ring-red-500 focus:border-red-500 sm:text-sm">
                    </div>
                </div>

                <div>
                    <label name="password" class="block text-sm font-medium text-slate-700">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-full px-3 py-2 border border-slate-300 rounded-md shadow-xs placeholder-slate-400 focus:outline-hidden focus:ring-2 focus:ring-red-500 focus:border-red-500 sm:text-sm">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="h-4 w-4 text-red-600 focus:ring-red-500 border-slate-300 rounded-sm">
                        <label for="remember" class="ml-2 block text-sm text-slate-900 select-none">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-red-600 hover:text-red-500 transition">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-xs text-sm font-semibold text-white bg-red-600 hover:bg-red-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-150">
                        Sign in
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection