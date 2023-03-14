<?php
$conn = mysqli_connect("localhost", "root", "", "classicmodels");
$customers_data = "SELECT * FROM customers;";
$customers_result = $conn->query($customers_data);
$products_data = "SELECT * FROM products;";
$products_result = $conn->query($products_data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESSING DATA TO DATABASE</title>
</head>

<body>
    <table border= "1">
        <tr align="center">
            <td>
                ProductCode
                </td>
            <td>
                ProductName
                </td>
            <td>
                ProductLine
                </td>
            <td>
                ProductScale
                </td>
            <td>
                ProductVendor
                </td>
            <td>
                ProductDescription
                </td>
            <td>
                ProductInStock
                </td>
            <td>
                BuyPrice
                </td>
            <td>
                MSRP
                </td>
        </tr>
        <?php

        if ($customers_result->num_rows > 0) {
            while ($row = $products_result->fetch_assoc()) {
                echo "<tr>
            <td>"
                    . $row["productCode"] .
                    "</td>
            <td>"
                    . $row["productName"] .
                    "</td>
            <td>"
                    . $row["productLine"] .
                    "</td>
            <td>"
                    . $row["productScale"] .
                    "</td>
            <td>"
                    . $row["productVendor"] .
                    "</td>
            <td>"
                    . $row["productDescription"] .
                    "</td>
            <td>"
                    . $row["quantityInStock"] .
                    "</td>
            <td>"
                    . $row["buyPrice"] .
                    "</td>
            <td>"
                    . $row["MSRP"] .
                    "</td>
        </tr>";
            }
        } else {
            echo "No Results";
        }
        ?>
    </table>
    <hr>
    <hr>
    <table border="1">
        <tr align="center">
            <td>
                CustomerCode
                </td>
            <td>
                CustomerName
                </td>
            <td>
                CustomerLastName
                </td>
            <td>
                CustomerFirstName
                </td>
            <td>
                Phone
                </td>
            <td>
                AddressLine1
                </td>
            <td>
                AddressLine2
                </td>
            <td>
                City
                </td>
            <td>
                State
                </td>
            <td>
                PostalCode
                </td>
            <td>
                Country
                </td>
            <td>
                SalesRepEmployeeNumber
                </td>
            <td>
                CreditLimit
                </td>
        </tr>
        <?php

        if ($customers_result->num_rows > 0) {
            while ($row = $customers_result->fetch_assoc()) {
                echo "        <tr>
                <td>"
                    . $row["customerNumber"] .
                    "</td>
                <td>"
                    . $row["customerName"] .
                    "</td>
                <td>"
                    . $row["contactLastName"] .
                    "</td>
                <td>"
                    . $row["contactFirstName"] .
                    "</td>
                <td>"
                    . $row["phone"] .
                    " </td>
                <td>"
                    . $row["addressLine1"] .
                    "</td>
                <td>"
                    . $row["addressLine2"] .
                    "</td>
                <td>"
                    . $row["city"] .
                    "</td>
                <td>"
                    . $row["state"] .
                    "</td>
                <td>"
                    . $row["postalCode"] .
                    "</td>
                <td>"
                    . $row["country"] .
                    "</td>
                <td>"
                    . $row["salesRepEmployeeNumber"] .
                    "</td>
                <td>"
                    . $row["creditLimit"] .
                    "</td>
            </tr>";
            }
        } else {
            echo "No Results";
        }
        ?>
    </table>
</body>

</html>