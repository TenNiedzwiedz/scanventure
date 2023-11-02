<x-layout>
    <x-slot name="header">
        {{ __('Logowanie') }}
    </x-slot>

    <x-panel-narrow class="flex flex-col items-center pt-16 pb-16">
        <x-application-logo class="block h-12 w-auto" />

        <div class="mt-12 mb-5 text-2xl text-white font-bold">
            Zaloguj się!
        </div>
        <div class='w-full'>
            <x-splade-form>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-white">Adres email</label>
                    <input v-model="form.email" type="email" id="email" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-50 border-gray-600 placeholder-gray-400 text-black focus:ring-pink-500 focus:border-pink-500" required>
                    <x-splade-errors>
                        <span v-if="errors.has('email')" v-text="errors.first('email')" class="text-sm text-red-500"/>
                    </x-splade-errors>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-white">Hasło</label>
                    <input v-model="form.password" type="password" id="password" class="border text-sm rounded-lg block w-full p-2.5 bg-gray-50 border-gray-600 placeholder-gray-400 text-black focus:ring-pink-500 focus:border-pink-500" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="text-white py-2 px-4 rounded-lg bg-pink-500 hover:bg-pink-600 transition">Zaloguj</button>
                </div>
            </x-splade-form>
        </div>
    </x-panel-narrow>
</x-layout>