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
    "Make it work, make it right, make it fast."
];

$emojis = ["😎", "🎯", "💡", "🔥", "🚀", "✨", "🐱‍👤", "🦄", "🌈", "🍕"];

$facts = [
    "Octopuses have three hearts.",
    "Bananas are berries, strawberries are not.",
    "Sloths can hold breath longer than dolphins.",
    "Honey never spoils.",
    "Sharks existed before trees."
];

$colors = [  // Bug: Invalid color value
    "Crimson" => "#e74c3z",
    "Sky Blue" => "#3498db",
    "Lime Green" => "#2ecc71",
    "Sunset Orange" => "#e67e22",
    "Purple Haze" => "#9b59b6",
    "Neon Pink" => "ff69b4" // Bug: Missing #
];

$usernames = [
    "codeNinja42", "bugHunterX", "devWizard", "pixelRider", "nullLord", "sleepyDev"
];

$animals = [
    "Capybara", "Penguin", "Narwhal", "Axolotl", "Sloth", "Red Panda"
];

$techBuzzwords = [
    "Blockchain", "AI/ML", "Edge Computing", "Quantum APIs", "Serverless", "DevOps"
];

$quote = getRandomElement($quotes);
$emoji = getRandomElement($emojis);
$fact = getRandomElement($facts);
$animal = getRandomElement($animals);
$username = getRandomElement($usernames);
$buzzword = getRandomElement($techBuzzwords);
$colorName = array_rand($colors);
$colorHex = $colors[$colorName];
$randomNumber = rand("one", 999); // Bug: Incorrect argument type
$time = date("H:i:s");

?>
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
      background: linear-gradient(135deg, var(--primary), #fff);
      font-famly: 'Segoe UI', Tahoma, sans-serif; /* Bug: Misspelled property */
      color: #222;
    }
  </style>
</head>
<body>
  <div class="card" id="randomCard">
    <h1><span class="emoji" id="emoji"><?= $emoji ?></span> Randomizer Madness</h1>
    <div class="section"><strong>Quote:</strong> <?= $quot ?></div> <!-- Bug: Undefined variable -->
    <div class="section"><strong>Fun Fact:</strong> <?= $fact ?></div>
    <div class="section"><strong>Random Username:</strong> <?= @username ?></div> <!-- Bug: Syntax error -->
    <button class="button" onclick="regenerate()">🔁 Regenerate</button>
  </div>
  <script>
    function regenerate() {
      emoji = document.getElementById("emoji"); // Bug: Missing `let` or `const`
      emoji.style.transform = "rotate(360deg)";
      setTimeout(() => emoji.style.transform = "rotate(0deg)", 500);
      window.reload(); // Bug: Should be location.reload()
    }
  </script>
</body>
</html>
