<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your account</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-sky-100 via-blue-50 to-indigo-100">
    
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md">
            
            <!-- Register Card -->
            <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-2xl p-10">
                
                <!-- Icon -->
                <div class="flex justify-center mb-6">
                    <div class="bg-gray-50 rounded-2xl p-4">
                        <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                    </div>
                </div>

                <!-- Title & Description -->
                <h1 class="text-2xl font-bold text-center text-gray-900 mb-2">
                    Create your account
                </h1>
                <p class="text-center text-gray-500 text-sm mb-8 leading-relaxed">
                    Join us and start bringing your ideas to life.<br>It's free and takes just a minute
                </p>

                <!-- Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name Input -->
                    <div class="mb-4">
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <input 
                                id="name" 
                                type="text" 
                                name="name" 
                                value="{{ old('name') }}"
                                placeholder="Full Name"
                                required 
                                autofocus 
                                autocomplete="name"
                                class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border-0 rounded-xl text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-blue-400 focus:bg-white transition-all outline-none"
                            />
                        </div>
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Input -->
                    <div class="mb-4">
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <input 
                                id="email" 
                                type="email" 
                                name="email" 
                                value="{{ old('email') }}"
                                placeholder="Email"
                                required 
                                autocomplete="username"
                                class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border-0 rounded-xl text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-blue-400 focus:bg-white transition-all outline-none"
                            />
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                            <input 
                                id="password" 
                                type="password" 
                                name="password" 
                                placeholder="Password"
                                required 
                                autocomplete="new-password"
                                class="w-full pl-12 pr-12 py-3.5 bg-gray-50 border-0 rounded-xl text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-blue-400 focus:bg-white transition-all outline-none"
                            />
                            <button type="button" onclick="togglePassword('password', 'eye-icon-1')" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors">
                                <svg id="eye-icon-1" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password Input -->
                    <div class="mb-6">
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                            <input 
                                id="password_confirmation" 
                                type="password" 
                                name="password_confirmation" 
                                placeholder="Confirm Password"
                                required 
                                autocomplete="new-password"
                                class="w-full pl-12 pr-12 py-3.5 bg-gray-50 border-0 rounded-xl text-gray-900 placeholder-gray-400 focus:ring-2 focus:ring-blue-400 focus:bg-white transition-all outline-none"
                            />
                            <button type="button" onclick="togglePassword('password_confirmation', 'eye-icon-2')" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 transition-colors">
                                <svg id="eye-icon-2" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </svg>
                            </button>
                        </div>
                        @error('password_confirmation')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit"
                        class="w-full bg-gray-900 hover:bg-gray-800 text-white font-semibold py-3.5 rounded-xl transition-all duration-200 shadow-lg hover:shadow-xl mb-6"
                    >
                        Create Account
                    </button>

                    <!-- Login Link -->
                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            Already have an account? 
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-700 font-semibold transition-colors">
                                    Sign in here
                                </a>
                            @endif
                        </p>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <script>
        function togglePassword(inputId, iconId) {
            const passwordInput = document.getElementById(inputId);
            const eyeIcon = document.getElementById(iconId);
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                `;
            }
        }
    </script>

</body>
</html>