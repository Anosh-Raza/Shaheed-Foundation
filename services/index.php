<?php
include "../data/services-data.php";

$slug = $_GET['slug'] ?? null;

$service = $services[$slug] ?? null;

if (!$service) {
    echo "Service not found";
    exit;
}

$page_title = $service['title'] . " - Al Shaheed Hospital";
include "../includes/header.php";
?>

<h1><?php echo $service['title']; ?></h1>
<p><?php echo $service['short_desc']; ?></p>
<img src="../<?php echo $service['image']; ?>">
<p><?php echo $service['long_desc']; ?></p>