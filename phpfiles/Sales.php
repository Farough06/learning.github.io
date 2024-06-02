<?php

// Set the retail price and discount details
$retailPrice = 99;
$discounts = array(
    10 => 0,
    20 => 0.1,
    50 => 0.2,
    80 => 0.3,
    100 => 0.4
);

// Get the number of packages purchased from the user
$numberOfPackages = readline("Enter the number of packages purchased: ");

// Calculate the total price and discount amount
$totalPrice = $numberOfPackages * $retailPrice;
$discountAmount = 0;

foreach ($discounts as $quantity => $discount) {
    if ($numberOfPackages >= $quantity) {
        $discountAmount = $totalPrice * $discount;
    } else {
        break;
    }
}

// Calculate the discounted price
$discountedPrice = $totalPrice - $discountAmount;

// Display the bill to the user
echo "Retail Price per Package: RM " . $retailPrice . PHP_EOL;
echo "Number of Packages Purchased: " . $numberOfPackages . PHP_EOL;
echo "Discount Amount: RM " . number_format($discountAmount, 2) . PHP_EOL;
echo "Total Amount after Discount: RM " . number_format($discountedPrice, 2) . PHP_EOL;

?>
