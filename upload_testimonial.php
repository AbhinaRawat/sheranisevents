
// Code to take inputs from Testimonial Form data and Image files and store them into database/server storage

  include 'commentsection/dbh.inc.php';

  if(isset($_POST['submit']))
  {
    // ---------------- reCAPTCHA verification ----------------
    $recaptchaSecret = '6LfgiQksAAAAAKwWbLXv1jdW-UyCdzo8OMbMBu1o'; // replace with your secret key
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse
    ];
    $options = [
        'http' => [
            'method'  => 'POST',
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'content' => http_build_query($data)
        ]
    ];
    $context  = stream_context_create($options);
    $verify = file_get_contents($verifyUrl, false, $context);
    $captchaSuccess = json_decode($verify);

    if(!$captchaSuccess->success){
        echo "<script>alert('reCAPTCHA verification failed. Please try again.'); window.location='index.php?testimonialfail';</script>";
        exit;
    }
    //------------Form VALUES----------------

    $FIRST_NAME = $_POST['firstname'];
    $LAST_NAME = $_POST['lastname'];
    $EMAIL = $_POST['email'];
    $COMPANY = $_POST['company'];
    $JOBTITLE = $_POST['jb_title'];
    $SERVICE = $_POST['service'];
    $MESSAGE = $_POST['message'];
    $PERMISSION = $_POST['show_testimonial'];

    
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');
    if($fileError === 4){
      $sql = "INSERT INTO testimonial(FIRSTNAME,LASTNAME,EMAIL,COMPANY,JOBTITLE,SERVICE,MESSAGE,PERMISSION) VALUES('$FIRST_NAME','$LAST_NAME','$EMAIL','$COMPANY','$JOBTITLE','$SERVICE','$MESSAGE','$PERMISSION')";
      $result = $conn->query($sql);
      echo "<script type='text/javascript'>alert('Testimonial Successfully Submitted');
      window.location='index.php?testimonialsuccess';</script>";
    }
    if(in_array($fileActualExt, $allowed))
    {
      if($fileError === 0){
        //   If File size less than 2MB
        if($fileSize < 2000000){ 
          $fileNewName = uniqid('',true).".".$fileActualExt;
          $fileDestination = 'img/uploads/'.$fileNewName;
          move_uploaded_file($fileTmpName,$fileDestination);
          $sql = "INSERT INTO testimonial(FIRSTNAME,LASTNAME,EMAIL,COMPANY,JOBTITLE,SERVICE,MESSAGE,PERMISSION,IMAGE) VALUES('$FIRST_NAME','$LAST_NAME','$EMAIL','$COMPANY','$JOBTITLE','$SERVICE','$MESSAGE','$PERMISSION','$fileNewName')";
          $result = $conn->query($sql);
          echo "<script type='text/javascript'>alert('Testimonial Successfully Submitted');
          window.location='index.php?testimonialsuccess';</script>";

        }
        else {
          echo "<script type='text/javascript'>alert('File size exceeded 2MB!');
      window.location='index.php?testimonialfail';</script>";
        }

      }
      else {
        echo "<script type='text/javascript'>alert('There was an error uploading your testimonial, please try again!');
      window.location='index.php?testimonialfail';</script>";
      }

    }
    else {
      echo "<script type='text/javascript'>alert('You cannot upload a file of this type! Please upload JPEG, JPG, PNG files only');
      window.location='index.php?testimonialfail';</script>";
    }
  }



 ?>

 <!-- CREATE TABLE testimonial(
	ID int PRIMARY KEY AUTO_INCREMENT,
    FIRSTNAME VARCHAR(15) NOT NULL,
    LASTNAME VARCHAR(15) NOT NULL,
    EMAIL VARCHAR(30) NOT NULL,
    COMPANY VARCHAR (40) NOT NULL,
    JOBTITLE VARCHAR(15) NOT NULL,
    SERVICE VARCHAR(20) NOT NULL,
    MESSAGE TEXT NOT NULL,
    PERMISSION VARCHAR(4) NOT NULL,
    IMAGE VARCHAR(30) NOT NULL

); -->
