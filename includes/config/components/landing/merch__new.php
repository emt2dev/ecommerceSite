<div class='merchandise__box'>
    <span class='merchandise__discount'>-20%</span>
    <div class='merchandise__image'>
        <img src='' alt=''>
        <div class='merchandise__icons'>
            <a href='#' class=''>view details</a>
            <a href='#' class='fas fa-heart'></a>
            <a href='#' class='merchandise__cart-btn'>Add to cart</a>
        </div>
    </div>
    <div class='merchandise__content'>
        <h3>product title</h3>
        <div class='merchandise__pricing'>
            $12.99 <span>$15.99</span>
        </div>
    </div>
</div>

<?php
/*
$sCPQuery = "SELECT * from products WHERE showcase_indicator=?";

$sCPBuilder = $connection->prepare($sCPQuery);
$sCPBuilder->bind_param("i", $sCPFinder);

$sCPFinder = 1;

$sCPBuilder->execute();
$data = $sCPBuilder->get_result();
$showcasedProduct = $data->fetch_assoc();
foreach ($showcasedProduct as $sCP) {

  echo "
  <div class='merchandise__box'>
    <span class='merchandise__discount'>-20%</span>
    <div class='merchandise__image'>
      <img src='".$_SESSION['base_products'].$sCP['mainImagePath']"' alt=''>
      <div class='merchandise__icons'>
        <a href='#' class=''>view details</a>
        <a href='#' class='fas fa-heart'></a>
        <a href='#' class='merchandise__cart-btn'>Add to cart</a>
      </div>
    </div>
    <div class='merchandise__content'>
      <h3>".$sCP['name']."</h3>
      <div class='merchandise__pricing'>";
        if ($sCP['discount_rate'] != 0) {
          $newCost =$sCP['cost']*$sCP['discount_rate']+$sCP['cost'];
          echo $newCost." <span>".$sCP['cost']."</span>";
        } else {
          echo $sCP['cost']."<span></span>";
        }
      echo "</div>
    </div>
  </div>
  ";
}
*/
?>