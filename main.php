<?php
$score = 76;
$reaction = 80;
$memory = 92;
$verbal = 61;
$visual = 73;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Result Page</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

body {
    background: #cbd3e0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Container */
.container {
    display: flex;
    width: 750px;
    background: #f2f3f7;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

/* Left Side */
.left {
    width: 50%;
    padding: 40px;
    background: linear-gradient(180deg, #7857ff, #2e2be9);
    color: white;
    text-align: center;
    border-radius: 20px;
}

.left h3 {
    opacity: 0.8;
    margin-bottom: 30px;
}

.circle {
    width: 150px;
    height: 150px;
    margin: 0 auto 25px;
    border-radius: 50%;
    background: radial-gradient(circle, #4e21ca, #2421ca);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.circle h1 {
    font-size: 50px;
}

.circle span {
    font-size: 14px;
    opacity: 0.7;
}

.left h2 {
    margin-bottom: 10px;
}

.left p {
    font-size: 14px;
    opacity: 0.8;
    line-height: 1.5;
}

/* Right Side */
.right {
    width: 50%;
    padding: 40px;
}

.right h3 {
    margin-bottom: 25px;
}

.item {
    display: flex;
    justify-content: space-between;
    padding: 12px 15px;
    border-radius: 10px;
    margin-bottom: 15px;
    font-weight: 600;
}

.reaction { background: #ffecec; color: #d9534f; }
.memory { background: #fff7e6; color: #f0ad4e; }
.verbal { background: #e7f8f3; color: #20c997; }
.visual { background: #eef1ff; color: #6f42c1; }

.button {
    margin-top: 20px;
    background: #303b5a;
    color: white;
    padding: 15px;
    text-align: center;
    border-radius: 25px;
    cursor: pointer;
    transition: 0.3s;
}

.button:hover {
    background: #111c36;
}
</style>

</head>
<body>

<div class="container">

    <!-- Left -->
    <div class="left">
        <h3>Your Result</h3>

        <div class="circle">
            <h1><?= $score ?></h1>
            <span>of 100</span>
        </div>

        <h2>Great</h2>
        <p>You scored higher than 65% of the people who have taken these tests.</p>
    </div>

    <!-- Right -->
    <div class="right">
        <h3>Summary</h3>

        <div class="item reaction">
            <span>Reaction</span>
            <span><?= $reaction ?> / 100</span>
        </div>

        <div class="item memory">
            <span>Memory</span>
            <span><?= $memory ?> / 100</span>
        </div>

        <div class="item verbal">
            <span>Verbal</span>
            <span><?= $verbal ?> / 100</span>
        </div>

        <div class="item visual">
            <span>Visual</span>
            <span><?= $visual ?> / 100</span>
        </div>

        <div class="button">
            Continue
        </div>

    </div>

</div>

</body>
</html>
