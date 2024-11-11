<x-layout>
    <h1 class="title">
        Register a new account
    </h1>


    <div class="mx-auto max-w-sm card">
        <form action="{{ route('register') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label for = 'name'>Name</label>
                <input type="text" name="name" id="name" class="input @error('name') inputerror @enderror"
                    value=" {{ old('name') }}">
                @error('name')
                    <p class="error">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" id="username"
                    class="input @error('username') inputerror @enderror" value="{{ old('username') }}">
                @error('username')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="input @error('email') inputerror @enderror"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for = 'password'>Password</label>
                <input type="password" name="password" id="password"
                    class="input @error('password') inputerror @enderror">
                @error('password')
                    <p class="error">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="mb-4">
                <label for = 'password_confirmation'>Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="input">

            </div>

            <button class="btn" type="submit">Register</button>
        </form>
    </div>
</x-layout>
