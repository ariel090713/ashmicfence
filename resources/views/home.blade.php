@extends('layouts.app')

@section('content')

@livewire('chatbot')
<div class="swiper mySwiper relative" style="height: calc(100vh - 7rem);">
    <div class="swiper-wrapper">
        <!-- First Slide (Eye-catching Hero) -->
        <div class="swiper-slide relative bg-cover bg-center text-white text-center px-6 gap-8 " style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/steelfence.jpg');" >
            
            <!-- Overlay for better readability -->
            <div class="absolute inset-0 bg-black/50 pointer-events-none"></div>

            <!-- Content Wrapper -->
            <div class="relative z-10 flex flex-col items-center justify-center min-h-full">
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold drop-shadow-lg leading-tight">
                BOLD. INNOVATIVE.
                FUTURE-READY.
                </h1>
                <p class="text-lg sm:text-2xl mt-4 opacity-90 max-w-2xl">
                Empowering your vision with cutting-edge solutions, engineered for excellence and built to last.
                </p>

                <!-- CTA Button -->
                <a href="#about" 
                    class="mt-6 px-6 py-3 bg-orange-600 hover:bg-orange-700 transition-all duration-300 text-white text-lg font-semibold rounded-full shadow-lg">
                    Learn More About Us
                </a>
            </div>
        </div>

        <div class="swiper-slide items-center justify-center text-white px-6 gap-8 relative bg-cover bg-center" style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/Metal-Fences-The-Ultimate-Guide.jpeg');">
            <div class="absolute inset-0 bg-black/50 pointer-events-none"></div>

            <div class="w-full flex flex-col md:flex-row gap-10">
                
                <!-- Left Column -->
                <div class="w-full flex items-center justify-center px-6" style="height: calc(100vh - 7rem);">
                    <div class="text-left flex flex-col items-center  justify-center">
                        <h1 class="text-4xl sm:text-6xl md:text-5xl lg:text-7xl font-extrabold drop-shadow-lg leading-tight">
                            TAKE YOUR FENCING  
                            TO A NEW LEVEL
                        </h1>
                        <p class="text-lg sm:text-2xl mt-4 opacity-90">
                            Strength Meets Style – Built for security, designed for elegance.
                        </p>
                        <a href="#about" 
                            class="z-10 mt-6 inline-block w-max px-6 py-3 bg-orange-600 hover:bg-orange-700 transition-all duration-300 text-white text-lg font-semibold rounded-full shadow-lg">
                            Explore More
                        </a>
                    </div>
                </div>

            </div>

        </div>




        <div class="swiper-slide items-center justify-center text-white px-6 gap-8 relative bg-cover bg-center" 
    style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/maxresdefault.jpg');">
    
    <div class="absolute inset-0 bg-black/50 pointer-events-none"></div>

    <div class="w-full flex flex-col md:flex-row gap-10">
        
       

        <!-- Right Column: Content -->
        <div class="w-full flex items-center justify-center px-6" style="height: calc(100vh - 7rem);">
            <div class="text-left flex flex-col items-center  justify-center">
                <h1 class="text-4xl sm:text-6xl md:text-5xl lg:text-7xl font-extrabold drop-shadow-lg leading-tight">
                    BUILT FOR TOMORROW,  
                    DESIGNED FOR YOU.
                </h1>
                <p class="text-lg sm:text-2xl mt-4 opacity-90">
                    Engineered for durability. Crafted for style.  
                    The perfect blend of innovation and security.
                </p>
                <a href="#about" 
                    class="z-10 mt-6 inline-block w-max px-6 py-3 bg-orange-600 hover:bg-orange-700 transition-all duration-300 text-white text-lg font-semibold rounded-full shadow-lg">
                    See Our Work
                </a>
            </div>
        </div>

    </div>
</div>

    </div>

    <!-- Swiper Pagination & Navigation -->
    <div class="swiper-pagination"></div>
