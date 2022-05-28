<?php
include_once 'tamplateHome\header.php';
include_once 'tamplateHome\body.php';
?>

<style>
  .container {
    width: 900px;
  }

  .card {

    background-color: #fff;
    border: none;
    border-radius: 10px;
    width: 190px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

  }

  .image-container {

    position: relative;
  }

  .thumbnail-image {
    border-radius: 10px !important;
  }


  .discount {

    background-color: red;
    padding-top: 1px;
    padding-bottom: 1px;
    padding-left: 4px;
    padding-right: 4px;
    font-size: 10px;
    border-radius: 6px;
    color: #fff;
  }

  .wishlist {

    height: 25px;
    width: 25px;
    background-color: #eee;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }

  .first {

    position: absolute;
    width: 100%;
    padding: 9px;
  }


  .dress-name {
    font-size: 13px;
    font-weight: bold;
    width: 75%;
  }


  .new-price {
    font-size: 13px;
    font-weight: bold;
    color: red;

  }

  .old-price {
    font-size: 8px;
    font-weight: bold;
    color: grey;
  }



  .creme {
    background-color: #fff;
    border: 2px solid grey;

  }

  .creme:hover {
    border: 3px solid grey;
  }

  .creme:focus {
    background-color: grey;

  }


  .red {
    background-color: #fff;
    border: 2px solid red;

  }


  .red:hover {
    border: 3px solid red;
  }

  .red:focus {
    background-color: red;
  }



  .blue {
    background-color: #fff;
    border: 2px solid #40C4FF;
  }

  .blue:hover {
    border: 3px solid #40C4FF;
  }

  .blue:focus {
    background-color: #40C4FF;
  }

  .darkblue {
    background-color: #fff;
    border: 2px solid #01579B;
  }

  .darkblue:hover {
    border: 3px solid #01579B;
  }

  .darkblue:focus {
    background-color: #01579B;
  }

  .yellow {
    background-color: #fff;
    border: 2px solid #FFCA28;
  }

  .yellow:hover {
    border-radius: 3px solid #FFCA28;
  }

  .yellow:focus {
    background-color: #FFCA28;
  }


  .item-size {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #fff;
    border: 1px solid grey;
    color: grey;
    font-size: 10px;
    text-align: center;
    align-items: center;
    display: flex;
    justify-content: center;
  }


  .rating-star {
    font-size: 10px !important;
  }

  .rating-number {
    font-size: 10px;
    color: grey;

  }

  .buy {
    font-size: 12px;
    color: purple;
    font-weight: 500;
  }


  .voutchers {
    background-color: #fff;
    border: none;
    border-radius: 10px;
    width: 190px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    overflow: hidden;

  }

  .voutcher-divider {

    display: flex;

  }

  .voutcher-left {
    width: 60%
  }

  .voutcher-name {
    color: grey;
    font-size: 9px;
    font-weight: 500;
  }

  .voutcher-code {
    color: red;
    font-size: 11px;
    font-weight: bold;
  }

  .voutcher-right {
    width: 40%;
    background-color: purple;
    color: #fff;
  }

  .discount-percent {
    font-size: 12px;
    font-weight: bold;
    position: relative;
    top: 5px;
  }

  .off {
    font-size: 14px;
    position: relative;
    bottom: 5px;
  }

  .espaco {
    margin-bottom: 25px;
    margin-left: 25px;
  }
</style>


<?php
include_once "model/db.php";

$selectUsuarios = "SELECT * FROM produtos order by id asc";
$result = $db->query($selectUsuarios);

while ($row = $result->fetchArray()) {
  // echo "<td>{$row['descricao']}</td>";
?>
  <div class="col d-inline-flex">
    <div class="card espaco ">
      <div class="image-container">
        <div class="first">
          <div class="d-flex justify-content-between align-items-center">
            <span class="wishlist"><i class="fa fa-heart-o"></i></span>
          </div>
        </div>
        <img src="data:image/png;base64,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" class="img-fluid rounded thumbnail-image">
      </div>
      <div class="product-detail-container p-2">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="dress-name"><?php echo "{$row['nomeProduto']}"; ?></h5>
          <div class="d-flex flex-column mb-2">
            <span class="new-price"><?php echo "{$row['preco']}"; ?></span>
            <small class="old-price text-right"><?php echo "{$row['preco']}"; ?></small>
          </div>
          
        </div>
        <div>
          <?php echo "{$row['descricao']}"; ?>
        </div>
        <div class="d-flex justify-content-between align-items-center pt-1">
          <div class="color-select d-flex ">
            <input type="button" name="grey" class="btn creme">
            <input type="button" name="red" class="btn red ml-2">
            <input type="button" name="blue" class="btn blue ml-2">
          </div>
          <div class="d-flex ">
            <span class="item-size mr-2 btn" type="button">S</span>
            <span class="item-size mr-2 btn" type="button">M</span>
            <span class="item-size btn" type="button">L</span>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center pt-1">
          <div>
            <i class="fa fa-star-o rating-star"></i>
            <span class="rating-number">4.8</span>
          </div>
          <span class="buy">BUY +</span>
        </div>
      </div>
    </div>
  </div>
<?php
}
?>




<?php
include_once 'tamplateHome\body2.php';
include_once 'tamplateHome\footer.php';
?>