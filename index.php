
<?php
include 'inc/header1.php';

Session::CheckSession();

$logMsg = Session::get('logMsg');
if (isset($logMsg)) {
  echo $logMsg;
}
$msg = Session::get('msg');
if (isset($msg)) {
  echo $msg;
}
Session::set("msg", NULL);
Session::set("logMsg", NULL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Fun Olympic</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script src="js/slider.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<div class="main-indents">
  <div class="main">
   <!-- Header -->
    <header>
      <h1 class="logo"><a href="index.html">Fun olympic</a></h1>
       <nav>
        <ul class="sf-menu">
        
          <li><a href="about.php">About</a></li>
          <li> <a href="livestream.php">Live Streaaming</a>
             <ul>
              <li><a href="Live Streaming.html">Football</a></li>
              <li><a href="Live Streaming.html">Basket Ball</a></li>
              <li> <a href="Live Streaming.html">Circket</a></li>
              <li><a href="Live Streaming.html">Cycling</a></li>
              <li><a href="Live Streaming.html">More Games</a></li>
            </ul>
          </li>
          <li><a href="Blog.html">Blog</a></li>
          <li><a href="gallery.html">Galarry</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="register.php">Signup/login</a>
            <ul>
                  <li><a href="login.php">Admin Login</a></li>
                  <li><a href="login.php">User Login</a></li>
              </ul>
          </li>
        </ul>
      </nav>
      <div class="clear"></div>
    </header>
    <!-- Slider -->
    <div class="mp-slider">
      <ul class="items">
        <li><img src="images/slide-1.jpg" alt="">
          <div class="banner"><span class="row-1"><b>Stadium</b></span><span class="row-2"></span></div>
        </li>
        <li><img src="images/slide-2.jpg" alt="">
          <div class="banner"><span class="row-1"><b>Bolt</b></span><span class="row-2"></b></span></div>
        </li>
        <li><img src="images/slide-3.jpg" alt="">
          <div class="banner"><span class="row-1"><b>Cycling</b></span><span class="row-2"></span></div>
        </li>
      </ul>
      <a href="#" class="mp-prev"></a> <a href="#" class="mp-next"></a> </div>
    <!-- Content -->
    <section id="content">
      <div class="container_12">
        <article class="a1">
          <div class="wrapper"> <img src="images/page1-img1.png" alt="" class="img-indent">
            <div class="extra-wrap">
              <h3> <span class="welcome">Welcome</span> To Fun Olympics </h3>
              <p class="p1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.</p>
            </div>
          </div>
        </article>
        <article class="content-box">
          <h3 class="hp-1">Upcoming Events:</h3>
          <div class="wrapper">
            <div class="col-1">
              <figure class="img-box"> <img src="images/page1-img2.jpg" alt=""> </figure>
              <h5><span>31</span> june</h5>
              <p>Lorem ipsum dolor amet, consectetuer adipiscing elitom nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
            </div>
            <div class="col-1">
              <figure class="img-box"> <img src="images/page1-img3.jpg" alt=""> </figure>
              <h5><span>21</span> july</h5>
              <p> Lorem ipsum dolor amet, consectetuer adipiscing elitom nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
            </div>
            <div class="col-2">
              <figure class="img-box"> <img src="images/page1-img4.jpg" alt=""> </figure>
              <h5><span>03</span> August</h5>
              <p> Lorem ipsum dolor amet, consectetuer adipiscing elitom nonummy nibh euismod tincidunt ut laoreet dolore magna.
            </div>
            <div class="col-1">
              <figure class="img-box"> <img src="images/page1-img2.jpg" alt=""> </figure>
              <h5><span>31</span> june</h5>
              <p>Lorem ipsum dolor amet, consectetuer adipiscing elitom nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
            </div>
            <div class="col-1">
              <figure class="img-box"> <img src="images/page1-img3.jpg" alt=""> </figure>
              <h5><span>21</span> july</h5>
              <p> Lorem ipsum dolor amet, consectetuer adipiscing elitom nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
            </div>
            <div class="col-2">
              <figure class="img-box"> <img src="images/page1-img4.jpg" alt=""> </figure>
              <h5><span>03</span> August</h5>
              <p> Lorem ipsum dolor amet, consectetuer adipiscing elitom nonummy nibh euismod tincidunt ut laoreet dolore magna.
            </div>
            <div class="col-1">
              <figure class="img-box"> <img src="images/page1-img2.jpg" alt=""> </figure>
              <h5><span>31</span> june</h5>
              <p>Lorem ipsum dolor amet, consectetuer adipiscing elitom nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
            </div>
            <div class="col-1">
              <figure class="img-box"> <img src="images/page1-img3.jpg" alt=""> </figure>
              <h5><span>21</span> july</h5>
              <p> Lorem ipsum dolor amet, consectetuer adipiscing elitom nonummy nibh euismod tincidunt ut laoreet dolore magna. </p>
            </div>
            <div class="col-2">
              <figure class="img-box"> <img src="images/page1-img4.jpg" alt=""> </figure>
              <h5><span>03</span> August</h5>
              <p> Lorem ipsum dolor amet, consectetuer adipiscing elitom nonummy nibh euismod tincidunt ut laoreet dolore magna.
            </div>
          </div>
        </article>
      </div>
    </section>
  </div>
</div>
</body>
</html>


<?php

if (isset($_GET['remove'])) {
  $remove = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['remove']);
  $removeUser = $users->deleteUserById($remove);
}

