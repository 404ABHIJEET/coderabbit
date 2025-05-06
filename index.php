<?php
function getRandomElement(array $array): string {
    return $array[array_rand($array)];
}

// Define some random data arrays
$quotes = [
    "Keep it simple.",
    "Stay hungry, stay foolish.",
    "Code is like humor. When you have to explain it, it’s bad.",
    "Simplicity is the soul of efficiency.",
    "Make it work, make it right, make it fast."
];

$emojis = ["😎", "🎯", "💡", "🔥", "🚀", "✨", "🐱‍👤"];

$colors = [
    "Red" => "#e74c3c",
    "Blue" => "#3498db",
    "Green" => "#2ecc71",
    "Orange" => "#e67e22",
    "Purple" => "#9b59b6"
];

$facts = [
    "Octopuses have three hearts.",
    "Bananas are technically berries.",
    "A group of flamingos is called a flamboyance.",
    "The moon has moonquakes.",
    "Sloths can hold their breath longer than dolphins."
];

// Select random data
$quote = getRandomElement($quotes);
$emoji = getRandomElement($emojis);
$fact = getRandomElement($facts);
$colorName = array_rand($colors);
$colorHex = $colors[$colorName];
$randomNumber = rand(1, 999);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Fun Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?= $colorHex ?>;
            color: #fff;
            text-align: center;
            padding: 50px;
            margin: 0;
        }
        .box {
            background: rgba(0,0,0,0.2);
            border-radius: 10px;
            padding: 30px;
            display: inline-block;
        }
        h1 {
            font-size: 2.2em;
            margin-bottom: 20px;
        }
        .emoji {
            font-size: 3em;
        }
        .section {
            margin: 15px 0;
            font-size: 1.2em;
        }
        .footer {
            font-size: 0.9em;
            margin-top: 30px;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1><span class="emoji"><?= $emoji ?></span> Welcome to Randomizer</h1>
        <div class="section"><strong>Quote:</strong> <?= $quote ?></div>
        <div class="section"><strong>Did You Know?</strong> <?= $fact ?></div>
        <div class="section"><strong>Lucky Number:</strong> <?= $randomNumber ?></div>
        <div class="section"><strong>Color of the Day:</strong> <?= $colorName ?> <span style="color: <?= $colorHex ?>;">■</span></div>
        <div class="footer">Refresh the page for new fun facts and content!</div>
    </div>
    <p>dsadsankjsdasdas</p>
</body>
</html>
