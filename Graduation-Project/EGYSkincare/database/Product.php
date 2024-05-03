<?php

// fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch product data using getData Method
    // public function getData($table = 'product')
    // {
    //     $result = $this->db->con->query("SELECT * FROM {$table}");

    //     $resultArray = array();

    //     // fetch product data one by one
    //     while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    //         $resultArray[] = $item;
    //     }

    //     return $resultArray;
    // }


    public function getData($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        if (!$result) {
            // If the query fails, handle the error
            echo "Error: " . $this->db->con->error; // Display the error message
            return array(); // Return an empty array
        }

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }


    // get product using item id
    public function getProduct($item_id = null, $table = 'product')
    {
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE product_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }

    
    public function getRoutine($item_id = null, $table = 'routine')
    {
        if (isset($item_id)) {
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE product_id={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }
}
