CREATE TABLE gallery (
  id INT AUTO_INCREMENT PRIMARY KEY,
  img_link VARCHAR(255) NOT NULL,
  location VARCHAR(50) DEFAULT NULL,
  title VARCHAR(100) DEFAULT NULL,
  detail TEXT DEFAULT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO gallery (img_link, location, title, detail, created_at, updated_at) VALUES
(
  '/assets/images/gallery/1.webp',
  'Nairobi',
  'Functional Group Training',
  'High-energy team workout blending strength, conditioning, and community accountability on the training floor.',
  NOW(),
  NOW()
),
(
  '/assets/images/gallery/2.webp',
  'Kiambu',
  'HIIT & Conditioning Circuit',
  'Explosive interval stations combining sled pushes, med-ball slams and partner rounds to build stamina and grit.',
  NOW(),
  NOW()
),
(
  '/assets/images/gallery/3.webp',
  'Thika',
  'Spin & Sweat Team Ride',
  'Rhythm-driven cycling session fueled by music, sweat, and collective motivation. Better performance together.',
  NOW(),
  NOW()
),
(
  '/assets/images/gallery/4.webp',
  'Murang\'a',
  'Partner Charity WOD',
  'Community workout supporting a cause—pairs take on met-con rounds, reps shared, impact doubled.',
  NOW(),
  NOW()
),
(
  '/assets/images/gallery/5.webp',
  'Ruiru',
  'Bootcamp Mix-Up',
  'Outdoor functional bootcamp featuring agility ladders, sandbags, and team challenges under the open sky.',
  NOW(),
  NOW()
),
(
  '/assets/images/gallery/6.webp',
  'Limuru',
  'Mobility & Recovery Day',
  'Stretch flow, cold plunge and guided breathwork helping members recover stronger and move better.',
  NOW(),
  NOW()
),
(
  '/assets/images/gallery/7.webp',
  'Nairobi',
  'Strength Pod Progression',
  'Training pods lift, spot, and scale together. Showcasing progressive overload culture in action.',
  NOW(),
  NOW()
),
(
  '/assets/images/gallery/8.webp',
  'Kiambu',
  'Family-Friendly Fitness Carnival',
  'Active lifestyle event engaging members and families with fun mini-fitness games and cardio contests.',
  NOW(),
  NOW()
),
(
  '/assets/images/gallery/9.webp',
  'Thika',
  'Endurance Challenge Day',
  'Timed assault-bike sprints, row races and wall-to-wall conditioning bringing out maximum heart from every athlete.',
  NOW(),
  NOW()
),
(
  '/assets/images/gallery/10.webp',
  'Murang\'a',
  'Welcome WOD Social Night',
  'Community hang with workout, awards, recovery mocktails and fitness connections beyond the gym.',
  NOW(),
  NOW()
),
(
  '/assets/images/gallery/11.webp',
  'Ruiru',
  'Compact Workout Innovation',
  'Smart space, smart programming. Showing how short intentional sessions deliver massive conditioning impact.',
  NOW(),
  NOW()
);
