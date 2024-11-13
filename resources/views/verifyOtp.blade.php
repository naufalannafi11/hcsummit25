<!-- resources/views/verifyOtp.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">Verifikasi OTP</h1>
        <p class="text-center text-gray-600 mb-6">
            Masukkan kode OTP yang telah dikirim ke email Anda.
        </p>

        <!-- Form untuk OTP -->
        <form action="{{ route('register.verifyOtp') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="otp" class="block text-sm font-medium text-gray-700">Kode OTP:</label>
                <input
                    type="text"
                    id="otp"
                    name="otp"
                    required
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Masukkan kode OTP"
                >
            </div>

            <button
                type="submit"
                class="w-full py-2 mt-4 font-semibold text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-200"
            >
                Verifikasi
            </button>
        </form>

        <!-- Menampilkan pesan error jika OTP salah -->
        @if ($errors->has('otp'))
            <p class="mt-4 text-sm text-center text-red-600">{{ $errors->first('otp') }}</p>
        @endif
    </div>

</body>
</html>
