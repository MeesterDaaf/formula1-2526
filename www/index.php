<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Pulse | The Ultimate Formula 1 Experience</title>
    <link rel="icon" type="image/x-icon" href="/static/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #e10600 0%, #000000 100%);
        }

        .track-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .driver-card:hover .driver-image {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
   
    <?php include 'nav.php' ?>

    <!-- Hero Section -->
    <section id="hero" class="hero-gradient min-h-screen flex items-center pt-20">
        <div id="vanta-bg" class="absolute inset-0"></div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h1 class="text-5xl md:text-7xl font-bold mb-6">Experience the <span
                        class="bg-gradient-to-r from-red-600 to-red-400 bg-clip-text text-transparent">Thrill</span> of
                    F1</h1>
                <p class="text-xl md:text-2xl mb-10 text-gray-300">Your ultimate destination for Formula 1 news, race
                    updates, and behind-the-scenes action.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button
                        class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-full font-semibold transition transform hover:scale-105">
                        Latest News
                    </button>
                    <button
                        class="bg-transparent border-2 border-white hover:bg-white hover:text-black text-white px-8 py-3 rounded-full font-semibold transition transform hover:scale-105">
                        Watch Highlights
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Next Race Section -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center" data-aos="fade-up">Next Race</h2>
            <div class="max-w-6xl mx-auto bg-gray-800 rounded-xl overflow-hidden shadow-2xl" data-aos="fade-up">
                <div class="md:flex">
                    <div class="md:w-1/2">
                        <img src="http://static.photos/technology/1200x630/42" alt="Circuit"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="md:w-1/2 p-8">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-red-600 flex items-center justify-center mr-4">
                                <i data-feather="calendar" class="text-white"></i>
                            </div>
                            <div>
                                <p class="text-gray-400">Race Weekend</p>
                                <h3 class="text-2xl font-bold">Monaco Grand Prix</h3>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 my-6">
                            <div class="bg-gray-700 p-4 rounded-lg">
                                <p class="text-gray-400">Practice 1</p>
                                <p class="font-semibold">May 24, 10:30 AM</p>
                            </div>
                            <div class="bg-gray-700 p-4 rounded-lg">
                                <p class="text-gray-400">Qualifying</p>
                                <p class="font-semibold">May 25, 2:00 PM</p>
                            </div>
                            <div class="bg-gray-700 p-4 rounded-lg">
                                <p class="text-gray-400">Practice 2</p>
                                <p class="font-semibold">May 24, 2:00 PM</p>
                            </div>
                            <div class="bg-gray-700 p-4 rounded-lg">
                                <p class="text-gray-400">Race</p>
                                <p class="font-semibold">May 26, 3:00 PM</p>
                            </div>
                        </div>
                        <p class="text-gray-300 mb-6">The crown jewel of Formula 1 returns to the streets of Monte
                            Carlo. Known for its tight corners and glamorous setting, the Monaco GP is the ultimate test
                            of driver skill.</p>
                        <button
                            class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-lg font-semibold transition">
                            Set Reminder
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured News -->
    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center" data-aos="fade-up">Latest News</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- News Card 1 -->
                <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg transition transform hover:-translate-y-2"
                    data-aos="fade-up">
                    <img src="http://static.photos/sport/1024x576/1" alt="News" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-red-600 text-white text-xs px-2 py-1 rounded">Breaking</span>
                            <span class="text-gray-400 text-sm ml-2">May 15, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Verstappen Dominates Imola GP</h3>
                        <p class="text-gray-400 mb-4">The reigning champion extends his lead with another flawless
                            performance at the Emilia Romagna Grand Prix.</p>
                        <a href="#" class="text-red-500 font-semibold flex items-center">
                            Read More <i data-feather="arrow-right" class="ml-2 w-4"></i>
                        </a>
                    </div>
                </div>

                <!-- News Card 2 -->
                <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg transition transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="100">
                    <img src="http://static.photos/automotive/1024x576/2" alt="News" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-blue-600 text-white text-xs px-2 py-1 rounded">Technical</span>
                            <span class="text-gray-400 text-sm ml-2">May 12, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Ferrari Unveils Major Upgrade Package</h3>
                        <p class="text-gray-400 mb-4">The Scuderia brings significant aerodynamic changes aiming to
                            close the gap to Red Bull in the championship.</p>
                        <a href="#" class="text-red-500 font-semibold flex items-center">
                            Read More <i data-feather="arrow-right" class="ml-2 w-4"></i>
                        </a>
                    </div>
                </div>

                <!-- News Card 3 -->
                <div class="bg-gray-900 rounded-xl overflow-hidden shadow-lg transition transform hover:-translate-y-2"
                    data-aos="fade-up" data-aos-delay="200">
                    <img src="http://static.photos/people/1024x576/3" alt="News" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="bg-yellow-600 text-white text-xs px-2 py-1 rounded">Rumors</span>
                            <span class="text-gray-400 text-sm ml-2">May 10, 2024</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Hamilton's Future: Mercedes or Ferrari?</h3>
                        <p class="text-gray-400 mb-4">Speculations intensify as the seven-time world champion's contract
                            negotiations continue.</p>
                        <a href="#" class="text-red-500 font-semibold flex items-center">
                            Read More <i data-feather="arrow-right" class="ml-2 w-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12" data-aos="fade-up">
                <button
                    class="bg-transparent border-2 border-red-600 hover:bg-red-600 text-white px-8 py-3 rounded-full font-semibold transition">
                    View All News
                </button>
            </div>
        </div>
    </section>

    <!-- Drivers Standings -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center" data-aos="fade-up">2024 Driver Standings</h2>
            <div class="max-w-4xl mx-auto">
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl" data-aos="fade-up">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-700 text-left">
                                    <th class="py-4 px-6">Position</th>
                                    <th class="py-4 px-6">Driver</th>
                                    <th class="py-4 px-6">Team</th>
                                    <th class="py-4 px-6">Points</th>
                                    <th class="py-4 px-6">Wins</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-700 hover:bg-gray-750">
                                    <td class="py-4 px-6 font-bold">1</td>
                                    <td class="py-4 px-6 flex items-center">
                                        <img src="http://static.photos/people/200x200/10" alt="Verstappen"
                                            class="w-10 h-10 rounded-full mr-3">
                                        <span>Max Verstappen</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 bg-blue-600 rounded-full mr-2"></div>
                                            Red Bull
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-bold">136</td>
                                    <td class="py-4 px-6">5</td>
                                </tr>
                                <tr class="border-b border-gray-700 hover:bg-gray-750">
                                    <td class="py-4 px-6 font-bold">2</td>
                                    <td class="py-4 px-6 flex items-center">
                                        <img src="http://static.photos/people/200x200/11" alt="Perez"
                                            class="w-10 h-10 rounded-full mr-3">
                                        <span>Sergio Perez</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 bg-blue-600 rounded-full mr-2"></div>
                                            Red Bull
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-bold">101</td>
                                    <td class="py-4 px-6">1</td>
                                </tr>
                                <tr class="border-b border-gray-700 hover:bg-gray-750">
                                    <td class="py-4 px-6 font-bold">3</td>
                                    <td class="py-4 px-6 flex items-center">
                                        <img src="http://static.photos/people/200x200/12" alt="Leclerc"
                                            class="w-10 h-10 rounded-full mr-3">
                                        <span>Charles Leclerc</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 bg-red-600 rounded-full mr-2"></div>
                                            Ferrari
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-bold">98</td>
                                    <td class="py-4 px-6">0</td>
                                </tr>
                                <tr class="border-b border-gray-700 hover:bg-gray-750">
                                    <td class="py-4 px-6 font-bold">4</td>
                                    <td class="py-4 px-6 flex items-center">
                                        <img src="http://static.photos/people/200x200/13" alt="Sainz"
                                            class="w-10 h-10 rounded-full mr-3">
                                        <span>Carlos Sainz</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 bg-red-600 rounded-full mr-2"></div>
                                            Ferrari
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-bold">83</td>
                                    <td class="py-4 px-6">1</td>
                                </tr>
                                <tr class="hover:bg-gray-750">
                                    <td class="py-4 px-6 font-bold">5</td>
                                    <td class="py-4 px-6 flex items-center">
                                        <img src="http://static.photos/people/200x200/14" alt="Norris"
                                            class="w-10 h-10 rounded-full mr-3">
                                        <span>Lando Norris</span>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 bg-orange-500 rounded-full mr-2"></div>
                                            McLaren
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-bold">76</td>
                                    <td class="py-4 px-6">0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-center mt-8" data-aos="fade-up">
                    <button
                        class="bg-transparent border-2 border-red-600 hover:bg-red-600 text-white px-8 py-3 rounded-full font-semibold transition">
                        Full Standings
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i data-feather="flag" class="text-red-600"></i>
                        <span
                            class="text-xl font-bold bg-gradient-to-r from-red-600 to-red-400 bg-clip-text text-transparent">F1
                            PULSE</span>
                    </div>
                    <p class="text-gray-400">Your ultimate destination for Formula 1 news, race updates, and
                        behind-the-scenes action.</p>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="text-gray-400 hover:text-red-500 transition">
                            <i data-feather="facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-500 transition">
                            <i data-feather="twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-500 transition">
                            <i data-feather="instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-500 transition">
                            <i data-feather="youtube"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-red-500 transition">Schedule</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-red-500 transition">Results</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-red-500 transition">Standings</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-red-500 transition">Teams</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-red-500 transition">Drivers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Information</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-red-500 transition">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-red-500 transition">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-red-500 transition">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-red-500 transition">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-red-500 transition">Cookie Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Newsletter</h3>
                    <p class="text-gray-400 mb-4">Subscribe to get the latest F1 news delivered to your inbox.</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email"
                            class="bg-gray-800 text-white px-4 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-red-600 w-full">
                        <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-r-lg transition">
                            <i data-feather="send"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500">
                <p>© 2024 F1 Pulse. All rights reserved. This site is not affiliated with Formula 1, Formula One
                    Management, Formula One Administration, or any other subsidiaries associated with the Formula 1
                    companies.</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize animations and effects
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        feather.replace();

        // Vanta.js background for hero section
        VANTA.GLOBE({
            el: "#vanta-bg",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0xe10600,
            backgroundColor: 0x0,
            size: 0.8
        });
    </script>
</body>

</html>