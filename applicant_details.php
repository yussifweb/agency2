<?php 

require 'connect.php';
session_start();


if( !$_SESSION['email'] ){
    header( 'Location: index.php' );
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

     <!-- Custom CSS -->
     <link rel="stylesheet" href="./css/style.css">

    <?php 
                        
        $id = $_GET['id'];
         $sql = "SELECT * FROM applicants WHERE id='$id'";
        $result = mysqli_query($connect, $sql);

         if (mysqli_num_rows($result) > 0) {
          while($applicant = mysqli_fetch_assoc($result)) { ?>
    <title>Jobcenter | <?php echo $applicant['f_name']; ?></title>
    <?php } }?>

  </head>
  <body>
  <?php require 'nav.php'; ?>

        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <p><strong>Are you sure you want to delete this applicant?</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <?php 
                        
                        $id = $_GET['id'];
                         $sql = "SELECT * FROM applicants WHERE id='$id'";
                        $result = mysqli_query($connect, $sql);
                
                         if (mysqli_num_rows($result) > 0) {
                          while($applicant = mysqli_fetch_assoc($result)) { ?>
                    <a href="applicant_delete.php?id=<?php echo $applicant['id']; ?>" class="btn btn-danger">Delete</a>
                    <?php } }?>
            </div>
            </div>
        </div>
        </div>

        <!-- main content -->
        <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1">
                <div class="card">                    
                    <?php 
                        
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM applicants WHERE id='$id'";
                        $result = mysqli_query($connect, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($applicant = mysqli_fetch_assoc($result)) { ?>
                            <div class="card-header text-center"><?php echo $applicant['f_name'].' '. $applicant['l_name']; ?></div>
                        <img class="details" src="applicants/<?php echo $applicant['image']; ?>" alt="<?php echo $applicant['f_name']; ?>">

                    <div class="card-body ml-3">
                        <div class="h4 mt-4">PERSONAL INFORMATION</div>
                        <hr/>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>First Name: </strong> <?php echo $applicant['f_name']; ?>
                            <span class="mr-3"></span><strong>Last Name: </strong><?php echo $applicant['l_name']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Date of Birth: </strong> <?php echo $applicant['dob']; ?>
                            <span class="mr-3"></span><strong>Age: </strong><?php echo $applicant['age']; ?></p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Email: </strong> <?php echo $applicant['email']; ?>
                            <span class="mr-3"></span><strong>Contact: </strong><?php echo $applicant['phone']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Country: </strong> <?php echo $applicant['country']; ?>
                            <span class="mr-3"></span><strong>Language: </strong><?php echo $applicant['dialect']; ?></p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Email: </strong> <?php echo $applicant['id_typeRadios']; ?>
                            <span class="mr-3"></span><strong>ID Number: </strong><?php echo $applicant['id_image']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Gender: </strong> <?php echo $applicant['genderRadios']; ?>
                            <span class="mr-3"></span><strong>Marital Status: </strong><?php echo $applicant['mar_statRadios']; ?></p>
                            </div>    
                        </div>
                        
                        <div class="h4 mt-4">LOCATION DETAILS</div>
                        <hr/>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Spouse: </strong> <?php echo $applicant['spouse']; ?>
                            <span class="mr-3"></span><strong>Religion: </strong><?php echo $applicant['religion']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Residence: </strong> <?php echo $applicant['residence']; ?>
                            <span class="mr-3"></span><strong>Address: </strong><?php echo $applicant['box_addr']; ?></p>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>LandMark: </strong> <?php echo $applicant['landmark']; ?>
                            <span class="mr-3"></span><strong>Street Name: </strong><?php echo $applicant['street_nm']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Suburb: </strong> <?php echo $applicant['suburb']; ?>
                            <span class="mr-2"></span><strong>House No: </strong><?php echo $applicant['hse_no']; ?></p>
                            </div>    
                        </div>

                        <div class="row">
                        <div class="col-12 col-sm-12">
                        <p><strong>City/Town: </strong><?php echo $applicant['city_town']; ?></p>
                        
                        </div>
                        </div>
                        
                        <div class="h4 mt-4">AREA OF INTEREST</div>
                        <hr/>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Area of Interest 1: </strong> <?php echo $applicant['area_of_int_1']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Area of Interest 2: </strong> <?php echo $applicant['area_of_int_2']; ?></p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Area of Interest 3: </strong> <?php echo $applicant['area_of_int_3']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Area of Interest 4: </strong> <?php echo $applicant['area_of_int_4']; ?></p>
                            </div>    
                        </div>

                        <div class="h3 mt-4">EDUCATIONAL BACKGROUND</div>
                        <hr/>
                        <div class="h5 mb-2">A. JUNIOR HIGH SCHOOL</div>
                        <hr/>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Name of JHS: </strong> <?php echo $applicant['jhs_nm']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Awards Recieved: </strong> <?php echo $applicant['jhs_awd']; ?></p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Start Year: </strong> <?php echo $applicant['jhs_start']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Year of Completion: </strong> <?php echo $applicant['jhs_end']; ?></p>
                            </div>    
                        </div>
                        
                        <div class="h5 mb-2">B.	SECONDARY  EDUCATION</div>
                        <hr/>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Name of SHS: </strong> <?php echo $applicant['shs_nm']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Course Offered: </strong> <?php echo $applicant['shs_course']; ?></p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Start Year: </strong> <?php echo $applicant['shs_start']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Year of Completion: </strong> <?php echo $applicant['shs_end']; ?></p>
                            </div>    
                        </div>
                        
                        <div class="h5 mb-2">C.	TERTIARY EDUCATION</div>
                        <hr/>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Name of Tetiary Institution: </strong> <?php echo $applicant['tet_nm']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Course Offered: </strong> <?php echo $applicant['tet_course']; ?></p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Start Year: </strong> <?php echo $applicant['tet_start']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Year of Completion: </strong> <?php echo $applicant['tet_end']; ?></p>
                            </div>    
                        </div>
                        
                        <div class="h4 mt-2">LAST  WORKING PLACE</div>
                        <hr/>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Previous Workplace: </strong> <?php echo $applicant['prev_wkplc']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Address: </strong> <?php echo $applicant['prev_wkplc_addr']; ?></p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Position Held: </strong> <?php echo $applicant['position']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Start Date: </strong> <?php echo $applicant['prev_wkplc_start']; ?>
                            <span class="mr-3"></span><strong>End Date: </strong> <?php echo $applicant['prev_wkplc_end']; ?></p>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12">
                            <p class=""><strong>Reasons For Leaving: </strong> <?php echo $applicant['reason']; ?></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Name of Refree: </strong> <?php echo $applicant['ref_nm']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Contact: </strong> <?php echo $applicant['ref_cont']; ?></p>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Payment: </strong> <?php echo $applicant['paymentRadios']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Status: </strong> <?php echo $applicant['statusRadios']; ?></p>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Job Title: </strong> <?php echo $applicant['job_title']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class=""><strong>Company: </strong> <?php echo $applicant['company']; ?></p>
                            </div>    
                        </div>

                        <?php 
                        $user_name = $applicant['user_id'];
                        $sql = "SELECT * FROM users WHERE id='$user_name'";
                        $result = mysqli_query($connect, $sql);

                        if (mysqli_num_rows($result) > 0) {
                        while($user = mysqli_fetch_assoc($result)) {
                            $user_name = $user['name'];
                        ?>
                        <p class="text-center"><strong>Created By: </strong><?php echo $user_name; ?></p>
                        
                        <?php
                        } }
                        ?>
                    </div>
                    <div class="card-footer">
                    <a href="applicant_edit.php?id=<?php echo $applicant['id']; ?>" class="btn btn-sm btn-primary">Update</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-danger" data-href="<?php echo $applicant['id']; ?>" data-toggle="modal" data-target="#deleteModal">Delete</button>                    </div>
                        <?php    }
                        } else {
                            echo "0 results";
                        }                        
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- main content -->

    <?php require 'footer.php'; ?>
    
    <!-- Optional JavaScript -->
    <script src="./js/font-awesome.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.3.1.slim.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
  </body>
</html>