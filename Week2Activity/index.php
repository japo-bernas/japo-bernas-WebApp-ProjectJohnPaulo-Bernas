<?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<h2>Order Summary</h2>";

        $jersey_prices = [
            "lebron" => 800,
            "curry" => 700,
            "durant" => 600,
        ];

        $size_prices = [
            "small" => 100,
            "medium" => 200,
            "large" => 300
        ];

        $type_prices = [
            "cotton" => 500,
            "headband" => 200
        ];

        $jersey_type = $_POST["jersey"];
        $size = $_POST["size"];

        if(isset($_POST["type"])) {
            $type = $_POST["type"];
        } else {
            $type = [];
        };

        $total_price = $jersey_prices[$jersey_type] + $size_prices[$size];

        foreach($type as $types) {
            $total_price = $total_price + $type_prices[$types];
        }

        echo $total_price;
        echo "<br/>";

        if ($jersey_type !== "lebron") {
            echo "Hey, ". htmlspecialchars($_POST["name"]) . "!";
            echo "<p>Here's a joke for you: Why did Lebron trade Westbrook? He got triple budol!</p>";
        }

        if ($total_price > 1000 && $total_price < 1500){
            echo "<p>Password for the CR: lebron232</p>";
        } elseif ($total_price >= 2000) {
            echo "<p>Password for Wi-Fi: curry303</p>";
        }
   }
?>