if (isset($removeUser)) {
  echo $removeUser;
}
if (isset($_GET['deactive'])) {
  $deactive = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['deactive']);
  $deactiveId = $users->userDeactiveByAdmin($deactive);
}

if (isset($deactiveId)) {
  echo $deactiveId;
}
if (isset($_GET['active'])) {
  $active = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['active']);
  $activeId = $users->userActiveByAdmin($active);
}

if (isset($activeId)) {
  echo $activeId;
}


 ?>
      <div class="card ">
        <div class="card-header">
          <h3><i class="fas fa-users mr-2"></i>User list <span class="float-right">Welcome! <strong>
            <span class="badge badge-lg badge-secondary text-white">
<?php
$username = Session::get('username');
if (isset($username)) {
  echo $username;
}
 ?></span>

          </strong></span></h3>
        </div>
        <div class="card-body pr-2 pl-2">

          <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th  class="text-center">SL</th>
                      <th  class="text-center">Name</th>
                      <th  class="text-center">Username</th>
                      <th  class="text-center">Email address</th>
                      <th  class="text-center">Mobile</th>
                      <th  class="text-center">Status</th>
                      <th  class="text-center">Created</th>
                      <th  width='25%' class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      $allUser = $users->selectAllUserData();

                      if ($allUser) {
                        $i = 0;
                        foreach ($allUser as  $value) {
                          $i++;

                     ?>

                      <tr class="text-center"
                      <?php if (Session::get("id") == $value->id) {
                        echo "style='background:#d9edf7' ";
                      } ?>
                      >

                        <td><?php echo $i; ?></td>
                        <td><?php echo $value->name; ?></td>
                        <td><?php echo $value->username; ?> <br>
                          <?php if ($value->roleid  == '1'){
                          echo "<span class='badge badge-lg badge-info text-white'>Admin</span>";
                        } elseif ($value->roleid == '2') {
                          echo "<span class='badge badge-lg badge-dark text-white'>Editor</span>";
                        }elseif ($value->roleid == '3') {
                            echo "<span class='badge badge-lg badge-dark text-white'>User Only</span>";
                        } ?></td>
                        <td><?php echo $value->email; ?></td>

                        <td><span class="badge badge-lg badge-secondary text-white"><?php echo $value->mobile; ?></span></td>
                        <td>
                          <?php if ($value->isActive == '0') { ?>
                          <span class="badge badge-lg badge-info text-white">Active</span>
                        <?php }else{ ?>
                    <span class="badge badge-lg badge-danger text-white">Deactive</span>
                        <?php } ?>

                        </td>
                        <td><span class="badge badge-lg badge-secondary text-white"><?php echo $users->formatDate($value->created_at);  ?></span></td>

                        <td>
                          <?php if ( Session::get("roleid") == '1') {?>
                            <a class="btn btn-success btn-sm
                            " href="profile.php?id=<?php echo $value->id;?>">View</a>
                            <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                            <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                    <?php if (Session::get("id") == $value->id) {
                      echo "disabled";
                    } ?>
                             btn-sm " href="?remove=<?php echo $value->id;?>">Remove</a>

                             <?php if ($value->isActive == '0') {  ?>
                               <a onclick="return confirm('Are you sure To Deactive ?')" class="btn btn-warning
                       <?php if (Session::get("id") == $value->id) {
                         echo "disabled";
                       } ?>
                                btn-sm " href="?deactive=<?php echo $value->id;?>">Disable</a>
                             <?php } elseif($value->isActive == '1'){?>
                               <a onclick="return confirm('Are you sure To Active ?')" class="btn btn-secondary
                       <?php if (Session::get("id") == $value->id) {
                         echo "disabled";
                       } ?>
                                btn-sm " href="?active=<?php echo $value->id;?>">Active</a>
                             <?php } ?>




                        <?php  }elseif(Session::get("id") == $value->id  && Session::get("roleid") == '2'){ ?>
                          <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $value->id;?>">View</a>
                          <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                        <?php  }elseif( Session::get("roleid") == '2'){ ?>
                          <a class="btn btn-success btn-sm
                          <?php if ($value->roleid == '1') {
                            echo "disabled";
                          } ?>
                          " href="profile.php?id=<?php echo $value->id;?>">View</a>
                          <a class="btn btn-info btn-sm
                          <?php if ($value->roleid == '1') {
                            echo "disabled";
                          } ?>
                          " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                        <?php }elseif(Session::get("id") == $value->id  && Session::get("roleid") == '3'){ ?>
                          <a class="btn btn-success btn-sm " href="profile.php?id=<?php echo $value->id;?>">View</a>
                          <a class="btn btn-info btn-sm " href="profile.php?id=<?php echo $value->id;?>">Edit</a>
                        <?php }else{ ?>
                          <a class="btn btn-success btn-sm
                          <?php if ($value->roleid == '1') {
                            echo "disabled";
                          } ?>
                          " href="profile.php?id=<?php echo $value->id;?>">View</a>

                        <?php } ?>

                        </td>
                      </tr>
                    <?php }}else{ ?>
                      <tr class="text-center">
                      <td>No user availabe now !</td>
                    </tr>
                    <?php } ?>

                  </tbody>

              </table>









        </div>
      </div>



  <?php
  include 'inc/footer.php';

  ?>
