<x-layout>
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ninjas.store') }}" method="post" class="form-card">
        @csrf
        <h2>Create a New Ninja</h2>

        {{-- Ninja Name --}}
        <label for="name">Ninja Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>

        {{-- Ninja Strength --}}
        <label for="skill">Ninja Skill (0-100):</label>
        <input type="number" name="skill" id="skill" value="{{ old('skill') }}" required>

        {{-- Ninja Bio --}}
        <label for="bio">Biography:</label>
        <textarea name="bio" id="bio" rows="5" required>{{ old('bio') }}</textarea>

        {{-- Select a Dojo --}}
        <label for="dojo_id">Dojo:</label>
        <select name="dojo_id" id="dojo_id" required>
            <option value="" disabled selected>Select a dojo</option>
            @foreach ($dojos as $dojo )
                <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id') ? 'selected' : '' }}>{{ $dojo->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Create Ninja</button>
    </form>
</x-layout>