</div>



<section id="features" class="py-16 px-6 bg-white">
    <div class="container mx-auto text-center">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 flex items-center justify-center transition-transform duration-300 hover:scale-110">
                    <i data-lucide="home" class="text-gray-700 w-16 h-16"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mt-4">Residential</h3>
                <p class="text-gray-600 mt-2 text-sm sm:text-base">Enhance your home's security with our reliable fencing solutions.</p>
            </div>

            <!-- Feature 2 -->
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 flex items-center justify-center transition-transform duration-300 hover:scale-110">
                    <i data-lucide="building" class="text-gray-700 w-16 h-16"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mt-4">Commercial</h3>
                <p class="text-gray-600 mt-2 text-sm sm:text-base">Secure and stylish fencing for business and commercial properties.</p>
            </div>

            <!-- Feature 3 -->
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 flex items-center justify-center transition-transform duration-300 hover:scale-110">
                    <i data-lucide="factory" class="text-gray-700 w-16 h-16"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mt-4">Industrial</h3>
                <p class="text-gray-600 mt-2 text-sm sm:text-base">Durable fencing solutions for warehouses and industrial sites.</p>
            </div>

            <!-- Feature 4 -->
            <div class="flex flex-col items-center">
                <div class="w-24 h-24 flex items-center justify-center transition-transform duration-300 hover:scale-110">
                    <i data-lucide="shield" class="text-gray-700 w-16 h-16"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-semibold text-gray-800 mt-4">High Security</h3>
                <p class="text-gray-600 mt-2 text-sm sm:text-base">Advanced security fencing for maximum protection and safety.</p>
            </div>
        </div>
    </div>
</section>



<!-- Lucide Icons CDN -->
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>





