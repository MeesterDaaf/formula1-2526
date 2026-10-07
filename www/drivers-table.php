<?php

require 'database.php';

$query = "SELECT * FROM drivers"; //string met query tekst
$result = mysqli_query($conn, $query); //echt uitvoeren op de db
$drivers = mysqli_fetch_all($result, MYSQLI_ASSOC); //zet het om naar een multidimensionale/meervoudig assocatieve array

// var_dump($drivers);
// die;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formula 1 Drivers Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #e10600 0%, #000000 100%);
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
   
    <?php include 'nav.php'?>
    
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center" data-aos="fade-up">Formula 1 Drivers</h2>
            <div class="max-w-4xl mx-auto">
                <div class="bg-gray-800 rounded-xl overflow-hidden shadow-xl" data-aos="fade-up">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="bg-gray-700 text-left">
                                    <th class="py-4 px-6">Position</th>
                                    <th class="py-4 px-6">Driver</th>
                                    <th class="py-4 px-6">Nationality</th>
                                    <th class="py-4 px-6">Points</th>
                                    <th class="py-4 px-6">Wins</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($drivers as $driver): ?>
                                    <tr class="border-b border-gray-700 hover:bg-gray-750">
                                        <td class="py-4 px-6 font-bold">1</td>
                                        <td class="py-4 px-6 flex items-center">
                                            <img src="http://static.photos/people/200x200/10" alt="Verstappen"
                                                class="w-10 h-10 rounded-full mr-3">
                                            <span>
                                                <a href="driver_detail.php?id=<?php echo $driver['driverId'] ?>"><?php echo $driver['surname'] ?></a>
                                                
                                            </span>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center">
                                                <?php echo $driver['nationality'] ?>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 font-bold">136</td>
                                        <td class="py-4 px-6">5</td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-black py-12">
        <div class="container mx-auto px-6">
            <div class="flex items-center space-x-2 mb-4">
                <i data-feather="flag" class="text-red-600"></i>
                <span
                    class="text-xl font-bold bg-gradient-to-r from-red-600 to-red-400 bg-clip-text text-transparent">F1
                    PULSE</span>
            </div>
            <p class="text-gray-400">Formula 1 drivers table example. Not affiliated with Formula 1.</p>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500">
                <p>© 2024 F1 Pulse. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script>
        AOS.init({ duration: 800, easing: 'ease-in-out', once: true });
        feather.replace();
    </script>
</body>

</html>
