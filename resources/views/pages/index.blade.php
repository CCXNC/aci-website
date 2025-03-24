<x-layout title="Home Page">
    <!-- Section About ACI -->
    <section id="topgridcard" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 md:gap-y-5 justify-items-center">

        <!-- Card 1 -->
        <div class="p-4 pb-10 md:border-slate-20">
            <p class="text-justify p-5"><h3 class="font-bold text-blue-800 tracking-wide text-2xl my-2"> Asian Connect Inc (ACI)</h3>
                Started in 2018 as a sub-contractor which provides ICT
                services for the leaders in Telecom Industry in the country Its humble beginnings in the field of
                structured cabling and networking solutions were firmly establishedin the industry shortly after it ventured to work with bigger clients of Telecom
                mostly major players in:
                nation-wide mall operations, hotels well-known banking institutions,hotels
                residential, buildings including subdivisions and exclusive villages, local government units and as well as universities situated in parts of Luzon, Visayas and Mindanao.
            </p>    
            <div class="px-6 py-4 border-t text-right">
                <button class="border-2 border-blue-700 text-blue-700 font-bold px-5 py-2 hover:bg-blue-700 rounded hover:text-white"> Read More...</button>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="p-4 pb-10 md:border-slate-200">
            <img src="storage/images/pic3.jpg" class=" opacity-80 mix-blend-multiply" alt="">
        </div>
    </section>
   

   <!-- Section About ACI -->
    <section id="topgridcard" class="grid grid-cols-1 gap-y-5 md:grid-cols-2 md:gap-6 lg:gap-8 justify-items-center p-4">

        <!-- Card 1 -->
        <div class="p-6 bg-gray-200 rounded-lg shadow-md w-full">
            <h3 class="font-bold text-blue-800 tracking-wide text-2xl text-center">WHAT WE DO BEST?</h3>
            <p class="text-justify py-4">
                On top of our main service portfolio of providing structured cabling and networking solutions, we also provide other essential ICT and Electronic Security Solutions such as:
            </p>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <!-- Infrastructure Section -->
                <div>
                    <h4 class="font-bold text-lg text-blue-800">INFRASTRUCTURE</h4>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Data Center</li>
                        <li>Structured Cabling
                            <ul class="list-circle pl-5">
                                <li>Voice and Data</li>
                                <li>Pico Cell</li>
                                <li>Lampsite Platforms</li>
                            </ul>
                        </li>
                        <li>Network Wireless Solution</li>
                        <li>Fiber Optics</li>
                        <li>Building Riser Installation</li>
                        <li>Outdoor Plant Constructions</li>
                        <li>PABX Engineering & Installation</li>
                        <li>IPPBX on cloud (Telavi)</li>
                        <li>Security System</li>
                        <li>Building Management System</li>
                    </ul>
                </div>

                <!-- System/Application & Other Services Section -->
                <div>
                    <h4 class="font-bold text-lg text-blue-800">SYSTEM / APPLICATION</h4>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>ERP Consulting Services / Business Process Re-Eng'g</li>
                        <li>Project Management
                            <ul class="list-circle pl-5 mt-2">
                                <li><img src="storage/logos/infor.png" class="w-18 h-6" alt=""></li>
                                <li><img src="storage/logos/sap.png" class="w-18 h-14" alt=""></li>
                                <li><img src="storage/logos/hrweb.png" class="w-20 h-10" alt=""></li>
                            </ul>
                        </li>
                    </ul>

                    <h4 class="font-bold text-lg text-blue-800 mt-4">OTHER SERVICES</h4>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Interior Works & Civil Works</li>
                        <li>Tower Construction & Erection</li>
                        <li>Importation / Exportation</li>
                        <li>Website Design</li>
                    </ul>
                    <div class="text-center mt-6">
                        <button class="border-2 border-blue-700 text-blue-700 font-bold px-5 py-2 hover:bg-blue-800 hover:text-white rounded-lg transition">Explore More...</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="p-6 bg-blue-800 text-white rounded-lg shadow-md w-full">
            <h3 class="font-bold tracking-wide text-2xl text-center mb-5">Our Clients</h3>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 text-left md:text-left font-semibold">
                <div>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>SM North</li>
                        <li>SM Molino</li>
                        <li>SM Roxas</li>
                        <li>SM Bicutan</li>
                        <li>SM Bacolod</li>
                        <li>Ilo-ilo Airport</li>
                        <li>Laoag Airport</li>
                        <li>Asian Hospital</li>
                        <li>Ilo-ilo City Hall</li>
                        <li>Marulas Market</li>
                        <li>House of Representative</li>
                    </ul>
                </div>
                <div>
                    <ul class="list-disc pl-5 space-y-2">
                        <li>Ormoc City Hall</li>
                        <li>AGI Mall Pasay</li>
                        <li>Glorietta 3 & 5</li>
                        <li>Fairview Terraces</li>
                        <li>Urban Deca Homes</li>
                        <li>Fishermall Migration</li>
                        <li>Western Visayas Medical</li>
                        <li>Cebu Technology University</li>
                        <li>Filamer Christian University</li>
                        <li>Ilo-ilo Science & Technology University</li>
                    </ul>
                </div>
            </div>
            <h3 class="font-bold tracking-wide text-xl text-center mt-4">And 85 more projects to date</h3>
            <div class="text-center mt-6">
                <button class="border border-black tracking-wide bg-slate-800 font-bold px-5 py-2 hover:bg-white hover:text-blue-700 rounded-lg transition">SET A MEETING</button>
            </div>
        </div>

    </section>

    <!-- SLIDER IMAGE SECTION -->
    <section class="w-auto h-screen">
        <div 
            x-data="{ 
                activeSlide: 0, 
                slides: ['storage/services/service1.png', 'storage/services/service2.png', 'storage/services/service3.png'], 
                autoSlide() { setInterval(() => { this.next(); }, 5000); }, 
                next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length; }, 
                prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length; } 
            }" 
            x-init="autoSlide()" 
            class="relative w-full h-full mx-auto overflow-hidden bg-grey-100"
        >
            <!-- Slider Container -->
            <div class="relative w-full h-full flex items-center justify-center">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index" class="absolute inset-0 flex items-center justify-center transition-opacity duration-700">
                        <img :src="slide" class="w-full h-full object-contain" alt="Carousel Slide">
                    </div>
                </template>
            </div>
            
            <!-- Previous Button -->
            <button @click="prev" 
                class="absolute top-1/2 left-2 md:left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 md:p-3 rounded-full">
                &#10094;
            </button>
    
            <!-- Next Button -->
            <button @click="next" 
                class="absolute top-1/2 right-2 md:right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 md:p-3 rounded-full">
                &#10095;
            </button>
            
            <!-- Pagination Dots -->
            <div class="absolute bottom-2 md:bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <template x-for="(slide, index) in slides" :key="index">
                    <button @click="activeSlide = index" class="w-2 h-2 md:w-3 md:h-3 rounded-full" 
                        :class="activeSlide === index ? 'bg-white' : 'bg-gray-500'"></button>
                </template>
            </div>
        </div>
    </section>

</x-layout> 

