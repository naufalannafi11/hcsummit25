

<!-- resources/views/emails/otp.blade.php -->
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
            Kode OTP Anda adalah: <strong>{{ $otp }}</strong>
        </p>
        <p class="text-center text-gray-600">
            Klik tombol di bawah ini untuk memverifikasi OTP Anda.
        </p>

        <!-- Form OTP di email (akan mengarah ke halaman verifikasi OTP di website) -->
        <form action="{{ route('register.verifyOtp') }}" method="POST">
            @csrf
            <input type="hidden" name="otp" value="{{ $otp }}">
            <button
                type="submit"
                class="w-full py-2 mt-4 font-semibold text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition duration-200"
            >
                Verifikasi
            </button>
        </form>
    </div>

</body>
</html>
