<?php
include('../../Connection/Connection.php');
?>
<div class="row" id="filter-result">
        <?php
        $selArticle = "SELECT * from tbl_information i INNER JOIN tbl_subcategory s on s.subcategory_id=i.subcategory_id inner join tbl_category c on c.category_id=s.category_id where TRUE" ;
        if($_GET['fid']!='0')
        {
            $selArticle=$selArticle. " and i.subcategory_id='".$_GET['fid']."'";
        }
        echo $selArticle;
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