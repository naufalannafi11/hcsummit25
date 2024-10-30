<x-layout>
    <main class="flex justify-center items-center w-full min-h-screen bg-green-900 rounded-md shadow-xl text-white mx-auto">
        <section class="w-30rem w-6/12 m-9 flex flex-col space-y-10">
            <h1 class="bg-yellow-600 py-2 text-2xl font-medium px-3 rounded-tl-2xl rounded-br-2xl text-center">Data Users</h1>
            
            <table class="min-w-full bg-white text-gray-800">
                <thead>
                    <tr>
                        <th class="py-2">Name</th>
                        <th class="py-2">Email</th>
                        <th class="py-2">Agency</th>
                        <th class="py-2">Participation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="py-2">{{ $user->name }}</td>
                        <td class="py-2">{{ $user->email }}</td>
                        <td class="py-2">{{ $user->agency }}</td>
                        <td class="py-2">{{ json_decode($user->participation, true) ? implode(', ', json_decode($user->participation)) : 'None' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</x-layout>
