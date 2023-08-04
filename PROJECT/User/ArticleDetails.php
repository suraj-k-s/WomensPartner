<?php
include('head.php');
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../Assets/Template/CSS/test.css">
  <title>Untitled Document</title>
  <style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48 color: black !important;
    }

    .thumb {
      background-color: #ffffff;
      border-top-right-radius: 20px;
      border-top-left-radius: 20px;
      padding-top: 2rem;
    }

    img {
      max-height: 400px !important;
      width: auto !important;
    }

    #post {
      padding: 3rem 8rem;
    }

    .post_header {
      padding-bottom: 17px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 0 4rem;
    }

    .action {
      padding: 1rem 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 0 4rem;
    }

    .dark {
      color: black !important;
      transition: .3s;
    }

    .dark:hover {
      color: blue !important;
    }
  </style>
</head>

<body>
  <div id="tab" align="center">
    <!-- Loop Start -->
    <?php
    $display="select * from tbl_information i inner join tbl_subcategory s on s.subcategory_id=i.subcategory_id INNER JOIN tbl_category c on c.category_id=s.category_id where information_id=".$_GET['aid'];
    $res=$conn->query($display);
    if($res->num_rows>0)
    {
        $row=$res->fetch_assoc();
        ?>
    <div class="container" id="post">
      <div class="row">
        <div class="col-lg-12">
          <div class="meeting-single-item">
            <div class="thumb">


              <div>
                <div class="path">
                <h5><?php echo $row['category_name']?> > <?php echo $row['subcategory_name']?>
                </div>
                <div class="carousel">
                  <ul class="slides">
                    <?php
                    $selGallery="select * from tbl_gallery where information_id=".$_GET['aid'];
                    $resGallery=$conn->query($selGallery);
                    if($resGallery->num_rows>0)
                    {
                      $count=1;
                      while($rowGallery=$resGallery->fetch_assoc())
                      {
                        ?>
                    <input type="radio" name="radio-buttons" id="img-<?php echo $count?>"
                    <?php
                    if($count==1){
                      ?>
                      checked
                      <?php
                    }
                    ?>
                     
                     />
                    <li class="slide-container">
                      <div class="slide-image">
                        <img
                          src="../Assets/Images/<?php echo $rowGallery['gallery_image']?> "height="100%">
                      </div>
                      <div class="carousel-controls">
                        <label for="img-<?php echo $count-1?>" class="prev-slide">
                          <span class="arrow">&lsaquo;</span>
                        </label>
                        <label for="img-<?php echo $count+1?>" class="next-slide">
                          <span class="arrow">&rsaquo;</span>
                        </label>
                      </div>
                    </li>
                    <?php
                    $count=$count+1;
                      }
                      }
                      else{
                        ?>
                        <img src="../Assets/Images/samsung-lifestyle-08-050819.jpg" />
                        <?php
                      }
                      ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4 class="title">
                <?php echo $row['information_title']?>
              </h4>
              <p align="center" class="description">
                <?php echo $row['information_details']?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Loop End -->
    <?php
  }
  ?>
  </div>
</body>
<?php
include('footer.php');
?>

</html>