<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="../CSS/adminDashboardstyle.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>


  <?php
    //establishing connection
    include_once "dbconnection.php";
    
    //sql_quary
    $sql = "SELECT COUNT(*)
            FROM customer";

    $result = $conn->query($sql);
    $totalCustomers = $result-> fetch_assoc();
    // echo $totalCustomers['COUNT(*)'];

    //sql_quary
    $sql = "SELECT COUNT(*)
            FROM staff";

    $result = $conn->query($sql);
    $totalStaff = $result-> fetch_assoc();
    // echo $totalStaff['COUNT(*)'];

    //sql_quary
    $sql = "SELECT SUM(amount)
            FROM payment";

    $result = $conn->query($sql);
    $totalAmount = $result-> fetch_assoc();
    // echo $totalAmount['SUM(amount)'];

    //sql_quary
    $sql = "SELECT COUNT(*)
            FROM service
            WHERE status='need service'";

    $result = $conn->query($sql);
    $totalServiceNeeded = $result-> fetch_assoc();
    // echo $totalServiceNeeded['COUNT(*)'];

   
    
  ?>

  <div class="sidebar">
    <div class="logo-details">
      
      <span class="logo_name">    BAY INN</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admindashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="userInfo.php">
            
            <i class='bx bx-user' ></i>
            <span class="links_name">User</span>
          </a>
        </li>
        <li>
          <a href="staffInfo.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Staff</span>
          </a>
        </li>
        <li>
          <a href="reservation.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Reservation</span>
          </a>
        </li>
        <li>
          <a href="complains.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">ComplainBox</span>
          </a>
        </li>
        <li>
          <a href="paymentInfo.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">payment history</span>
          </a>
        </li>
        <li>
          <a href="serviceHistory.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">service history</span>
          </a>
        </li>
        
        <li>
          <a href="pendingService.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Pending service</span>
          </a>
        </li>
        <li>
          <a href="roomInfo.php">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Room info</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> -->
        <li class="log_out">
          <a href="userdashboard.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">ADMIN</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Customers</div>
            <div class="number"><?php echo $totalCustomers['COUNT(*)']?></div>
            
            <div class="indicator">
              <i class='bx bx-user'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Staff</div>
            <div class="number"><?php echo $totalStaff['COUNT(*)']?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Amount</div>
            <div class="number"><?php echo $totalAmount['SUM(amount)']?></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">service needed</div>
            <div class="number"><?php echo $totalServiceNeeded['COUNT(*)']?></div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Booking</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">18 April 2022
              </a></li>
              <li><a href="#">17 April 2022</a></li>
              <li><a href="#">17 April 2022</a></li>
              
            </ul>
            <ul class="details">
            <li class="topic">Customer</li>
            <li><a href="#">Samia Jafrin</a></li>
            <li><a href="#">Fahim Arefin</a></li>
            <li><a href="#">Jawad Tanjim</a></li>
         
          <ul class="details">
            <li class="topic">Customization</li>
            <li><a href="#">no</a></li>
            <li><a href="#">yes</a></li>
            <li><a href="#">no</a></li>
            
          </ul>
          <ul class="details">
            <li class="topic">payment</li>
            <li><a href="#">23,900taka</a></li>
            <li><a href="#">50,900taka</a></li>
            <li><a href="#">21,300taka</a></li>
         
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Employee hours</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <!--<img src="images/sunglasses.jpg" alt="">-->
              <span class="NAME">Rahim Shikder</span>
            </a>
            <span class="Duty Hour">11am-2pm</span>
          </li>
          <li>
            <a href="#">
               <!--<img src="images/jeans.jpg" alt="">-->
              <span class="NAME">Niyon Haldar </span>
            </a>
            <span class="Duty Hour">12pm-6pm</span>
          </li>
          <li>
            <a href="#">
             <!-- <img src="images/nike.jpg" alt="">-->
              <span class="NAME">Shourav Rahman</span>
            </a>
            <span class="Duty Hour">4pm-9pm</span>
          </li>
          <li>
            <a href="#">
              <!--<img src="images/scarves.jpg" alt="">-->
              <span class="NAME">Hridoy Pal</span>
            </a>
            <span class="Duty Hour">9pm-9am</span>
          </li>
          
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