<section id="fencing-types" class="py-16 px-6 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-8">Our Products</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">
            Explore our range of durable and stylish steel products designed to enhance security, aesthetics, and functionality for residential, industrial and commercial spaces.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Product Items -->
            <div class="relative group h-120 w-full overflow-hidden" style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/products/prod1.jpg'); background-size: cover; background-position: center;">
                <!-- Label -->
                <span class="absolute top-4 left-4 bg-black text-white text-lg font-semibold px-3 py-1 rounded-md transition-opacity duration-300 group-hover:opacity-0">FencProduct 1</span>
                <div class="absolute inset-0 bg-black/30 flex flex-col justify-center items-center text-white p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-in-out">
                    <h3 class="text-2xl font-semibold">Product 1</h3>
                    <p class="text-sm mt-2">Classic and robust fencing solutions that combine security with timeless beauty.</p>
                </div>
            </div>
            
            <div class="relative group h-120 w-full overflow-hidden" style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/products/Installed-panel-scaled.jpg'); background-size: cover; background-position: center;">
                <span class="absolute top-4 left-4 bg-black text-white text-lg font-semibold px-3 py-1 rounded-md transition-opacity duration-300 group-hover:opacity-0">Product 2</span>
                <div class="absolute inset-0 bg-black/30 flex flex-col justify-center items-center text-white p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-in-out">
                    <h3 class="text-3xl font-semibold">Product 2</h3>
                    <p class="text-sm mt-2">Portable and secure fencing solutions for temporary enclosures and site protection.</p>
                </div>
            </div>

            <div class="relative group h-120 w-full overflow-hidden" style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/products/ENOL0960-scaled.jpg'); background-size: cover; background-position: center;">
                <span class="absolute top-4 left-4 bg-black text-white text-lg font-semibold px-3 py-1 rounded-md transition-opacity duration-300 group-hover:opacity-0">Product 3</span>
                <div class="absolute inset-0 bg-black/30 flex flex-col justify-center items-center text-white p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-in-out">
                    <h3 class="text-3xl font-semibold">Product 3</h3>
                    <p class="text-sm mt-2">Reinforced steel fence that add an extra layer of security without sacrificing design.</p>
                </div>
            </div>

            <div class="relative group h-120 w-full overflow-hidden" style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/products/anticlimb-fence-03.jpg'); background-size: cover; background-position: center;">
                <span class="absolute top-4 left-4 bg-black text-white text-lg font-semibold px-3 py-1 rounded-md transition-opacity duration-300 group-hover:opacity-0">Product 4</span>
                <div class="absolute inset-0 bg-black/30 flex flex-col justify-center items-center text-white p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-in-out">
                    <h3 class="text-3xl font-semibold">Product 4</h3>
                    <p class="text-sm mt-2">High-strength steel screens designed for ventilation, visibility, and protection.</p>
                </div>
            </div>

            <div class="relative group h-120 w-full overflow-hidden" style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/products/chainlink-fence-02.jpg'); background-size: cover; background-position: center;">
                <span class="absolute top-4 left-4 bg-black text-white text-lg font-semibold px-3 py-1 rounded-md transition-opacity duration-300 group-hover:opacity-0">Product 5</span>
                <div class="absolute inset-0 bg-black/30 flex flex-col justify-center items-center text-white p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-in-out">
                    <h3 class="text-3xl font-semibold">Product 5</h3>
                    <p class="text-sm mt-2">Heavy-duty steel enclosures for equipment, storage, and restricted areas.</p>
                </div>
            </div>

            <div class="relative group h-120 w-full overflow-hidden" style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/products/images.jpg'); background-size: cover; background-position: center;">
                <span class="absolute top-4 left-4 bg-black text-white text-lg font-semibold px-3 py-1 rounded-md transition-opacity duration-300 group-hover:opacity-0">Product 6</span>
                <div class="absolute inset-0 bg-black/30 flex flex-col justify-center items-center text-white p-6 opacity-0 translate-y-full group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-500 ease-in-out">
                    <h3 class="text-3xl font-semibold">Product 6</h3>
                    <p class="text-sm mt-2">Durable steel panels designed for security while maintaining visibility and airflow.</p>
                </div>
            </div>
        </div>
        <!-- View More Button -->
        <div class="mt-12">
            <a href="#contact" class="bg-orange-600 text-white font-semibold px-6 py-3 rounded-full text-lg shadow-md hover:bg-orange-700 transition-all">
                View More Products
            </a>
        </div>
    </div>
</section>

<section class="bg-white py-16 px-6">
    <div class="container mx-auto text-center">
        <!-- Heading -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-900">Our Services</h2>
            <p class="mt-4 text-lg text-gray-700 max-w-2xl mx-auto">
                We manufacture, supply, and specialize in high-quality steel and fencing solutions tailored for residential, commercial, and industrial applications.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Service 1 -->
            <div class="p-10 bg-black rounded-lg text-center transition transform hover:scale-105 hover:shadow-lg border-t-4 border-orange-500">
                <h3 class="text-xl font-bold text-white">Custom Steel Fabrication</h3>
                <p class="mt-3 text-gray-300">Precision-engineered steel products tailored to your specifications.</p>
            </div>

            <!-- Service 2 -->
            <div class="p-10 bg-black rounded-lg text-center transition transform hover:scale-105 hover:shadow-lg border-t-4 border-orange-500">
                <h3 class="text-xl font-bold text-white">Fencing Installation</h3>
                <p class="mt-3 text-gray-300">Professional installation of durable fencing solutions for security and aesthetics.</p>
            </div>

            <!-- Service 3 -->
            <div class="p-10 bg-black rounded-lg text-center transition transform hover:scale-105 hover:shadow-lg border-t-4 border-orange-500">
                <h3 class="text-xl font-bold text-white">Steel Supply & Distribution</h3>
                <p class="mt-3 text-gray-300">Reliable sourcing and delivery of high-quality steel materials.</p>
            </div>

            <!-- Service 4 -->
            <div class="p-10 bg-black rounded-lg text-center transition transform hover:scale-105 hover:shadow-lg border-t-4 border-orange-500">
                <h3 class="text-xl font-bold text-white">Maintenance & Repairs</h3>
                <p class="mt-3 text-gray-300">Expert repair and upkeep services to extend the lifespan of your steel structures and fences.</p>
            </div>
        </div>
    </div>
