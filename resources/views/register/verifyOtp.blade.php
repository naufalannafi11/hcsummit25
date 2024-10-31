<x-layout>
    <main class="flex justify-center items-center w-full min-h-screen bg-green-900 rounded-md shadow-xl text-white mx-auto">
        <section class="w-30rem w-6/12 m-9 flex flex-col space-y-10">
            <div class="flex items-center justify-center mb-10">
                <h1 class="bg-yellow-600 py-2 text-2xl font-medium px-3 rounded-tl-2xl rounded-br-2xl">Verifikasi OTP</h1>
            </div>

            @if (session('error'))
                <div class="bg-red-600 text-white p-3 rounded">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('register.store') }}" method="POST" class="flex flex-col space-y-10 pointer-events-auto" autocomplete="off">
                @csrf

                <div class="w-full border-b-2 text-lg focus-within:border-yellow-400 duration-500 transform">
                    <input id="otp" name="otp" type="text" placeholder="Masukkan OTP" class="bg-transparent w-full focus:outline-none placeholder:italic @error('otp') is-invalid @enderror" required>
                    @error('otp')
                        <small class="btn btn-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="flex space-x-4">
                    <button type="submit" class="bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                        Verifikasi
                    </button>
                    <a href="{{ route('home') }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                        Kembali
                    </a> 
                </div>
            </form>
        </section>
    </main>
</x-layout>
