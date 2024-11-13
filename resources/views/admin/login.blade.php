<x-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 border border-gray-300 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Admin Login</h2>
            
            @if ($errors->any())
                <div class="text-red-600 text-sm mb-4 text-center">
                    {{ $errors->first('email') }}
                </div>
            @endif
            
            <form action="{{ route('admin.login') }}" method="POST" class="space-y-6" autocomplete="off"> 
                @csrf
                
                <div>
                    <label for="email" class="block text-gray-700 font-semibold mb-1">Email:</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        required
                    >
                </div>
                
                <div>
                    <label for="password" class="block text-gray-700 font-semibold mb-1">Password:</label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" 
                        required
                    >
                </div>
                
                <button 
                    type="submit" 
                    class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600 transition-colors duration-300"
                >
                    Login
                </button>
            </form>
        </div>
    </div>
</x-layout>
