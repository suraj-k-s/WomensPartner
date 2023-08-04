<?php
include("../../Connection/Connection.php");
        $seldoc = "SELECT * FROM tbl_doctor dr inner join tbl_place p on p.place_id=dr.place_id INNER JOIN tbl_district d ON d.district_id=p.district_id INNER JOIN tbl_department dp on dp.department_id=dr.department_id where true";
        
        if($_GET['did']!="0")
        {
            $seldoc=$seldoc." and dr.department_id='".$_GET['did']."'";
        }
        echo $seldoc;
        $resdoc = $conn->query($seldoc);
        while ($rowdoc = $resdoc->fetch_assoc()) {
        ?>
          <div class="col-lg-4 templatemo-item-col all soon">
            <div class="meeting-item">
              <div class="thumb">
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