</section>






<section class="relative h-screen bg-cover bg-center flex items-center text-white px-8 md:px-16" style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/Best-Fence-Company-Parks-_-Government-Fences-00004.jpg');">
<div class="absolute inset-0 bg-black/50 pointer-events-none"></div>
    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-7xl mx-auto">
        <!-- Text Column -->
        <div class="flex flex-col justify-center">
            <h2 class="text-4xl md:text-6xl font-bold">Stronger Boundaries.</h2>
            <p class="mt-12 text-lg md:text-xl">
                When you see security and durability differently, you create something beyond the ordinary. We call it <strong>Stronger Boundaries </strong> — a commitment to fences and steel structures that are built to last, built to protect, and built to enhance. Our products combine strength, style, and simplicity, making installation and maintenance effortless. Because your peace of mind matters. That’s why we provide innovative, long-lasting materials designed for any space. So, <strong>secure your property and build with confidence</strong>.
            </p>
        </div>
        <div class="flex justify-center items-center">
    <div class="w-full aspect-video">
        <iframe class="w-full h-full" src="https://www.youtube.com/embed/lUDRw1eH9ho" 
            title="Discover Inspiring Modern Metal Fence Design Ideas for Your Home and Garden / Fencing design ideas" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
        </iframe>
    </div>
</div>

    </div>
</section>

<section id="cta" class="flex flex-col md:flex-row items-center justify-center bg-black text-white">
    <!-- Left: Background Image -->
    <div class="w-full md:w-1/2 h-80 md:h-[800px] bg-cover bg-center" style="background-image: url('https://ashmicfence.s3.ap-southeast-2.amazonaws.com/678efb28acf551fc6bfdfa81_Metal+picket+fence.webp');">
    </div>

    <!-- Right: Text Content -->
    <div class="w-full md:w-1/2 p-8 md:p-12 text-center md:text-left">
        <h2 class="text-4xl md:text-6xl font-bold">
            Built to Last <br>
            Designed for Excellence
        </h2>
        <p class="text-lg mb-12 mt-12 ">
        ASHMIC STEEL & FENCING Products is your go-to source for high-quality steel and aluminum railing, fencing, framing, and pergolas. Crafted with innovation, strength, and beauty, our products are designed to stand the test of time.
        </p>
        <a href="#contact" class="bg-orange-600 text-white font-semibold px-6 py-3 rounded-full text-lg shadow-md hover:bg-orange-700 transition-all">
            View Gallery
        </a>
    </div>
</section>


