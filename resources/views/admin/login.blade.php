<x-layout>
    <main class="flex justify-center items-center w-full min-h-screen bg-green-900 rounded-md shadow-xl text-white">
        <section class="w-full max-w-md mx-6 flex flex-col space-y-8">
            <h1 class="bg-yellow-600 py-3 text-2xl font-medium text-center rounded-tl-2xl rounded-br-2xl">Admin Login</h1>
            
            <form action="{{ route('admin.authenticate') }}" method="POST" class="flex flex-col space-y-6">
                @csrf
                
                <div>
                    <label for="email" class="block text-white mb-1">Email:</label>
                    <input type="email" name="email" id="email" required class="w-full bg-transparent border-b-2 border-white text-white focus:outline-none focus:border-yellow-500" placeholder="Enter your email" autocomplete="off">
                    @error('email')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-white mb-1">Password:</label>
                    <input type="password" name="password" id="password" required class="w-full bg-transparent border-b-2 border-white text-white focus:outline-none focus:border-yellow-500" placeholder="Enter your password">
                    @error('password')
                        <small class="text-red-500">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="bg-yellow-600 text-white py-2 rounded hover:bg-yellow-500 transition duration-200">Login</button>
            </form>
        </section>
    </main>
</x-layout>
