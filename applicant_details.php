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
    <title>Jobcenter | <?php echo $applicant['name']; ?></title>
    <?php } }?>

  </head>
  <body>
  <?php require 'nav.php'; ?>
        <!-- main content -->
        <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3">
                <div class="card">
                    <div class="card-header">Clients</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="client.php">Add New Client</a></li>
                        <li class="list-group-item"><a href="clients.php">View all Clients</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-9">
                <div class="card">
                    
                    <?php 
                        
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM applicants WHERE id='$id'";
                        $result = mysqli_query($connect, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($applicant = mysqli_fetch_assoc($result)) { ?>
                            <div class="card-header text-center"><?php echo $applicant['f_name'].' '. $applicant['l_name']; ?></div>
                        <img class="details" src="applicants/<?php echo $applicant['image']; ?>" alt="<?php echo $applicant['f_name']; ?>">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>First Name: </strong> <?php echo $applicant['f_name']; ?>
                            <span class="mr-3"></span><strong>Last Name: </strong><?php echo $applicant['l_name']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Date of Birth: </strong> <?php echo $applicant['dob']; ?>
                            <span class="mr-3"></span><strong>Age: </strong><?php echo $applicant['age']; ?></p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Email: </strong> <?php echo $applicant['email']; ?>
                            <span class="mr-3"></span><strong>Contact: </strong><?php echo $applicant['phone']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Country: </strong> <?php echo $applicant['country']; ?>
                            <span class="mr-3"></span><strong>Language: </strong><?php echo $applicant['dialect']; ?></p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Email: </strong> <?php echo $applicant['id_typeRadios']; ?>
                            <span class="mr-3"></span><strong>ID Number: </strong><?php echo $applicant['id_image']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Gender: </strong> <?php echo $applicant['genderRadios']; ?>
                            <span class="mr-3"></span><strong>Marital Status: </strong><?php echo $applicant['mar_statRadios']; ?></p>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Spouse: </strong> <?php echo $applicant['spouse']; ?>
                            <span class="mr-3"></span><strong>Religion: </strong><?php echo $applicant['religion']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Residence: </strong> <?php echo $applicant['residence']; ?>
                            <span class="mr-3"></span><strong>Address: </strong><?php echo $applicant['box_addr']; ?></p>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>LandMark: </strong> <?php echo $applicant['landmark']; ?>
                            <span class="mr-3"></span><strong>Street Name: </strong><?php echo $applicant['street_nm']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Suburb: </strong> <?php echo $applicant['suburb']; ?>
                            <span class="mr-2"></span><strong>House No: </strong><?php echo $applicant['hse_no']; ?>
                            <span class="mr-2"></span><strong>City/Town: </strong><?php echo $applicant['city_town']; ?></p>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Area of Interest 1: </strong> <?php echo $applicant['area_of_int_1']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Area of Interest 2: </strong> <?php echo $applicant['area_of_int_2']; ?></p>
                            </div>    
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Name of JHS: </strong> <?php echo $applicant['jhs_nm']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Awards Recieved: </strong> <?php echo $applicant['jhs_awd']; ?></p>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Start Year: </strong> <?php echo $applicant['jhs_start']; ?></p>
                            </div>
                            <div class="col-12 col-sm-6">
                            <p class="text-center"><strong>Year of Completion: </strong> <?php echo $applicant['jhs_end']; ?></p>
                            </div>    
                        </div>







                        <p class="text-center"><strong>Name: </strong> <?php echo $applicant['name']; ?>
                        <span class="mr-5"></span><strong>Email: </strong><?php echo $applicant['email']; ?></p>
                        <p class="text-center"><strong>Age: </strong><?php echo $applicant['age']; ?>
                        <span class="mr-5 pr-3"></span><strong>Contact: </strong><?php echo $applicant['phone']; ?></p>
                        <p class="text-center"><strong>Skill Level: </strong><?php echo $applicant['levelRadios']; ?>
                        <span class="mr-5"></span><strong>Industry: </strong><?php echo $applicant['industry']; ?></p>
                        <p class="text-center"><strong>Region: </strong><?php echo $applicant['region']; ?>
                        <span class="mr-5"></span><strong>District: </strong><?php echo $applicant['district']; ?></p>
                        <p class="text-center"><strong>Status: </strong><?php echo $applicant['statusRadios']; ?>
                        <span class="mr-5"></span><strong>Company: </strong><?php echo $applicant['company']; ?></p>
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
                    <a href="applicant_edit.php?id=<?php echo $applicant['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="applicant_delete.php?id=<?php echo $applicant['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                    </div>
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
    <script src="../js/bootstrap.bundle.min.js"></script>
  </body>
</html>