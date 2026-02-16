<x-layout>
    <form action="{{ route('register') }}" method="post">
    @csrf

    <h2>Register for an Account</h2>

    <label for="name">Name:</label>
    <input 
        type="text"
        name="name"
        required
        value="{{ old('name') }}"
    >

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

    <label for="password_confirmation">Confirm Password:</label>
    <input 
        type="password"
        name="password_confirmation"
        required
    >

    <button type="submit" class="btn mt-4">Register</button>

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