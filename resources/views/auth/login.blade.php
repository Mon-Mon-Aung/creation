<x-layout>
    <form action="{{ route('login') }}" method="post">
    @csrf

    <h2>Log In to Your Account</h2>

    <label for="email">Email:</label>
    <input 
        type="email"
        name="email"
        required
        value="{{ old('email') }}"
    >

    <label for="password">Password:</label>
    <input 
        type="password"
        name="password"
        required
    >

    <button type="submit" class="btn mt-4">Log in</button>

    <!-- validation errors -->
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    </form>
</x-layout>