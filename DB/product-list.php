<?php
include 'init.php';

$type = $_REQUEST["type"];

$data = array(
  "results" => array(),
);

switch ($type) {
  case 'all':

    $sql = "SELECT 
          product.ID,
          product.name as product,
          category.name as category,
          product.description,
          product.set_ID,
          product.price,
          product.img_name
     FROM product
      INNER JOIN
            category ON product.category_ID = category.ID;";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
      $data["total"] = $result->num_rows;
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        $setID = $row["set_ID"];
        $sql = "SELECT * FROM variants WHERE variants.set_ID = $setID;";
        $variants = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);

        $row["variants"] = $variants;
        array_push($data["results"], $row);
      }
      echo json_encode($data);
    } else {
      echo "null";
    }
    break;
  default:

    $sql = "SELECT 
          product.ID,
          product.name as product,
          category.name as category,
          product.description,
          product.set_ID,
          product.price,
          product.img_name
     FROM product
      INNER JOIN
            category ON product.category_ID = category.ID
      WHERE category.name = '$type'";

    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
      $data["total"] = $result->num_rows;
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        $setID = $row["set_ID"];
        $sql = "SELECT * FROM variants WHERE variants.set_ID = $setID;";
        $variants = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);

        $row["variants"] = $variants;
        array_push($data["results"], $row);
      }
      echo json_encode($data);
    } else {
      echo "null";
    }
    break;
}

$conn->close();