<section id="who-we-are" class="bg-gray-100 py-16 px-6">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text Content -->
        <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Who We Are</h2>
            <h1 class="text-4xl font-bold text-gray-900 mb-6">ASHMIC STEEL & FENCING</h1>
            <p class="text-gray-600 leading-relaxed mb-6">
                At <span class="font-semibold text-yellow-600">ASHMIC STEEL & FENCING</span>, we specialize in crafting durable, high-quality steel fencing solutions tailored to meet the needs of homeowners, businesses, and industrial clients. 
                With years of expertise, we are committed to providing security, style, and strength in every project.
            </p>
            <p class="text-gray-600 leading-relaxed mb-6">
                Our innovative designs, advanced materials, and skilled craftsmanship ensure that our fences and gates offer both protection and aesthetic appeal. 
                Whether you need residential fencing, commercial security solutions, or industrial enclosures, we deliver excellence.
            </p>

            <!-- Counters -->
            <div class="grid grid-cols-2 gap-6 md:grid-cols-4 text-center mb-6">
                <div>
                    <span class="text-4xl font-bold text-orange-600 counter" data-target="10">0</span>
                    <p class="text-gray-700">Years in Business</p>
                </div>
                <div>
                    <span class="text-4xl font-bold text-orange-600 counter" data-target="200">0</span>
                    <p class="text-gray-700">Unique Designs</p>
                </div>
                <div>
                    <span class="text-4xl font-bold text-orange-600 counter" data-target="500">0</span>
                    <p class="text-gray-700">Successful Installations</p>
                </div>
                <div>
                    <span class="text-4xl font-bold text-orange-600 counter" data-target="500">0</span>
                    <p class="text-gray-700">Happy Clients</p>
                </div>
            </div>

            <div class="w-full flex justify-center md:justify-start">
                <a href="#contact" class="bg-orange-600 text-white font-semibold px-6 py-3 rounded-full text-lg shadow-md hover:bg-orange-700 transition-all">
                    Learn more
                </a>
            </div>
        </div>

        <!-- Image -->
        <div class="relative">
            <img src="https://ashmicfence.s3.ap-southeast-2.amazonaws.com/Ashmic-Logo-Square.png" 
                alt="Steel Fence Installation" 
                class="w-full h-auto p-20">
        </div>
    </div>
</section>

<section class="bg-gray-100 py-16 px-6">
  <div class="container mx-auto ">

    <h2 class="text-4xl font-extrabold text-gray-900 mb-6 text-center">Latest News</h2>
    <p class="text-lg text-gray-600 text-center mb-6">
    Get updates on our latest steel and fencing products, industry trends, and special offers.
    </p>
    <div class="grid md:grid-cols-3 gap-6">
      <article class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <img src="https://ashmicfence.s3.ap-southeast-2.amazonaws.com/products/Installed-panel-scaled.jpg" alt="News Image" class="w-full h-60 object-cover">
        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-900">Exciting News Title</h3>
          <p class="text-gray-600 mt-2 line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod...</p>
          <a href="#" class="text-orange-600 font-medium mt-3 inline-block">Read More →</a>
        </div>
      </article>
      <article class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <img src="https://ashmicfence.s3.ap-southeast-2.amazonaws.com/products/Installed-panel-scaled.jpg" alt="News Image" class="w-full h-60 object-cover">
        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-900">Breaking News Update</h3>
          <p class="text-gray-600 mt-2 line-clamp-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium...</p>
          <a href="#" class="text-orange-600 font-medium mt-3 inline-block">Read More →</a>
        </div>
      </article>
      <article class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <img src="https://ashmicfence.s3.ap-southeast-2.amazonaws.com/products/Installed-panel-scaled.jpg" alt="News Image" class="w-full h-60 object-cover">
        <div class="p-5">
          <h3 class="text-xl font-semibold text-gray-900">Industry Insights</h3>
          <p class="text-gray-600 mt-2 line-clamp-3">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam...</p>
          <a href="#" class="text-orange-600 font-medium mt-3 inline-block">Read More →</a>
        </div>
      </article>
    </div>
  </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const counters = document.querySelectorAll(".counter");
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute("data-target");
                const count = +counter.innerText;
                const increment = target / 100;
                
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCount, 50);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });
    });
</script>

<section id="cta" class="bg-black text-white py-22 px-6 text-center">
    <div class="container mx-auto max-w-3xl">
        <h2 class="text-4xl font-extrabold mb-4">Let's Build Strength and Security Together</h2>
        <p class="text-lg mb-12">From durable steel fencing to custom aluminum railings, we craft solutions that stand the test of time. Let’s bring your vision to life!</p>
        <a href="#contact" class="bg-orange-600 text-white font-semibold px-6 py-3 rounded-full text-lg shadow-md hover:bg-orange-700 transition-all">
            Contact Us
        </a>
    </div>
</section>
  
@endsection
