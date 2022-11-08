<?php
class Product {
    public function __construct($pName, $pDesc, $pType, $pCost, $pDiscount, $pQuantity, $pSupplierName, $pSupplierCost, $pSupplierWebsite, $pSupplierEmail, $target_file) {
      $this->name = $pName;
      $this->desc = $pDesc;
      $this->type = $pType;
      $this->cost = $pCost;
      $this->discount = $pDiscount;
      $this->quantity = $pQuantity;
      $this->supplier = $pSupplierName;
      $this->supplierCost = $pSupplierCost;
      $this->supplierWebsite = $pSupplierWebsite;
      $this->supplierEmail = $pSupplierEmail;
 
      $this->pLocation = $target_file;
  }
  
    public function save($connection) {
      $query = "INSERT INTO products(name, description, cost, discountPercentage, quantity, type, pLocation, supplier_name, supplier_cost, supplier_website, supplier_email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  
      $query = $connection->prepare($query);
      $query->bind_param("sssssssssss", $a, $b, $d, $e, $f, $c, $k, $g, $h, $i, $j);
  
        $a = $this->name;
        $b = $this->desc;
        $d = $this->cost;

        $e = $this->discount;
        $f = $this->quantity;
        $c = $this->type;
        $k = $this->pLocation;
        
        $g = $this->supplier;
        $h = $this->supplierCost;
        $i = $this->supplierWebsite;
        $j = $this->supplierEmail;
  
      $query->execute();

      header('Location: http://localhost/madebycan.com/dashboard');
      exit();
    }
}



?>