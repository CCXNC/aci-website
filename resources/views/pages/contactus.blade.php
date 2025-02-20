<x-layout title="Contact Us">
    <section
        class="relative bg-cover bg-center bg-no-repeat h-50 flex items-center"
        style="background-image: url('storage/images/contactpic1.png');">
       <!-- Dark Overlay -->
       <div class="absolute inset-0 bg-blue-700 bg-opacity-80"></div>
        <div class="container mx-auto text-left z-0 p-12">
            <h2 class="text-4xl md:text-5xl text-white font-bold">
                Contact Us
            </h2>
           
        </div>
    </section>
   
    <!-- Section Contact Us -->
    <section id="topgridcard" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 md:gap-y-5 justify-items-center">

        <!-- Card 1 -->
        <div class="p-5 m-7 md:border-slate-200 text-gray-600">
            <h3 class="text-xl font-bold uppercase text-blue-800">CONTACT INFO</h3>
            <p class="mt-4 leading-loose text-medium">
                <span class="far fa-building"></span> 322 Benedictine Street Sta.Ana Sun Valley Parañaque City, NCR, Philippines 1710
            </p>
            <p class="mt-2 leading-loose text-medium">
                <span class="fas fa-mobile-alt"></span> +63 2 82930164
            </p>
            <p class="mt-2 leading-loose text-medium">
                <span class="far fa-envelope"></span> info@asianconnect.com
            </p>
            <p class="mt-2 leading-loose text-medium">
                <span class="fas fa-globe"></span> www.asianconnect.com
            </p>
        </div>

        <!-- Card 2 (Equal Span for Form & Image) -->
        <div class="p-5 m-5 md:border-slate-200 text-left text-gray-600 md:col-span-2 relative grid grid-cols-1 md:grid-cols-1 items-center min-h-[350px] bg-cover bg-right bg-no-repeat rounded-lg shadow-lg">
            
            <!-- Left Side (Text & Form) - Spans 1 Column -->
            <div class="p-6 w-full mx-auto">
                <h3 class="text-xl font-bold uppercase text-blue-800">SEND US A MESSAGE</h3>
                <p class="mt-4 text-sm">
                    To request for quotation and inquiries, or to set an appointment. Everything you want to know about us, send through this form. We promise to e-mail you back ASAP.
                </p>
                <div class="mt-5 space-y-3">
                    <x-inputs.text id="name" name="name" placeholder="Name" class="w-full" />
                    <x-inputs.text id="email" name="email" placeholder="Email" class="w-full" />
                    <x-inputs.text id="subject" name="subject" placeholder="Subject" class="w-full" />
                    <x-inputs.text-area id="description" name="description" placeholder="Message" class="w-full" />
                    <button class="bg-blue-700 text-white px-5 py-2 rounded hover:bg-green-800">Send</button>
                </div>
            </div>
        </div>


    </section>
    

    <!-- Section Top body Grid Card -->
    <section id="topgridcard" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 md:gap-y-5 justify-items-center bg-blue-800 text-white">

        <!-- Card 1 -->
        
        <div class="md:border-slate-200 flex flex-col items-left text-left p-5">

            <!-- Title -->
            <h3 class="px-10 font-bold text-xl">ABOUT ACI</h3>
        
            <!-- Description -->
            <p class="text-justify text-sm px-10">
                Asian Connect Inc (ACI) started in 2018 as a sub-contractor which provides ICT
                services for the leaders in Telecom Industry in the country Its humble beginnings in the field of
                structured cabling and networking solutions were firmly establishedin the industry shortly after it ventured to work with bigger clients of Telecom
                mostly major players in:
                nation-wide mall operations, hotels well-known banking institutions,hotels
                residential, buildings including subdivisions and exclusive villages, local government units and as well as universities situated in parts of Luzon, Visayas and Mindanao        
            </p>    
        
        </div>
        
        <!-- Card 2 -->
        <div class="md:border-slate-200 flex flex-col items-center text-center p-2">

            <h3 class="p-4 font-bold text-lg rounded-xl tracking-wide">
                Link Communities with Endless
            </h3>

            <!-- Logo -->
            <div class="w-auto h-32 flex items-center justify-center">
                <img src="storage/logos/aci-logo-bg.png" alt="Refamed Logo" class="h-full w-auto">
            </div>

            <div>
                <h3 class="p-4 font-bold text-lg rounded-xl tracking-wide">
                    Connectivity!
                </h3>
            </div>

        </div>

       
       
    </section>

</x-layout> 