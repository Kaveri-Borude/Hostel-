<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <!-- <link rel="stylesheet" href="footer.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        *{
    margin:0;
    padding:0;
    font-family: 'poppins',sans-serif;
    box-sizing:border-box;
}



.footer .row {
  display: flex;
  /* flex-wrap: wrap; */
  justify-content: space-between;
  /* background: #fff !important; */
  color:white !important;
  padding: 40px;
}

.footer .row div {
  flex: 1 1 200px;
  margin: 20px;
}

.footer h2 {
  margin-bottom: 15px;
  font-size: 18px;
}

.footer ul {
  list-style: none;
  padding: 0;
}

.footer ul li {
  margin: 8px 0;
}

.footer a {
  color:white;
  text-decoration: none;
}

.footer a:hover {
  color: #f39c12;
}

.sci{
    display: flex;
    gap:30px;
    margin-top: 10px;
    color: white;
}
html, body {
  height: 100%;
  margin: 0;
}

body {
  display: flex;
  flex-direction: column;
}

main {
  flex: 1; /* grows to push footer down */
}

.footer {
   /* background-color: #00008B; */
  /* background: #f8f9fa; */
    background-color: #008080; 
  border-top: 1px solid #ccc;
  padding: 20px;
  
}




/* .contact i{
  background-color:rgb(20, 171, 225) !important;
} */



    </style>
</head>
<!-- 
</div> -->
    <footer class="footer"> 
        <div class="row">

            <div class="aboutus">
                <h2>About Us</h2>
                <p>We provide safe and affordable hostel facilities with modern amenities, guided by our mission of
                    comfort, community, and student success.</p>
                <ul class="sci">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>

            <div class="quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="Storage/Footer/hostel_rules.html">Hostel Rules</a></li>
                    <li><a href="../HOSTEL_MANAGEMENT(frontend+Backend)/index.php">Admissions / Booking</a></li>
                    <li><a href="Storage/Footer/facility.html">Facilities</a></li>
                    <li><a href="../MainPage/loginStudent1.php">Student Portal</a></li>
                </ul>
            </div>


            <div class="Support">
                <h2>Support</h2>
                <ul>
                    <li><a href="Storage/Footer/FAQ.html">FAQ</a></li>
                    <li><a href="Storage/Footer/privacy_policies.html">Privacy Policy</a></li>
                    <li><a href="#">Help Desk</a></li>
                </ul>

            </div>

            <div class="contact">
                <h2>Contact Us</h2>
                <ul>
                    <li><i class="fa-solid fa-location-dot"></i> loni, Maharashtra, India</li>
                    <li><i class="fa-solid fa-envelope"></i> wchsbca@gmail.com</li>
                    <li><i class="fa-solid fa-phone"></i> +91 98765 43210</li>
                    <li><a href="https://www.google.com/maps/place/PVP+Senior+College+PG+Building/@19.58174,74.4735137,17z/data=!3m1!4b1!4m6!3m5!1s0x3bdcf787159bda2f:0xbf5fedc2e9a0eeab!8m2!3d19.58174!4d74.4760886!16s%2Fg%2F11t63xygd1?entry=ttu&g_ep=EgoyMDI2MDEyOC4wIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="fa-solid fa-map"></i> View on Google
                            Maps</a></li>
                </ul>
            </div>



        </div>
    </footer>

</html>