<?php
echo "<h1>Output for Exercise 1</h1>"
echo '<h2>Form input values</h2>';
echo '<p>Your Name: ' . htmlspecialchars($_POST['visitor_name'] ?? '') . '</p>';

$options = $_POST['options'] ?? [];
if (!is_array($options)) {
    $options = [$options];
}

echo '<p>Options: ' . htmlspecialchars(implode(', ', $options)) . '</p>';

echo '<h2>All Form Data</h2>';
echo '<pre>';
foreach ($options as $key => $value) {
    print_r($value);
}
echo '</pre>';
?>

<?php
echo "<h1>Output for Exercise 2</h1>"
echo '<h2>Form input values</h2>';
echo '<p>Name: ' . htmlspecialchars($_POST['name'] ?? '') . '</p>';
echo '<p>Section: ' . htmlspecialchars($_POST['section'] ?? '') . '</p>';
echo '<p>Credit Card Number: ' . htmlspecialchars($_POST['cardnumber'] ?? '') . '</p>';
echo '<p>Card Type: ' . htmlspecialchars($_POST['cardtype'] ?? '') . '</p>';

echo '<h2>All Form Data</h2>';
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>