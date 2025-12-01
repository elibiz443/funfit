<!-- CONTACT SECTION -->
<section id="contacts" 
  class="relative py-24 bg-black text-white bg-cover bg-center"
  style="background-image: url('<?php echo ROOT_URL; ?>/assets/images/contact/contact.webp');">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/70"></div>

  <div class="relative max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

    <!-- CONTACT FORM -->
    <div class="bg-black/60 p-8 rounded-2xl backdrop-blur-sm border border-stone-700 shadow-2xl">
      <h4 class="text-2xl font-bold text-[#daaa4a] uppercase tracking-wide text-center">Get In Touch</h4>
      <p class="text-stone-300 text-sm text-center mt-3 mb-6">
        Have a question, partnership idea, or want to start your fitness journey?  
        Send us a message — we’ll get back to you shortly.
      </p>

      <form id="contactForm" class="space-y-5">
        <input name="cname" type="text" placeholder="Your Name"
          class="w-full px-4 py-3 rounded-full bg-transparent border border-stone-600 text-white placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-[#daaa4a] transition" />

        <input name="cemail" type="email" placeholder="Your Email"
          class="w-full px-4 py-3 rounded-full bg-transparent border border-stone-600 text-white placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-[#daaa4a] transition" />

        <textarea name="cmessage" rows="4" placeholder="Your Message"
          class="w-full px-4 py-3 rounded-2xl bg-transparent border border-stone-600 text-white placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-[#daaa4a] transition"></textarea>

        <button type="submit" class="cursor-pointer w-full bg-[#daaa4a] text-black py-3 rounded-full font-semibold hover:bg-[#f3d477] hover:scale-105 transition-all duration-500 ease-in-out">
          Send Message
        </button>
      </form>
    </div>

    <!-- MAP -->
    <div class="w-full h-[400px] rounded-2xl overflow-hidden shadow-lg border border-stone-700">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.859182276744!2d36.82194601532269!3d-1.2920650359880345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d4ab0f9a37%3A0x501f8f83aa4f5a0!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2ske!4v1700000000000!5m2!1sen!2ske"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

  </div>
</section>
