<?php
$name = trim($_POST['name'] ?? '');
$section = trim($_POST['section'] ?? '');
$cardnumber = trim($_POST['cardnumber'] ?? '');
$cardtype = trim($_POST['cardtype'] ?? '');

$line = $name . ';' . $section . ';' . $cardnumber . ';' . $cardtype . PHP_EOL;

file_put_contents('suckers.html', $line, FILE_APPEND);

$all = file_get_contents('suckers.html');
?>

<h1>Thanks for submitting!</h1>

<h2>Your Information</h2>
<p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
<p><strong>Section:</strong> <?= htmlspecialchars($section) ?></p>
<p><strong>Card Number:</strong> <?= htmlspecialchars($cardnumber) ?></p>
<p><strong>Card Type:</strong> <?= htmlspecialchars($cardtype) ?></p>

<h2>The current database contains:</h2>
<pre><?= htmlspecialchars($all) ?></pre>