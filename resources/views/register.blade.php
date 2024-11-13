<x-layout>
    <main class="flex justify-center items-center w-full min-h-screen bg-white rounded-md shadow-xl mx-auto">
        <section class="w-30rem w-6/12 m-9 flex flex-col space-y-10">
            <div class="flex items-center justify-center mb-10">
                <h1 class="bg-yellow-600 py-2 text-2xl font-medium px-3 rounded-tl-2xl rounded-br-2xl">Welcome To HC Summit 2025</h1>
            </div>
            
            <form action="{{ route('register.store') }}" method="POST" class="flex flex-col space-y-10 pointer-events-auto" autocomplete="off">
                @csrf
                
                <div class="w-full border-b-2 text-lg focus-within:border-yellow-400 duration-500 transform ">
                    <input id="name" name="name" type="text" placeholder="Name" class="bg-transparent w-full focus:outline-none placeholder:italic @error('name') is-invalid @enderror" required>
                    @error('name')
                        <small class="btn btn-danger">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="w-full border-b-2 text-lg focus-within:border-yellow-400 duration-500 transform">
                    <input id="email" name="email" type="email" placeholder="Email" class="bg-transparent w-full focus:outline-none placeholder:italic @error('email') is-invalid @enderror" required>
                    @error('email')
                        <small class="btn btn-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="w-full border-b-2 text-lg focus-within:border-yellow-400 duration-500 transform">
                    <input id="password" name="password" type="password" placeholder="Password" class="bg-transparent w-full focus:outline-none placeholder:italic @error('password') is-invalid @enderror" required>
                    @error('password')
                        <small class="btn btn-danger">{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="w-full border-b-2 text-lg focus-within:border-yellow-400 duration-500 transform">
                    <input id="agency" name="agency" type="text" placeholder="Agency" class="bg-transparent w-full focus:outline-none placeholder:italic @error('agency') is-invalid @enderror" required>
                    @error('agency')
                        <small class="btn btn-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-black font-semibold mb-2" for="participation">Participation</label>
                    <div class="flex flex-col space-y-2 text-black">
                        <label class="inline-flex items-center">
                            <input id="host" type="checkbox" class="form-checkbox" name="participation[]" value="Host">
                            <span class="ml-2">Host</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input id="moderator" type="checkbox" class="form-checkbox" name="participation[]" value="Moderator">
                            <span class="ml-2">Moderator</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input id="participant" type="checkbox" class="form-checkbox" name="participation[]" value="Participant">
                            <span class="ml-2">Participant</span>
                        </label>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <button id="submitBtn" type="submit" class="bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                        Submit
                    </button>
                    <a href="/" class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                        Back
                    </a> 
                </div>
            </form>
        </section>
    </main>

    <script>
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const agency = document.getElementById('agency');
        const submitBtn = document.getElementById('submitBtn');
        const participationCheckboxes = document.querySelectorAll('input[name="participation[]"]');

        function isFormValid() {
            const isNameFilled = name.value.trim() !== "";
            const isEmailFilled = email.value.trim() !== "";
            const isPasswordFilled = password.value.trim() !== "";
            const isAgencyFilled = agency.value.trim() !== "";
            const isParticipationSelected = Array.from(participationCheckboxes).some(checkbox => checkbox.checked);

            return isNameFilled && isEmailFilled && isPasswordFilled && isAgencyFilled && isParticipationSelected;
        }

        function updateSubmitButtonState() {
            if (isFormValid()) {
                submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                submitBtn.disabled = false;
            } else {
                submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                submitBtn.disabled = true;
            }
        }

        name.addEventListener('input', updateSubmitButtonState);
        email.addEventListener('input', updateSubmitButtonState);
        password.addEventListener('input', updateSubmitButtonState);
        agency.addEventListener('input', updateSubmitButtonState);

        // Tambahkan event listener untuk checkbox
        participationCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateSubmitButtonState);
        });

        updateSubmitButtonState();
    </script>
    

    
</x-layout>
