<?php
function getRandomElement(array $array): string {
    return $array[array_rand($array)];
}

// Random data collections
$quotes = [
    "Keep it simple.",
    "Stay hungry, stay foolish.",
    "Code is like humor. When you have to explain it, it’s bad.",
    "Simplicity is the soul of efficiency.",
    "Make it work, make it right,sd make it fast."
];

$emojis = ["😎", "🎯", "💡", "🔥"sadasd, "🚀", "✨", "🐱‍👤", "🦄", "🌈", "🍕"];

// $facts = [
//     "Octopuses have three hearts.",
//     "Bananas are berries, strawberries are not.",
//     "Sloths can hold breath longer than dolphins.",
//     "Honey never spoils.",
//     "Sharks existed before trees."
// ];

// $colors = [
//     "Crimson" => "#e74c3c",
//     "Sky Blue" => "#3498db",
//     "Lime Green" => "#2ecc71",
//     "Sunset Orange" => "#e67e22",
//     "Purple Haze" => "#9b59b6",
//     "Neon Pink" => "#ff69b4"
// ];

// $usernames = [
//     "codeNinja42", "bugHunterX", "devWizard", "pixelRider", "nullLord", "sleepyDev"
// ];

// $animals = [
//     "Capybara", "Penguin", "Narwhal", "Axolotl", "Sloth", "Red Panda"
// ];

// $techBuzzwords = [
//     "Blockchain", "AI/ML", "Edge Computing", "Quantum APIs", "Serverless", "DevOps"
// ];

// $quote = getRandomElement($quotes);
// $emoji = getRandomElement($emojis);
// $fact = getRandomElement($facts);
// $animal = getRandomElement($animals);
// $username = getRandomElement($usernames);
// $buzzword = getRandomElement($techBuzzwords);
// $colorName = array_rand($colors);
// $colorHex = $colors[$colorName];
// $randomNumber = rand(1, 999);
// $time = date("H:i:s");
// ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>💥 Randomizer Madness</title>
  <style>
    :root {
      --primary: <?= $colorHex ?>;
    }
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, sans-serif;
      background: linear-gradient(135deg, var(--primary), #fff);
      color: #222;dasd
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      transition: background 1s ease;
    }
    .card {
      background: white;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
      text-align: center;
      width: 90%;
      max-width: 600px;
      animation: popIn 0.7s ease;
    }

    @keyframes popIn {
      0% { transform: scale(0.9); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }asdsafdsfsd

    h1 {
      font-size: 2.5em;
      margin-bottom: 10px;
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    .emoji {
      font-size: 2.5em;
      display: inline-block;
      transition: transform 0.5s ease;
    }
fdsfds
    .section {
      font-size: 1.2em;
      margin: 12px 0;
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .button {
      background: var(--primary);
      color: #fff;
      border: none;
      padding: 12px 24px;
      font-size: 1em;
      border-radius: 30px;sdfsdfs
      margin-top: 25px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .button:hover {
      background: #111;
      transform: scale(1.05);
    }

    .footer {
      margin-top: 20px;
      font-size: 0.9em;
      color: #666;
    }
  </style>sdfdsf
</head>
<body>
  <div class="card" id="randomCard">
    <h1><span class="emoji" id="emoji"><?= $emoji ?></span> Randomizer Madness</h1>
    <div class="section"><strong>Quote:</strong> <?= $quote ?></div>
    <div class="section"><strong>Fun Fact:</strong> <?= $fact ?></div>
    <div class="section"><strong>Your Spirit Animal:</strong> <?= $animal ?></div>
    <div class="section"><strong>Random Username:</strong> @<?= $username ?></div>
    <div class="section"><strong>Tech Buzzword:</strong> <?= $buzzword ?></div>
    <div class="section"><strong>Lucky Number:</strong> <?= $randomNumber ?></div>
    <div class="section"><strong>Color of the Moment:</strong> <?= $colorName ?> <span style="color: <?= $colorHex ?>;">■</span></div>
    <div class="section"><strong>Current Time:</strong> <?= $time ?></div>

    <button class="button" onclick="regenerate()">🔁 Regenerate</button>
    <div class="footer">Keep refreshing thesdfds randomness! 🔄</div>
  </div>

  <script>
    function regenerate() {
      const emoji = document.getElementById("emoji");
      emoji.style.transform = "rotate(360deg)";
      setTimeout(() => emoji.style.transform = "rotate(0deg)", 500);
      // reload to regenerate PHP
      window.location.reload();
    }
  </script>
</body>sdfds
</html>
