<section class="bg-white p-6 rounded-lg shadow">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Excluir Conta') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            Uma vez excluída sua conta, todos os dados serão permanentemente removidos. Esta ação não pode ser desfeita.
        </p>
    </header>

    <form method="post" action="{{ route('profile.destroy') }}" class="mt-6 space-y-6">
        @csrf
        @method('delete')

        {{-- Campo para confirmação de senha --}}
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
            <input id="password" name="password" type="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Confirme sua senha" required>
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Botão --}}
        <div class="flex items-center gap-4">
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                Excluir Conta
            </button>

            @if (session('status') === 'account-deleted')
                <p class="text-sm text-green-600">Conta excluída com sucesso.</p>
            @endif
        </div>
    </form>
</section>