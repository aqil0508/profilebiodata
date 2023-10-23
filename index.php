<?php
include 'db.php';

$sql = "SELECT * FROM profiles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $age = $row['age'];
    $dob = $row['date_of_birth'];
    $ic = $row['id_number'];
    $phone = $row['mobile_number'];
    $email = $row['email_address'];
    $snumber = $row['stud_number'];
    $gender = $row['gender'];
    $religion = $row['religion'];
    $imagePath = $row['profile_photo_path'];
    // Fetch other fields similarly
} else {
    echo "No data found.";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aqil Biodata</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Personal Biodata</h2>
          
        </div>

        <div class="row">
         <!-- <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/Aqil.jpg" class="img-fluid" alt="">
          </div> -->
          <div class="col-lg-4" data-aos="fade-right">
          <img src="<?php echo $imagePath; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
           
            <h3><?php echo $name; ?></h3>
            
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <?php echo $dob; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <?php echo $age; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Gender:</strong> <?php echo $gender; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Religion:</strong> <?php echo $religion; ?></li>
                  
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <?php echo $phone; ?></li>    
                <li><i class="bi bi-chevron-right"></i> <strong>IC Number:</strong> <?php echo $ic; ?></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Student Number:</strong> <?php echo $snumber; ?></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <?php echo $email; ?></li>
                                   
                </ul>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->






  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
$conn->close();
?>