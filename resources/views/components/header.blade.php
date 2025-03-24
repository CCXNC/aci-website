<!-- Hero Section with Navbar -->
<header class="relative bg-cover bg-center bg-no-repeat w-full h-[500px] flex items-center justify-center"
    style="background-image: url('storage/images/header1.jpg');"
    >
    
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Navbar -->
    <div class="absolute top-0 left-0 right-0 bg-opacity-90 text-white p-5 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Desktop Logo -->
            <a class="w-32 h-auto hidden md:flex ml-28" href="{{url('/')}}">
                <img src="storage/logos/aci-logo-bg.png" alt="Company Logo">
            </a>
            <!-- Mobile Logo -->
            <a class="w-28 h-auto ml-5 md:hidden" href="{{url('/')}}">
                <img src="storage/logos/aci-logo-bg.png" alt="Company Logo">
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center tracking-wide space-x-4">
                <x-nav-link url="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link url="/products" :active="request()->is('products')">Products</x-nav-link>
                <x-nav-link url="/services" :active="request()->is('services')">Services</x-nav-link>
                <x-nav-link url="/aboutus" :active="request()->is('aboutus')">About Us</x-nav-link>
                <x-nav-link url="/careers" :active="request()->is('careers')">Career</x-nav-link>
                <x-button-link url="/contactus" :active="request()->is('contactus')" icon="fa fa-network-wired">Contact Us</x-button-link>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="hamburger" class="text-blue-800 md:hidden flex items-center">
                <i class="fa fa-bars text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by Default, Positioned on Right Side) -->
    <div id="mobile-menu" class="z-50 fixed top-0 right-0 w-64 h-full bg-blue-700 text-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out md:hidden">
        <div class="p-4 flex justify-between items-center">
            <h2 class="text-lg font-bold"></h2>
            <button id="close-menu" class="text-white text-2xl">&times;</button>
        </div>
        <nav class="tracking-wide space-y-2 p-4">
            <x-nav-link url="/" :active="request()->is('/')" :mobile="true">Home</x-nav-link>
            <x-nav-link url="/products" :active="request()->is('products')" :mobile="true">Products</x-nav-link>
            <x-nav-link url="/services" :active="request()->is('services')" :mobile="true">Services</x-nav-link>
            <x-nav-link url="/aboutus" :active="request()->is('aboutus')" :mobile="true">About Us</x-nav-link>
            <x-nav-link url="/careers" :active="request()->is('careers')" :mobile="true">Career</x-nav-link>
            <div class="pt-1"></div>
            <x-button-link url="/contactus" :active="request()->is('contactus')" icon="fa fa-network-wired" :block="true">Contact Us</x-button-link>
        </nav>
    </div>

    <!-- Hero Section Content -->
    <div class="container mx-auto text-center relative z-10">
        <h2 class="text-4xl md:text-5xl text-white font-bold mb-8">
            Link Communities with Endless
        </h2>
        <h2 class="text-4xl md:text-5xl text-white font-bold mb-8">
        Connectivity!
        </h2>
        <button class="px-4 py-2 border-2 text-white bg-blue-800 font-bold border-blue-800 rounded-lg w-auto hover:bg-white hover:text-black hover:border-white">Learn More</button>
    </div>
</header>

<!-- JavaScript -->
<script>
    const menu = document.getElementById('mobile-menu');
    const openBtn = document.getElementById('hamburger');
    const closeBtn = document.getElementById('close-menu');

    openBtn.addEventListener('click', () => {
        menu.classList.remove('translate-x-full'); // Show menu by removing class
    });

    closeBtn.addEventListener('click', () => {
        menu.classList.add('translate-x-full'); // Hide menu by adding class
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>