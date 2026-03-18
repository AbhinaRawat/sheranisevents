<?php
function getTestimonials($conn){

    $sql = "SELECT * FROM testimonial WHERE PERMISSION='YES' AND CD='YES'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        return; // No testimonials
    }

    echo "
    <h4 style='text-align:center;color:white;font-family:Muli;margin-bottom:-20px;
    background-color:#0B213D;line-height:2.5;font-weight:700;font-style:italic;
    text-transform:uppercase;letter-spacing:2.6px;'>
        Your Testimonials!
    </h4>

    <section id='testimonials'>
        <div id='testimonial-carousel' class='carousel slide' data-ride='carousel'>
            <div class='carousel-inner'>
    ";

    $active = " active";

    while ($row = $result->fetch_assoc()) {

        echo "
            <div class='carousel-item{$active}'>
                <h5 class='testimonial_msg'>".htmlspecialchars($row['MESSAGE'])."</h5>
                <img class='testimonial-image' src='img/uploads/".htmlspecialchars($row['IMAGE'])."' alt='profile-picture'><br>
                <em>".htmlspecialchars($row['FIRSTNAME'])." ".htmlspecialchars($row['LASTNAME'])."</em><br>
                <em>".htmlspecialchars($row['COMPANY']).", ".htmlspecialchars($row['JOBTITLE'])."</em>
            </div>
        ";

        $active = ""; // Only first item is active
    }

    echo "
            <style>
            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                filter: invert(1) grayscale(100);
            }
            </style>

            </div>

            <a class='carousel-control-prev' style='left:-10px' href='#testimonial-carousel' role='button' data-slide='prev'>
                <span class='carousel-control-prev-icon'></span>
            </a>

            <a class='carousel-control-next' style='right:-10px' href='#testimonial-carousel' role='button' data-slide='next'>
                <span class='carousel-control-next-icon'></span>
            </a>

        </div>
    </section>
    ";
}
?>