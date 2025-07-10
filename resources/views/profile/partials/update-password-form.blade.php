<section class="bg-white p-6 rounded-lg shadow">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Atualizar Senha') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            Certifique-se de que sua nova senha seja forte e diferente da anterior.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        {{-- Senha atual --}}
        <div>
            <label for="current_password" class="block text-sm font-medium text-gray-700">Senha atual</label>
            <input id="current_password" name="current_password" type="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" autocomplete="current-password" required>
            @error('current_password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Nova senha --}}
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Nova senha</label>
            <input id="password" name="password" type="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" autocomplete="new-password" required>
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Confirmar nova senha --}}
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar nova senha</label>
            <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" autocomplete="new-password" required>
        </div>

        {{-- Botão --}}
        <div class="flex items-center gap-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Atualizar senha
            </button>

            @if (session('status') === 'password-updated')
                <p class="text-sm text-green-600">Senha atualizada com sucesso.</p>
            @endif
        </div>
    </form>
</section>
