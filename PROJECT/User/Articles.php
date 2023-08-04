<?php
include('head.php');
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Untitled Document</title>
</head>

<body>
  <div class="container">
    <div class="filter">
    <select class="form-select form-select-lg" onchange="fetchSubcat(this.value)" id="category-select">
    <option value="" disabled selected>Category</option>
      <?php
      $selCat="select * from tbl_category";
      $resCat=$conn->query($selCat);
      while($rowCat=$resCat->fetch_assoc())
      {
      ?>
      <option value="<?php echo $rowCat['category_id']?>"><?php echo $rowCat['category_name']?></option>
      <?php
      }
      ?>
    </select>
    <select class="form-select form-select-lg" onchange="filterResult(this.value)" id="subcat">
    <option value="" disabled selected>Sub-Category</option>
    </select>
    <button class="btn btn-danger filter-reset" onclick="filterResult(0)">Reset</button>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="filters">
          
        </div>
      </div>
      <div class="row" id="filter-result">
        <?php
        $selArticle = "select * from tbl_information i INNER JOIN tbl_subcategory s on s.subcategory_id=i.subcategory_id inner join tbl_category c on c.category_id=s.category_id";
        $resArticle = $conn->query($selArticle);
        while ($rowArticle = $resArticle->fetch_assoc()) {
        ?>
          <div class="col-lg-4 templatemo-item-col all soon">
          <a href="ArticleDetails.php?aid=<?php echo $rowArticle['information_id']?>">
            <div class="meeting-item">
              <div class="thumb">
                <img src="../Assets/Images/<?php echo $rowArticle['information_photo']; ?>" alt="">
              </div>
              <div class="down-content">
                <h4><?php echo $rowArticle['information_title']; ?> </h4>
                <h6> <?php echo $rowArticle['subcategory_name']; ?> </h6>
              </div>
            </div>
        </a>
          </div>
        <?php
        }
        ?>
        </div>
        </div>
      </div>

    </div>
  </div>
  <script src="../Assets/JQ/jQuery.js"></script>
  <script>
  $(document).ready(function() {
  $('.filter select').hover(function() {
    $(this).click();
  });
});
</script>
</body>
<?php
include('footer.php');
?>
<script>
  function fetchSubcat(cid)
  {
  $.ajax({
          url: "../Assets/AJAX/AjaxSubcategory/AjaxSubcategory.php?id=" + cid,
          success: function(response) {
              $("#subcat").html(response);
          }
      });
      }

  function filterResult(rid)
  {
  $.ajax({
          url: "../Assets/AJAX/AjaxFilter/AjaxFilter.php?fid=" + rid,
          success: function(response) {
              $("#filter-result").html(response);
          }
      });
      }
</script>
</html>