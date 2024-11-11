<x-layout>
    <form action="{{ route('login') }}" method="POST">
        @csrf 
        <div class="mx-auto max-w-sm card mb-6 p-16">
            <h1 class="title">Login Page</h1>

            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="input @error('username') inputerror @enderror"
                    value="{{ old('username') }}">
                @error('username')
                    <p class="error">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="input @error('password') inputerror @enderror">
                @error('password')
                    <p class="error">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            @if ($errors->has('login'))
            <div class="mb-4" style="color: red">
                <p>{{ $errors->first('login') }}</p>
            </div>
        @endif
            <button type="submit" class="btn">Login</button>
        </div>
    </form>
</x-layout>
