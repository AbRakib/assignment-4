<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/img/icon.png">
    <title>Ostad - Function & Objects Project</title>
    <!-- bootstrap css link  -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <!-- custom css link  -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <!-- navbar -->
                <?php include './navbar.php';?>
                <!-- navbar -->
                <div class="card p-3 shadow">
                    <p class="">
                        <span class="fw-bold">Task: </span>
                    </p>
                    <div>
                        <?php
                            class Product {
                                // Properties
                                private $id;
                                private $name;
                                private $price;
                            
                                // Constructor
                                public function __construct($id, $name, $price) {
                                    $this->id = $id;
                                    $this->name = $name;
                                    $this->price = $price;
                                }
                            
                                // Method to format the price
                                public function getFormattedPrice() {
                                    return '$' . number_format($this->price, 2);
                                }
                            
                                // Method to show product details
                                public function showDetails() {
                                    echo "Product Details:\n";
                                    echo "- ID: $this->id\n";
                                    echo "- Name: $this->name\n";
                                    echo "- Price: " . $this->getFormattedPrice() . "\n";
                                }
                            }
                            
                            // Test the Product class
                            $product = new Product(1, 'T-shirt', 19.99);
                            $product->showDetails();
                            
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>