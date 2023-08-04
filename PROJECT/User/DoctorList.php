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
    <div class="row">
      <div class="col-lg-12">
        <div class="filters">
          <ul>
            <li data-filter="*" class="active" onclick="department('0')">All</li>
            <?php
            $selDept = "select * from tbl_department";
            $resdept = $conn->query($selDept);
            while ($rowdept = $resdept->fetch_assoc()) { ?>
              <li data-filter=".soon" onclick="department(<?php echo $rowdept['department_id']?>)"><?php echo $rowdept['department_name'] ?></li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
      <div class="row" id="doctors">
        <?php
        $seldoc = "SELECT * FROM tbl_doctor dr inner join tbl_place p on p.place_id=dr.place_id INNER JOIN tbl_district d ON d.district_id=p.district_id INNER JOIN tbl_department dp on dp.department_id=dr.department_id";
        $resdoc = $conn->query($seldoc);
        while ($rowdoc = $resdoc->fetch_assoc()) {
        ?>
          <div class="col-lg-4 templatemo-item-col all soon">
            <div class="meeting-item" style="width:320px;">
              <div class="thumb" style="height: 190px;width: 320px;">
                <img src="../Assets/Images/<?php echo $rowdoc['doctor_photo']; ?>" alt="">
              </div>
              <div class="down-content">
                <h4>Dr. <?php echo $rowdoc['doctor_name']; ?> </h4>
                <h6> <?php echo $rowdoc['department_name']; ?> </h6>
                <div class="row doc_details">
                  <div class="details col-4">
                    <h6>Contact</i></h6>
                    <h6>Email</h6>
                    <h6>Address</h6>
                  </div>
                  <div class="details col-8">
                    <h6> <?php echo $rowdoc['doctor_contact']; ?> </h6>
                    <h6> <?php echo $rowdoc['doctor_email']; ?> </h6>
                    <h6> <?php echo $rowdoc['doctor_address']; ?> </h6>
                    <h6> <?php echo $rowdoc['district_name']; ?> </h6>
                    <h6> <?php echo $rowdoc['place_name']; ?> </h6>
                  </div>
                  <hr>
                  <div class="doc_action">
                    <a href="DChat.php?id=<?php echo $rowdoc['doctor_id'] ?>" class="btn btn-success btn-sm btn_docaction">Consult <i class="material-icons" style="font-size: 20px;">message</i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>

    </div>
  </div>
</body>
<?php
include('footer.php');
?>
<script>
  function department(did)
  {
    $.ajax({
      url:"../Assets/AJAX/AjaxDepartment/AjaxDepartment.php?did="+did,
      success: function(html){
        $("#doctors").html(html);
      }
    });
  }
</script>

</html>