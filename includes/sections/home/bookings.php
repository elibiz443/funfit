<!-- BOOKING / CTA -->
<section id="book" class="relative py-24 text-white overflow-hidden">
  <div class="absolute inset-0 bg-fixed bg-center bg-cover bg-no-repeat"
    style="background-image: url('<?php echo ROOT_URL; ?>/assets/images/book/book.webp');"></div>
  
  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/70"></div>

  <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
    <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight">
      Ready to Transform Your Game?
    </h2>
    <p class="text-white/80 max-w-2xl mx-auto mb-12 text-lg leading-relaxed">
      Take the first step toward a stronger, more confident you.  
      Book a personalized session with our top trainers today.
    </p>

    <form id="bookForm" class="flex flex-col sm:flex-row justify-center items-center gap-4">
      <input type="text" name="name" required placeholder="Your Name"
        class="px-6 py-3 w-full sm:w-56 rounded-full focus:outline-none text-white border border-white/60 shadow-inner placeholder-gray-300" />
      <input type="email" name="email" required placeholder="Email Address"
        class="px-6 py-3 w-full sm:w-64 rounded-full focus:outline-none text-white border border-white/60 shadow-inner placeholder-gray-300" />
      <button type="submit" class="cursor-pointer bg-yellow-600 text-white font-semibold px-8 py-3 rounded-full hover:bg-white hover:text-yellow-600 transition-all duration-500 ease-in-out shadow-lg">
        Book Now
      </button>
    </form>

    <p class="mt-8 text-sm text-white/70 italic">
      No commitment — just a chance to experience excellence.
    </p>
  </div>

  <!-- Decorative subtle glow accents -->
  <div class="absolute top-0 left-0 w-40 h-40 bg-[#b16e13]/20 rounded-full blur-3xl"></div>
  <div class="absolute bottom-0 right-0 w-52 h-52 bg-white/10 rounded-full blur-3xl"></div>
</section>
