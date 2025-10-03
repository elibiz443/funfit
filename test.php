<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Frank Murule - Personal Trainer | F2 Functional Fitness</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Customization for the Tailwind JIT compiler to recognize specific colors */
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            // F2 Functional Fitness Yellow
            'f2-yellow': '#FFD700', 
            // A deep, contrasting black
            'f2-black': '#1A1A1A', 
          }
        }
      }
    }
    /* Simple JS/CSS for a smooth scroll behavior */
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-f2-black text-white font-sans">

  <header class="sticky top-0 z-50 bg-f2-black/95 backdrop-blur-sm shadow-xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
        <a href="#hero" class="text-3xl font-extrabold tracking-widest text-f2-yellow font-serif">F2</a>
        
        <nav class="hidden md:flex space-x-8 text-lg">
          <a href="#about" class="hover:text-f2-yellow transition duration-300">About</a>
          <a href="#services" class="hover:text-f2-yellow transition duration-300">Services</a>
          <a href="#style" class="hover:text-f2-yellow transition duration-300">Style</a>
          <a href="#contact" class="px-4 py-2 bg-f2-yellow text-f2-black font-bold rounded-full hover:bg-yellow-300 transition duration-300">Work with me</a>
        </nav>
        
        <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>
      </div>
    </div>
    
    <div id="mobile-menu" class="hidden md:hidden absolute w-full bg-f2-black/95 transition-all duration-300 ease-in-out">
      <a href="#about" class="block py-3 px-4 text-center text-xl border-t border-gray-800 hover:bg-gray-800">About</a>
      <a href="#services" class="block py-3 px-4 text-center text-xl hover:bg-gray-800">Services</a>
      <a href="#style" class="block py-3 px-4 text-center text-xl hover:bg-gray-800">Style</a>
      <a href="#contact" class="block py-3 px-4 text-center text-xl bg-f2-yellow text-f2-black font-bold hover:bg-yellow-300">Contact Frank</a>
    </div>
  </header>

  <main>
    <section id="hero" class="relative pt-24 pb-32 md:pt-40 md:pb-56 overflow-hidden min-h-screen flex items-center justify-center">
      <div class="absolute inset-0 bg-cover bg-center opacity-30" style="background-image: url('assets/images/hero/hero3.webp');"></div>
      <div class="absolute inset-0 bg-f2-black/70"></div> 
      
      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-6xl sm:text-7xl lg:text-8xl font-extrabold leading-tight text-white uppercase tracking-tighter drop-shadow-lg">
          <span class="block text-f2-yellow">Coach Frank</span>
          <span class="block mt-2">Fitness is a Lifestyle</span>
        </h1>
        <p class="mt-6 text-xl sm:text-2xl text-gray-200 max-w-3xl mx-auto font-light">
          Your Personal Trainer for **explosive movements**, **calisthenics**, and **peak athletic conditioning**.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
          <a href="#contact" class="px-10 py-4 text-lg font-bold text-f2-black bg-f2-yellow rounded-full shadow-2xl hover:bg-yellow-300 transform hover:scale-105 transition duration-300 uppercase tracking-wider">
            Start Your Transformation
          </a>
          <a href="#services" class="px-10 py-4 text-lg font-bold text-white border-2 border-f2-yellow rounded-full hover:bg-f2-yellow hover:text-f2-black transition duration-300 uppercase tracking-wider">
            View My Work
          </a>
        </div>
      </div>
    </section>

    <hr class="border-f2-yellow my-0">

    <section id="about" class="py-24 bg-gray-900">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center space-y-12 md:space-y-0 md:space-x-12">
        <div class="md:w-1/2 text-center md:text-left">
          <h2 class="text-4xl sm:text-5xl font-extrabold text-f2-yellow mb-6 font-serif">Who is Frank?</h2>
          <p class="text-xl leading-relaxed text-gray-300 mb-8">
            I'm a **certified personal trainer** with **7 years of experience**, specializing in tailored workout programs that align with each client's goals, fitness level, and lifestyle.
          </p>
          <p class="text-xl leading-relaxed text-gray-300">
            My background in **professional football and rugby** drives my passion for training athletes and those seeking **sport-specific training**. I also lead **team training** and **corporate fitness sessions**, offering engaging, results-driven workouts for groups and organizations.
          </p>
        </div>
        
        <div class="md:w-1/2 flex justify-center">
          <div class="relative">
            <img src="bio9.webp" alt="Frank Murule, Personal Trainer" class="rounded-lg shadow-2xl max-w-sm w-full md:max-w-full transform hover:scale-105 transition duration-500 ease-in-out">
            <div class="absolute inset-0 ring-4 ring-f2-yellow ring-offset-8 ring-offset-gray-900 rounded-lg"></div>
          </div>
        </div>
      </div>
    </section>

    <hr class="border-f2-yellow my-0">

    <section id="services" class="py-24 bg-f2-black">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-5xl font-extrabold text-white mb-4 font-serif">My Fitness Training Portfolio</h2>
        <p class="text-xl text-gray-400 mb-16 max-w-2xl mx-auto">
          From individual transformation to corporate wellness, I offer tailored programs designed for your ultimate fitness goals.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
          <div class="group relative overflow-hidden bg-gray-900 rounded-t-[100px] shadow-2xl p-6 transition duration-500 hover:bg-gray-800">
            <div class="h-64 flex justify-center items-end p-4">
              <img src="bio4.webp" alt="Group stretching class" class="object-cover w-full h-full transform transition duration-500 group-hover:scale-105 rounded-t-[80px]">
            </div>
            <h3 class="mt-6 text-3xl font-bold text-f2-yellow">Strength Training</h3>
            <p class="mt-2 text-gray-300">Build functional muscle and boost power using progressive overload techniques and bodyweight movements.</p>
          </div>

          <div class="group relative overflow-hidden bg-gray-900 rounded-t-[100px] shadow-2xl p-6 transition duration-500 hover:bg-gray-800">
            <div class="h-64 flex justify-center items-end p-4">
              <div class="bg-gray-700 w-full h-full rounded-t-[80px] flex items-center justify-center">
                <p class="text-gray-400 text-lg">Image Placeholder</p>
              </div>
            </div>
            <h3 class="mt-6 text-3xl font-bold text-f2-yellow">Conditioning</h3>
            <p class="mt-2 text-gray-300">Enhance endurance, speed, and agility, critical for professional and sport-specific performance.</p>
          </div>

          <div class="group relative overflow-hidden bg-gray-900 rounded-t-[100px] shadow-2xl p-6 transition duration-500 hover:bg-gray-800">
            <div class="h-64 flex justify-center items-end p-4">
              <div class="bg-gray-700 w-full h-full rounded-t-[80px] flex items-center justify-center">
                <p class="text-gray-400 text-lg">Image Placeholder</p>
              </div>
            </div>
            <h3 class="mt-6 text-3xl font-bold text-f2-yellow">Boxing</h3>
            <p class="mt-2 text-gray-300">High-intensity, full-body workout focusing on footwork, power, and cardiovascular stamina.</p>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">
          <div class="p-6 border border-f2-yellow/30 rounded-lg bg-gray-900 hover:bg-gray-800 transition duration-300">
            <h4 class="text-2xl font-semibold text-f2-yellow">Spin Class</h4>
            <p class="mt-1 text-gray-400">Energizing group cycling for maximum cardio burn.</p>
          </div>
          <div class="p-6 border border-f2-yellow/30 rounded-lg bg-gray-900 hover:bg-gray-800 transition duration-300">
            <h4 class="text-2xl font-semibold text-f2-yellow">Group Training</h4>
            <p class="mt-1 text-gray-400">Motivating workouts in a supportive, community environment.</p>
          </div>
          <div class="p-6 border border-f2-yellow/30 rounded-lg bg-gray-900 hover:bg-gray-800 transition duration-300">
            <h4 class="text-2xl font-semibold text-f2-yellow">Team Building</h4>
            <p class="mt-1 text-gray-400">Fitness-focused events for corporate wellness and cohesion.</p>
          </div>
          <div class="p-6 border border-f2-yellow/30 rounded-lg bg-gray-900 hover:bg-gray-800 transition duration-300">
            <h4 class="text-2xl font-semibold text-f2-yellow">Nutrition Coaching</h4>
            <p class="mt-1 text-gray-400">Lifestyle advice and meal planning support.</p>
          </div>
        </div>

      </div>
    </section>

    <hr class="border-f2-yellow my-0">

    <section id="style" class="py-24 bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-5xl font-extrabold text-white mb-16 font-serif">The F2 Functional Fitness Edge</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
          <div class="p-8 bg-f2-black rounded-xl shadow-2xl border-b-4 border-f2-yellow transform hover:-translate-y-1 transition duration-300">
            <div class="text-f2-yellow text-6xl mb-4">🤸‍♂️</div>
            <h3 class="text-3xl font-bold text-white mb-3">Bodyweight & Explosive Power</h3>
            <p class="text-gray-300 text-lg">
              Mastering the basics of **calisthenics** (handstand walks, muscle-ups) and **plyometrics** for raw, explosive functional movement.
            </p>
          </div>

          <div class="p-8 bg-f2-black rounded-xl shadow-2xl border-b-4 border-f2-yellow transform hover:-translate-y-1 transition duration-300">
            <div class="text-f2-yellow text-6xl mb-4">💪</div>
            <h3 class="text-3xl font-bold text-white mb-3">Functional Tools Mastery</h3>
            <p class="text-gray-300 text-lg">
              Integrating **kettlebell movements**, sled pushes, and varied equipment to build total-body coordination and strength.
            </p>
          </div>

          <div class="p-8 bg-f2-black rounded-xl shadow-2xl border-b-4 border-f2-yellow transform hover:-translate-y-1 transition duration-300">
            <div class="text-f2-yellow text-6xl mb-4">🔥</div>
            <h3 class="text-3xl font-bold text-white mb-3">Mindset & Motivation</h3>
            <p class="text-gray-300 text-lg">
              Driven by the philosophy: **"The hardest day was yesterday."** Focusing on consistent, positive progression and a fitness-first lifestyle.
            </p>
          </div>
        </div>
        
        <div class="mt-16 text-2xl text-gray-400 italic">
          "I incorporate calisthenics, plyometrics, and explosive movements into my programs." — Coach Frank
        </div>
      </div>
    </section>

    <hr class="border-f2-yellow my-0">

    <section id="contact" class="py-24 bg-f2-black">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-5xl font-extrabold text-f2-yellow mb-4 font-serif">Ready to Train?</h2>
        <p class="text-2xl text-gray-300 mb-10">
          Connect with Coach Frank today to discuss your goals and begin your custom-tailored fitness journey.
        </p>

        <a href="https://instagram.com/frankfit_254" target="_blank" class="inline-block px-12 py-5 text-xl font-extrabold text-f2-black bg-f2-yellow rounded-full shadow-2xl hover:bg-yellow-300 transform hover:scale-105 transition duration-300 uppercase tracking-wider">
          <div class="flex items-center justify-center">
            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.013 4.851.071l1.545.07c.801.037 1.464.185 2.09.432a4.42 4.42 0 0 1 1.706 1.115 4.42 4.42 0 0 1 1.115 1.706c.247.626.395 1.289.432 2.09l.07 1.545c.058 1.267.071 1.647.071 4.851s-.013 3.584-.071 4.851l-.07 1.545c-.037.801-.185 1.464-.432 2.09a4.42 4.42 0 0 1-1.115 1.706 4.42 4.42 0 0 1-1.706 1.115c-.626.247-1.289.395-2.09.432l-1.545.07c-1.267.058-1.647.071-4.851.071s-3.584-.013-4.851-.071l-1.545-.07c-.801-.037-1.464-.185-2.09-.432a4.42 4.42 0 0 1-1.706-1.115 4.42 4.42 0 0 1-1.115-1.706c-.247-.626-.395-1.289-.432-2.09l-.07-1.545c-.058-1.267-.071-1.647-.071-4.851s.013-3.584.071-4.851l.07-1.545c.037-.801.185-1.464.432-2.09a4.42 4.42 0 0 1 1.115-1.706 4.42 4.42 0 0 1 1.706-1.115c.626-.247 1.289-.395 2.09-.432l1.545-.07c1.267-.058 1.647-.071 4.851-.071zM12 4.74c-3.143 0-3.536.012-4.789.068l-1.488.07c-.559.026-.957.142-1.34.298-.382.156-.732.37-1.066.704a2.76 2.76 0 0 0-.704 1.066c-.156.383-.272.781-.298 1.34l-.07 1.488c-.056 1.253-.068 1.646-.068 4.789s.012 3.536.068 4.789l.07 1.488c.026.559.142.957.298 1.34.156.382.37.732.704 1.066.334.334.684.548 1.066.704.383.156.781.272 1.34.298l1.488.07c1.253.056 1.646.068 4.789.068s3.536-.012 4.789-.068l1.488-.07c.559-.026.957-.142 1.34-.298.382-.156.732-.37 1.066-.704.334-.334.548-.684.704-1.066.156-.383.272-.781.298-1.34l.07-1.488c.056-1.253.068-1.646.068-4.789s-.012-3.536-.068-4.789l-.07-1.488c-.026-.559-.142-.957-.298-1.34a2.76 2.76 0 0 0-.704-1.066 2.76 2.76 0 0 0-1.066-.704c-.383-.156-.781-.272-1.34-.298l-1.488-.07c-1.253-.056-1.646-.068-4.789-.068zM12 6.864a5.136 5.136 0 1 0 0 10.272 5.136 5.136 0 0 0 0-10.272zM12 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zM18.41 5.617a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z"/></svg>
            Follow @frankfit_254
          </div>
        </a>
      </div>
    </section>

  </main>

  <footer class="bg-gray-900 py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center text-sm text-gray-400">
      <p>&copy; 2025 Frank Murule - F2 Functional Fitness. All rights reserved.</p>
      <a href="#hero" class="text-f2-yellow hover:text-white transition duration-300 flex items-center" id="scroll-to-top">
        Back to Top
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
      </a>
    </div>
  </footer>

  <script>
    // Two tab spaces for indentation, as requested.
    // 1. Mobile Menu Toggle
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });

    // Close mobile menu on link click (for smooth scrolling)
    document.querySelectorAll('#mobile-menu a').forEach(item => {
      item.addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.add('hidden');
      });
    });

    // 2. Simple Scroll-to-Top fade (optional visual enhancement)
    const topButton = document.getElementById('scroll-to-top');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        topButton.classList.remove('opacity-0');
        topButton.classList.add('opacity-100');
      } else {
        topButton.classList.remove('opacity-100');
        topButton.classList.add('opacity-0');
      }
    });

    // Simple smooth scroll to targets (optional)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>

</body>
</html>
