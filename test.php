<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  require __DIR__ . '/config.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Functional Fitness</title>
  <meta name="description" content="Coach Frank — Professional football & rugby background. Calisthenics, plyometrics, kettlebell training and quality programs." />

  <link href="<?php echo ROOT_URL; ?>/assets/css/output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/assets/images/logo/favicon.webp" />
</head>
<body class="antialiased bg-neutral-950 text-slate-200 max-w-full overflow-x-hidden">

  <?php include './includes/header.php'; ?>

  <main id="home">

    <!-- ✅ HERO SECTION -->
    <section class="relative h-screen w-full flex items-center justify-center overflow-hidden">
      <!-- Hero Image and Overlay -->
      <img src="<?php echo ROOT_URL; ?>/assets/images/hero/home.webp" alt="Functional Fitness training" class="absolute inset-0 w-full h-full object-cover object-center">
      <div class="absolute inset-0 bg-black/60"></div>

      <!-- Hero Content -->
      <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-4xl sm:text-6xl font-extrabold tracking-wide mb-4">
          Train Together. <span class="text-yellow-400">Grow Stronger.</span>
        </h1>
        <p class="max-w-2xl mx-auto text-base sm:text-lg text-gray-200 mb-8">
          At <span class="text-yellow-400 font-semibold">Functional Fitness</span>, we move, sweat, and grow as a team — blending performance, strength, and unity into every session.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="#book" class="bg-yellow-400 text-black font-semibold px-6 py-3 rounded-full shadow-md hover:scale-105 hover:shadow-yellow-400/30 transition-all duration-500 ease-in-out">
            Join Team Building
          </a>
          <a href="#programs" class="border border-yellow-400 text-white font-semibold px-6 py-3 rounded-full hover:bg-yellow-400 hover:text-black transition-all duration-500 ease-in-out">
            Join Training Sessions
          </a>
        </div>

        <div class="mt-12 hidden md:flex flex-wrap items-center justify-center gap-8 text-gray-300 text-sm sm:text-base">
          <div class="text-center">
            <div class="text-3xl font-bold text-yellow-400">10+</div>
            <div class="uppercase tracking-wide">Years Experience</div>
          </div>
          <div class="text-center">
            <div class="text-3xl font-bold text-yellow-400">500+</div>
            <div class="uppercase tracking-wide">People Impacted</div>
          </div>
          <div class="text-center">
            <div class="text-3xl font-bold text-yellow-400">3</div>
            <div class="uppercase tracking-wide">Global Locations</div>
          </div>
        </div>
      </div>

      <!-- Indicator Dots -->
      <div class="absolute bottom-[11rem] md:bottom-[10rem] left-1/2 transform -translate-x-1/2 flex items-center justify-center gap-3 z-10">
        <div class="h-2 w-2 bg-white/60 rounded-full"></div>
        <div class="h-2 w-2 bg-yellow-400 rounded-full"></div>
        <div class="h-2 w-2 bg-white/60 rounded-full"></div>
      </div>
    </section>

    <section id="programs" class="py-12 bg-neutral-900/60">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
          <h2 class="text-3xl font-bold text-slate-100">Programs Designed for Every Body</h2>
          <p class="text-slate-300 mt-2 max-w-2xl mx-auto">Our programs are built around teamwork, motivation, and progress. Whether you're seeking strength, endurance, or mental wellness — every session is a step forward together.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <article class="p-6 bg-neutral-800/70 rounded-2xl border border-neutral-800 hover:border-yellow-400/40 transition shadow-sm">
            <h3 class="font-semibold text-lg text-slate-100">Functional Group Training</h3>
            <p class="mt-3 text-slate-300 text-sm">Build strength and confidence through supportive, team-based workouts. Push together, grow together — discover how collaboration turns fitness into a lifestyle.</p>
            <div class="mt-5 flex items-center">
              <span class="text-yellow-400 font-medium">Join the Movement</span>
              <button class="ml-auto text-sm px-3 py-1 rounded-full ring-1 ring-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black transition">Learn more</button>
            </div>
          </article>

          <article class="p-6 bg-neutral-800/70 rounded-2xl border border-neutral-800 hover:border-yellow-400/40 transition shadow-sm">
            <h3 class="font-semibold text-lg text-slate-100">HIIT & Total Conditioning</h3>
            <p class="mt-3 text-slate-300 text-sm">Ignite your endurance with high-intensity group circuits. These sessions build stamina, strengthen team spirit, and keep motivation soaring from start to finish.</p>
            <div class="mt-5 flex items-center">
              <span class="text-yellow-400 font-medium">Feel the Energy</span>
              <button class="ml-auto text-sm px-3 py-1 rounded-full ring-1 ring-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black transition">Learn more</button>
            </div>
          </article>

          <article class="p-6 bg-neutral-800/70 rounded-2xl border border-neutral-800 hover:border-yellow-400/40 transition shadow-sm">
            <h3 class="font-semibold text-lg text-slate-100">Spin & Sweat Sessions</h3>
            <p class="mt-3 text-slate-300 text-sm">Ride with rhythm and unity. Our cycling sessions combine music, movement, and motivation — proving that fitness feels better when done as a team.</p>
            <div class="mt-5 flex items-center">
              <span class="text-yellow-400 font-medium">Be Part of the Team</span>
              <button class="ml-auto text-sm px-3 py-1 rounded-full ring-1 ring-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black transition">Reserve spot</button>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="w-full flex flex-col lg:flex-row items-stretch bg-gradient-to-b from-neutral-900 to-neutral-950 text-white">
      <div class="lg:w-1/2 w-full h-[24rem] lg:h-auto">
        <img src="<?php echo ROOT_URL; ?>/assets/images/health/health.webp" alt="Team Training for Mental and Physical Health" class="w-full h-full object-cover object-center">
      </div>

      <div class="lg:w-1/2 w-full flex flex-col justify-center p-8 lg:p-16 bg-neutral-950">
        <p class="uppercase tracking-wide text-neutral-400 mb-2">Mind • Body • Lifestyle</p>
        <h2 class="text-3xl sm:text-5xl font-extrabold mb-4">Team Building & <span class="text-yellow-400">Training Sessions</span></h2>
        <p class="text-slate-300 leading-relaxed mb-6">At <span class="text-yellow-400 font-semibold">Functional Fitness</span>, we believe true health comes from unity of mind and body. Our <span class="font-semibold text-white">team building experiences</span> foster connection and support, helping relieve stress and strengthen mental resilience.</p>
        <a href="#programs" class="bg-yellow-400 text-black font-semibold px-6 py-3 rounded-full shadow hover:scale-105 transition w-fit">Learn More</a>
      </div>
    </section>

    <section id="trainers" class="py-16 bg-neutral-900/60">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-center justify-between mb-12 text-center sm:text-left">
          <h2 class="text-3xl font-extrabold text-slate-100">Meet the Functional Fitness Team</h2>
          <p class="text-sm text-neutral-400 mt-2 sm:mt-0 uppercase tracking-wide">Leadership · Unity · Growth</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
          <div class="space-y-8">
            <div class="bg-neutral-800/60 rounded-2xl shadow p-6 border border-neutral-800">
              <h3 class="font-semibold text-lg text-slate-100 mb-2">Our Training Philosophy</h3>
              <p class="text-slate-300 text-sm leading-relaxed">We grow stronger together. Our training approach blends discipline, teamwork, and shared energy — creating an uplifting atmosphere where everyone inspires one another. Each workout builds not just strength, but trust and unity within the team.</p>
              <div class="mt-4">
                <a href="#programs" class="inline-flex items-center gap-2 text-yellow-400 font-medium text-sm px-4 py-2 rounded-full ring-1 ring-yellow-400 hover:bg-yellow-400 hover:text-black transition">Learn More</a>
              </div>
            </div>

            <div class="bg-neutral-800/60 rounded-2xl shadow p-6 border border-neutral-800">
              <h3 class="font-semibold text-lg text-slate-100 mb-2">Facilities & Community</h3>
              <p class="text-slate-300 text-sm leading-relaxed">Our facilities and community zones encourage connection and collaboration. Whether it’s team circuits, recovery lounges, or group challenges — every corner is designed to motivate and unite.</p>
              <div class="mt-4">
                <a href="#contact" class="inline-flex items-center gap-2 text-yellow-400 font-medium text-sm px-4 py-2 rounded-full ring-1 ring-yellow-400 hover:bg-yellow-400 hover:text-black transition">View Spaces</a>
              </div>
            </div>

            <div class="bg-neutral-800/60 rounded-2xl shadow p-6 border border-neutral-800">
              <h3 class="font-semibold text-lg text-slate-100 mb-2">Team Leadership</h3>
              <p class="text-slate-300 text-sm leading-relaxed">Led by passionate professionals like <span class="text-yellow-400 font-semibold">Coach Frank</span>, our trainers guide every member with care and motivation. Together, we nurture confidence, build resilience, and celebrate every success — big or small.</p>
              <div class="mt-4">
                <a href="#team" class="inline-flex items-center gap-2 text-yellow-400 font-medium text-sm px-4 py-2 rounded-full ring-1 ring-yellow-400 hover:bg-yellow-400 hover:text-black transition">Meet the Team</a>
              </div>
            </div>
          </div>

          <div class="relative rounded-2xl overflow-hidden shadow-xl">
            <img src="<?php echo ROOT_URL; ?>/assets/images/abouts/about1.webp" alt="Functional Fitness Team" class="w-full h-[34rem] object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/50 flex flex-col justify-center text-center text-white p-8">
              <h3 class="text-2xl font-bold mb-2">Together We Grow Stronger</h3>
              <p class="text-sm max-w-md mx-auto leading-relaxed">Every rep, every challenge, every session — done together. Because real strength is built in unity.</p>
            </div>
          </div>
        </div>

        <div class="mt-12 text-center">
          <p class="text-neutral-400 max-w-2xl mx-auto text-sm">At <span class="text-yellow-400 font-semibold">Functional Fitness</span>, our philosophy is simple — train hard, build trust, and grow as one.</p>
        </div>
      </div>
    </section>

    <section id="philosophy" class="py-20 bg-neutral-950 text-white">
      <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-2xl font-bold mb-6 text-yellow-400">Our Philosophy</h2>
        <p class="text-neutral-300 max-w-3xl mx-auto leading-relaxed">We believe movement is more than exercise — it’s connection, discipline, and growth. At Functional Fitness, every workout is designed to bring people together, build consistency, and create results that last.</p>

        <div class="mt-10 grid grid-cols-1 sm:grid-cols-3 gap-6">
          <div class="p-6 bg-white/5 border border-white/6 rounded-2xl backdrop-blur-sm hover:bg-white/8 transition">
            <h4 class="font-semibold mb-2 text-yellow-400">Community First</h4>
            <p class="text-sm text-neutral-300">We move as one — encouraging and supporting each other through every rep, set, and milestone.</p>
          </div>

          <div class="p-6 bg-white/5 border border-white/6 rounded-2xl backdrop-blur-sm hover:bg-white/8 transition">
            <h4 class="font-semibold mb-2 text-yellow-400">Consistency Wins</h4>
            <p class="text-sm text-neutral-300">Small, steady steps beat short bursts. Our structured sessions keep you showing up — and leveling up.</p>
          </div>

          <div class="p-6 bg-white/5 border border-white/6 rounded-2xl backdrop-blur-sm hover:bg-white/8 transition">
            <h4 class="font-semibold mb-2 text-yellow-400">Functional for Life</h4>
            <p class="text-sm text-neutral-300">Every move has purpose — helping you feel stronger, move better, and live more fully every day.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="community" class="py-20 bg-neutral-900/60 text-slate-200">
      <div class="max-w-6xl mx-auto px-6 text-center">
        <p class="uppercase tracking-wide text-sm text-neutral-400">Together We Grow</p>
        <h2 class="text-3xl font-extrabold mt-2 text-slate-100">Empowerment Through Community & Team Strength</h2>
        <p class="text-neutral-400 max-w-2xl mx-auto mt-4">At the heart of our mission lies unity, movement, and growth — where individuals train, connect, and thrive together.</p>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="rounded-2xl overflow-hidden shadow transition">
            <img src="<?php echo ROOT_URL; ?>/assets/images/community/community1.webp" alt="Nutrition Coaching" class="w-full h-72 object-cover" />
            <div class="p-6 bg-neutral-900">
              <h4 class="font-semibold text-lg text-slate-100">Nutrition Coaching</h4>
              <p class="text-sm text-neutral-400 mt-2">Learn how to fuel your body for peak performance and recovery with balance and sustainability.</p>
              <button class="cursor-pointer mt-4 bg-yellow-400 text-black px-4 py-2 rounded-full hover:scale-105 transition">Learn More</button>
            </div>
          </div>

          <div class="rounded-2xl overflow-hidden shadow transition">
            <img src="<?php echo ROOT_URL; ?>/assets/images/community/community2.webp" alt="Fitness Training" class="w-full h-72 object-cover" />
            <div class="p-6 bg-neutral-900">
              <h4 class="font-semibold text-lg text-slate-100">Fitness Training</h4>
              <p class="text-sm text-neutral-400 mt-2">Build strength and endurance with structured workouts guided by passionate, certified coaches.</p>
              <button class="cursor-pointer mt-4 bg-yellow-400 text-black px-4 py-2 rounded-full hover:scale-105 transition">Learn More</button>
            </div>
          </div>

          <div class="rounded-2xl overflow-hidden shadow transition">
            <img src="<?php echo ROOT_URL; ?>/assets/images/community/community3.webp" alt="Virtual Classes" class="w-full h-72 object-cover" />
            <div class="p-6 bg-neutral-900">
              <h4 class="font-semibold text-lg text-slate-100">Virtual Classes</h4>
              <p class="text-sm text-neutral-400 mt-2">Join live or on-demand classes from anywhere — stay consistent and connected wherever you are.</p>
              <button class="cursor-pointer mt-4 bg-yellow-400 text-black px-4 py-2 rounded-full hover:scale-105 transition">Learn More</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="book" class="relative py-24 overflow-hidden">
      <div class="absolute inset-0 bg-fixed bg-center bg-cover bg-no-repeat" style="background-image: url('<?php echo ROOT_URL; ?>/assets/images/book/book.webp');"></div>
      <div class="absolute inset-0 bg-black/75"></div>

      <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-5xl font-extrabold mb-6 tracking-tight text-slate-100">Ready to Transform Your Game?</h2>
        <p class="text-slate-300 max-w-2xl mx-auto mb-12 text-lg leading-relaxed">Take the first step toward a stronger, more confident you. Book a personalized session with our top trainers today.</p>

        <form id="bookForm" class="flex flex-col sm:flex-row justify-center items-center gap-4">
          <input type="text" name="name" required placeholder="Your Name" class="px-6 py-3 w-full sm:w-56 rounded-full focus:outline-none text-slate-100 bg-neutral-900/40 border border-neutral-700 placeholder-neutral-500" />
          <input type="email" name="email" required placeholder="Email Address" class="px-6 py-3 w-full sm:w-64 rounded-full focus:outline-none text-slate-100 bg-neutral-900/40 border border-neutral-700 placeholder-neutral-500" />
          <button type="submit" class="bg-yellow-400 text-black font-semibold px-8 py-3 rounded-full hover:scale-105 transition shadow">Book Now</button>
        </form>

        <p class="mt-8 text-sm text-neutral-400 italic">No commitment — just a chance to experience excellence.</p>
      </div>

      <div class="absolute top-6 left-6 w-44 h-44 bg-yellow-400/6 rounded-full blur-3xl"></div>
      <div class="absolute bottom-6 right-6 w-60 h-60 bg-white/6 rounded-full blur-3xl"></div>
    </section>

    <section id="memberships" class="py-20 bg-neutral-900/60 text-slate-200">
      <div class="max-w-6xl mx-auto px-6 text-center">
        <p class="uppercase tracking-wide text-sm text-neutral-400">Choose Your Journey</p>
        <h2 class="text-3xl font-extrabold mt-2 text-slate-100">Memberships Built for Every Lifestyle</h2>
        <p class="text-neutral-400 max-w-2xl mx-auto mt-4">Select the plan that fits your schedule and goals — from full community access to flexible drop-in options.</p>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="p-8 bg-neutral-800 rounded-2xl shadow-lg flex flex-col justify-between">
            <div>
              <h4 class="font-semibold text-lg text-slate-100">Community Pass</h4>
              <p class="text-sm text-neutral-400 mt-3">Enjoy unlimited classes, exclusive member events, and early booking privileges — your all-in-one experience.</p>
              <ul class="mt-4 text-sm text-neutral-400 space-y-1">
                <li>• Unlimited group sessions</li>
                <li>• Member-only events</li>
                <li>• Early booking privileges</li>
              </ul>
            </div>
            <button class="mt-6 bg-yellow-400 text-black px-5 py-2 rounded-full hover:scale-105 transition">Join the Community</button>
          </div>

          <div class="p-8 bg-neutral-800/60 rounded-2xl shadow flex flex-col justify-between border border-neutral-800">
            <div>
              <h4 class="font-semibold text-lg text-slate-100">Drop-in Pack</h4>
              <p class="text-sm text-neutral-400 mt-3">Get the freedom to train when it suits you best — perfect for those with dynamic schedules.</p>
              <ul class="mt-4 text-sm text-neutral-400 space-y-1">
                <li>• Flexible booking</li>
                <li>• No contracts</li>
                <li>• Great for exploration</li>
              </ul>
            </div>
            <button class="mt-6 bg-yellow-400 text-black px-5 py-2 rounded-full hover:scale-105 transition">Reserve a Spot</button>
          </div>

          <div class="p-8 bg-neutral-800/60 rounded-2xl shadow flex flex-col justify-between border border-neutral-800">
            <div>
              <h4 class="font-semibold text-lg text-slate-100">Corporate & Group Plans</h4>
              <p class="text-sm text-neutral-400 mt-3">Custom wellness programs designed to boost team morale, unity, and long-term performance.</p>
              <ul class="mt-4 text-sm text-neutral-400 space-y-1">
                <li>• On-site team sessions</li>
                <li>• Tailored workshops</li>
                <li>• Ongoing wellness support</li>
              </ul>
            </div>
            <button class="mt-6 bg-yellow-400 text-black px-5 py-2 rounded-full hover:scale-105 transition">Contact Sales</button>
          </div>
        </div>

        <button class="mt-10 bg-neutral-800 text-yellow-400 px-6 py-2 rounded-full hover:bg-yellow-400 hover:text-black transition">Explore All Memberships</button>
      </div>
    </section>

    <section id="testimonials" class="py-20 bg-neutral-950 text-slate-200 relative overflow-hidden">
      <div class="absolute inset-0 opacity-5 bg-[url('<?php echo ROOT_URL; ?>/assets/images/patterns/noise-texture.png')] bg-cover"></div>

      <div class="max-w-6xl mx-auto px-6 relative z-10 text-center">
        <p class="uppercase tracking-widest text-yellow-400 text-sm mb-3">Real Voices · Real Results</p>
        <h3 class="text-3xl md:text-4xl font-extrabold mb-12 text-slate-100">What Our Members Say</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <article class="bg-neutral-800 text-slate-200 border border-neutral-800 rounded-xl p-8 shadow-md hover:shadow-lg transition-transform hover:-translate-y-1">
            <p class="italic text-neutral-300 leading-relaxed">“The sessions are structured perfectly — I’ve gained strength, balance, and a team spirit that keeps me showing up every week.”</p>
            <div class="mt-6 border-t border-neutral-800 pt-4">
              <div class="font-semibold text-slate-100">Sarah L.</div>
              <div class="text-sm text-neutral-400">Fitness Enthusiast</div>
            </div>
          </article>

          <article class="bg-neutral-800 text-slate-200 border border-neutral-800 rounded-xl p-8 shadow-md hover:shadow-lg transition-transform hover:-translate-y-1">
            <p class="italic text-neutral-300 leading-relaxed">“The personalized coaching and group motivation pushed me to new levels. It’s more than fitness — it’s family.”</p>
            <div class="mt-6 border-t border-neutral-800 pt-4">
              <div class="font-semibold text-slate-100">Daniel K.</div>
              <div class="text-sm text-neutral-400">Amateur Boxer</div>
            </div>
          </article>

          <article class="bg-neutral-800 text-slate-200 border border-neutral-800 rounded-xl p-8 shadow-md hover:shadow-lg transition-transform hover:-translate-y-1">
            <p class="italic text-neutral-300 leading-relaxed">“Every class feels electric — the trainers and team members create an environment where growth is inevitable.”</p>
            <div class="mt-6 border-t border-neutral-800 pt-4">
              <div class="font-semibold text-slate-100">Maria N.</div>
              <div class="text-sm text-neutral-400">Group Training Member</div>
            </div>
          </article>
        </div>

        <div class="mt-14">
          <p class="text-neutral-400 max-w-2xl mx-auto text-sm leading-relaxed">Our community thrives on mutual support, encouragement, and progress — because the best transformations happen together.</p>
        </div>
      </div>
    </section>

    <section id="faq" class="py-20 bg-neutral-900/40">
      <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4 text-yellow-400">Frequently Asked Questions</h2>
        <p class="text-neutral-400 max-w-2xl mx-auto mb-10">We’ve compiled answers to the most common questions about our programs, training options, and memberships.</p>

        <div class="mt-6 space-y-5 text-left">
          <details class="group p-5 bg-neutral-800/50 rounded-2xl border border-neutral-800">
            <summary class="font-semibold cursor-pointer flex justify-between items-center">
              <span>Do I need experience to join group classes?</span>
              <span class="text-yellow-400 group-open:rotate-180 transition-transform duration-300">▼</span>
            </summary>
            <p class="mt-3 text-neutral-400 leading-relaxed text-sm">Not at all! Our classes are built for all experience levels. Coaches guide each participant through safe, progressive movements that adapt to your fitness level.</p>
          </details>

          <details class="group p-5 bg-neutral-800/50 rounded-2xl border border-neutral-800">
            <summary class="font-semibold cursor-pointer flex justify-between items-center">
              <span>Are sessions suitable for older adults?</span>
              <span class="text-yellow-400 group-open:rotate-180 transition-transform duration-300">▼</span>
            </summary>
            <p class="mt-3 text-neutral-400 leading-relaxed text-sm">Yes! We design every program with accessibility in mind. Our coaches provide joint-friendly alternatives and personalized pacing.</p>
          </details>

          <details class="group p-5 bg-neutral-800/50 rounded-2xl border border-neutral-800">
            <summary class="font-semibold cursor-pointer flex justify-between items-center">
              <span>Can my company book group sessions?</span>
              <span class="text-yellow-400 group-open:rotate-180 transition-transform duration-300">▼</span>
            </summary>
            <p class="mt-3 text-neutral-400 leading-relaxed text-sm">Absolutely. We provide customized corporate wellness packages for teams of all sizes.</p>
          </details>
        </div>
      </div>
    </section>

    <section id="contact" class="relative py-24 bg-cover bg-center" style="background-image: url('<?php echo ROOT_URL; ?>/assets/images/contact/contact.webp');">
      <div class="absolute inset-0 bg-black/75"></div>

      <div class="relative max-w-6xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="bg-neutral-900/60 p-8 rounded-2xl backdrop-blur-sm border border-neutral-800 shadow-2xl">
          <h4 class="text-2xl font-bold text-yellow-400 uppercase tracking-wide text-center">Get In Touch</h4>
          <p class="text-neutral-400 text-sm text-center mt-3 mb-6">Have a question, partnership idea, or want to start your fitness journey? Send us a message — we’ll get back to you shortly.</p>

          <form id="contactForm" class="space-y-5">
            <input name="cname" type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-full bg-transparent border border-neutral-700 text-slate-100 placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition" />
            <input name="cemail" type="email" placeholder="Your Email" class="w-full px-4 py-3 rounded-full bg-transparent border border-neutral-700 text-slate-100 placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition" />
            <textarea name="cmessage" rows="4" placeholder="Your Message" class="w-full px-4 py-3 rounded-2xl bg-transparent border border-neutral-700 text-slate-100 placeholder-neutral-500 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition"></textarea>
            <button type="submit" class="w-full bg-yellow-400 text-black py-3 rounded-full font-semibold hover:scale-105 transition">Send Message</button>
          </form>
        </div>

        <div class="w-full h-[400px] rounded-2xl overflow-hidden shadow-lg border border-neutral-800">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.859182276744!2d36.82194601532269!3d-1.2920650359880345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d4ab0f9a37%3A0x501f8f83aa4f5a0!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2ske!4v1700000000000!5m2!1sen!2ske" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

  </main>

  <button id="scrollTop" class="hidden fixed bottom-12 right-6 bg-yellow-400 text-black text-[1.1rem] rounded-full p-3 z-40 hover:scale-110 transition" onclick="scrollToTop()" title="Go To Top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="18" height="18" fill="currentColor"><path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8l256 0c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
  </button>

  <script>
    (function () {
      const menuToggle = document.getElementById('menuToggle');
      const mobileMenu = document.getElementById('mobileMenu');
      const closeMenu = document.getElementById('closeMenu');
      const backdrop = document.getElementById('sidebar-backdrop');

      function openMenu() {
        mobileMenu.classList.remove('translate-x-full');
        backdrop.classList.remove('hidden');
        backdrop.classList.add('block');
      }
      function closeMenuFn() {
        mobileMenu.classList.add('translate-x-full');
        backdrop.classList.add('hidden');
        backdrop.classList.remove('block');
      }
      menuToggle && menuToggle.addEventListener('click', openMenu);
      closeMenu && closeMenu.addEventListener('click', closeMenuFn);
      backdrop && backdrop.addEventListener('click', closeMenuFn);

      // scroll to top
      const scrollTopBtn = document.getElementById('scrollTop');
      function onScroll() {
        if (window.scrollY > 400) scrollTopBtn.classList.remove('hidden'); else scrollTopBtn.classList.add('hidden');
      }
      window.addEventListener('scroll', onScroll);
      window.scrollToTop = function () { window.scrollTo({ top: 0, behavior: 'smooth' }); };

      // simple header shrink on scroll
      const header = document.querySelector('header');
      let lastScroll = 0;
      window.addEventListener('scroll', function () {
        const y = window.scrollY;
        if (y > 60) header.classList.add('shadow-lg'); else header.classList.remove('shadow-lg');
        lastScroll = y;
      });
    })();
  </script>

  <script src="<?php echo ROOT_URL; ?>/assets/js/header.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/scroll-to-top.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/scroll-to-view.js"></script>
</body>
</html>
