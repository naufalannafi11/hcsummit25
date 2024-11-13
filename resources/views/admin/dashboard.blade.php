<x-layout>
    <main class="flex justify-center items-center w-full min-h-screen bg-gray-100 text-white">
        <section class="w-full max-w-4xl m-9 p-5 rounded-md shadow-xl bg-green-800 space-y-8">
            <h1 class="bg-yellow-500 py-3 text-2xl font-semibold rounded-tl-2xl rounded-br-2xl text-center">
                Data Users
            </h1>
            
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white text-gray-800 rounded-md shadow-md overflow-hidden">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="py-3 px-4 text-left font-semibold">Name</th>
                            <th class="py-3 px-4 text-left font-semibold">Email</th>
                            <th class="py-3 px-4 text-left font-semibold">Agency</th>
                            <th class="py-3 px-4 text-left font-semibold">Participation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-3 px-4">{{ $user->name }}</td>
                                <td class="py-3 px-4">{{ $user->email }}</td>
                                <td class="py-3 px-4">{{ $user->agency }}</td>
                                <td class="py-3 px-4">
                                    {{ json_decode($user->participation, true) ? implode(', ', json_decode($user->participation)) : 'None' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</x-layout>
