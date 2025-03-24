  <!-- Section Carousel & Info -->
  <section id="technology" class="flex justify-center py-2 px-4">
    <div class="bg-white w-full sm:w-[90%] md:w-[800px] text-center text-blue-800 p-6 rounded-lg">
        <!-- Card Content -->
        <div class="p-4 pb-10 border-slate-200">
            <h3 class="text-2xl font-bold my-5 mx-auto text-center max-w-100px sm:max-w-[90%] md:max-w-[800px]">
                We value and honor God above all. We believe in a well-founded partnership based on mutual trust, commitment, and alliance in gaining significant results.
            </h3>

            <!-- Slider Container -->
            <section class="w-full sm:w-[90%] md:w-[800px] h-[250px] sm:h-[300px] md:h-[400px] flex justify-center items-center mx-auto">
                <div 
                    x-data="{ 
                        activeSlide: 0, 
                        slides: ['storage/images/images/222.jpg', 'storage/images/images/111.jpg', 'storage/images/images/777.jpg'], 
                        autoSlide() { setInterval(() => { this.next(); }, 5000); }, 
                        next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length; }, 
                        prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length; } 
                    }" 
                    x-init="autoSlide()" 
                    class="relative w-full h-full mx-auto overflow-hidden bg-gray-100 flex justify-center items-center"
                >
                    <!-- Slider -->
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
        </div>
    </div>
</section>

<!-- Section Carousel & Info -->
<section id="technology" class="flex justify-center py-6 px-4">
  <div class="bg-white w-full max-w-screen-xl text-center text-blue-800 p-6 rounded-lg">
  <!-- Card Content -->
  <div class="p-4 pb-10 border-slate-200">
      <h3 class="text-xl font-bold my-5 mx-auto text-center max-w-full sm:max-w-[90%] md:max-w-[800px]">
          We value and honor God above all. We believe in a well-founded partnership based on mutual trust, commitment, and alliance in gaining significant results.
      </h3>

      <!-- Slider Container -->
      <section class="w-full h-[250px] sm:h-[300px] md:h-[400px] flex justify-center items-center mx-auto">
          <div 
              x-data="{ 
                  activeSlide: 0, 
                  slides: ['storage/images/images/222.jpg', 'storage/images/images/111.jpg', 'storage/images/images/777.jpg'], 
                  autoSlide() { setInterval(() => { this.next(); }, 5000); }, 
                  next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length; }, 
                  prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length; } 
              }" 
              x-init="autoSlide()" 
              class="relative w-full h-full overflow-hidden bg-gray-100 flex justify-center items-center"
          >
              <!-- Slider -->
              <div class="relative w-full h-full flex items-center justify-center">
                  <template x-for="(slide, index) in slides" :key="index">
                      <div x-show="activeSlide === index" class="absolute inset-0 flex items-center justify-center transition-opacity duration-700">
                          <img :src="slide" class="w-full h-full object-cover md:object-contain" alt="Carousel Slide">
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
  </div>
  </div>
  </section>

  With Barely 7 Years of existence asian connect inc (ACI) had gained leverage to showcase its well accepted and best practices workmanship in the ICT Infrastructure particularly.      
  <div>
      <ul class="list-disc pl-5 space-y-1 mt-3">
          <li>Structured cabling for PICO CELL</li>
          <li>Lamp site platforms covering small to macro cell wireless networking solutions</li>
          
      </ul>
  </div>  