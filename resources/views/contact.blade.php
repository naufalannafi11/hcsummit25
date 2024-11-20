<x-layout>
    
    <div class="container mx-auto">
            <!-- Layout Wrapper -->
        <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-8">
                
                <!-- Left Column: Google Maps Embed -->
            <div class="w-full md:w-2/3">
                <iframe class="w-full h-96 rounded-lg shadow-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.373994293588!2d106.80463057480313!3d-6.21430889377363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6adbd77af01%3A0x23abed373d7987d2!2sJakarta%20Convention%20Center!5e0!3m2!1sen!2sid!4v1732085738667!5m2!1sen!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    
                <!-- Right Column: Contact Info -->
            <div class="w-full md:w-1/3  p-6 rounded-lg shadow-lg">
                <div class="mb-4 text-center">
                    <h2 class="font-bold text-xl underline underline-offset-8" >Launching</h2>
                    <p class="font-bold mt-7">Day/Date</p>
                    <p>Thursday, September 26th  2024</p>
                    <p class="font-bold mt-7">Vanue</p>
                    <p>Jakarta Convention Center, Jakarta</p>
                    <p>Jl. Gatot Subroto No.1, RT.1/RW.3, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270</p>
                    <h2 class="font-bold text-xl underline underline-offset-8 mt-7">CONTACT US</h2> 
                        
                    <div class="mb-4 mt-2">
                        <p class="font-bold">+62 815 4282 6162</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-4">
        <img src="{{ asset('img/hc2025.png') }}" class="w-min">
    </div>

    <div class="bg-amber-400 flex items-center justify-center rounded-md w-full py-4 mt-3 ">
        <img src="{{ asset('img/esdm.png') }}" class="w-40 h-auto p-3">
        <div class="ml-4 text-center">
            <p class="font-bold">Badan Pengembangan Sumber Daya Manusia
            Energi dan Sumber Daya Mineral</p>
            <p>Kementerian Energi dan Sumber Daya Mineral</p>
        </div>
    </div>
    

</x-layout>