<?php include('server.php');
$query = "SELECT * FROM User WHERE Username='".$_SESSION["username"]."' ";
$results = mysqli_query($db, $query) or die(mystringsqli_error($db));
while($row = $results->fetch_assoc()) {
    $Full_name = $row["Full_name"];
    $Position = $row["Position"];
    $Main_task = $row["Main_task"];
    $Contact_email = $row["Contact_email"];
    $Contact_phone = $row["Contact_phone"];
    $Institute = $row["Institute"];
    $Find_me = $row["Find_me"];

}
// if(isset($_POST['submit'])){
//         $ptofile_pic= $_FILES['file'];
//
//         $file_name = $_FILES['file']['name'];
//         $file_tmp_name = $_FILES['file']['tmp_name'];
//         $file_size= $_FILES['file']['size'];
//         $file_type = $_FILES['file']['error'];
//         $file_error = $_FILES['file']['type'];
//
//         $fileEXT = explode('.', $filename);
//         $file_actual_EXT = strtolower(end($fileEXT));
//
//         $allowed = array('jpg', 'jpeg', 'png' );
//
//         if(in_array($file_actual_EXT, $allowed)){
//             if ($file_error === 0) {
//                 if ($file_size < 100000){
//                     $file_new_name = uniqid( '', true).".".$file_actual_EXT;
//                     $file_destination = '';
//                 } else {
//                     echo "The file file is WAY TOO BIG OMG";
//                 }string
//             } else {
//             echo "The file coudnt been uploaded";
//             }
//         } else
//
//         echo "This type of file is not allowed";
// }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title></title>
    <body>
        <?php include('header.html') ?>
        <br>
<br>
<br>
<<<<<<< HEAD
<div class="container">
    <div class="sidebar">
        <div class="sidebar-top">
            <img class="profile-image" src="img/Albert.jpeg" />
            <div class="profile-basic">
                <h1 class="name"><?php echo $Full_name; ?></h1>
                <h4 class="designation"> <?php echo $Position; ?></h4>
            </div>
        </div>
        <div class="profile-info">
            <p class="key"> Main task: </p>
            <p class="value"><?php echo $Main_task; ?></p>
        </div>
        <div class="profile-info">
            <p class="key">Contact phone : </p>
            <p class="value"><?php echo $Contact_phone; ?></p>
        </div>
=======

<<<<<<< HEAD
<div class="container">
    <div class="sidebar">
        <div class="sidebar-top">
            <img class="profile-image" src="img/Albert.jpeg" />
            <div class="profile-basic">
                <h1 class="name"><?php echo $Full_name; ?></h1>
                <h4 class="designation"> <?php echo $Position; ?></h4>
            </div>
        </div>
        <div class="profile-info">
            <p class="key"> Main task: </p>
            <p class="value"><?php echo $Main_task; ?></p>
        </div>
        <div class="profile-info">
            <p class="key">Contact phone : </p>
            <p class="value"><?php echo $Contact_phone; ?></p>
        </div>

        <div class="profile-info">
            <p class="key" >Contact email : </p>
            <p class="value" ><?php echo $Contact_email; ?></p>
        </div>

        <div class="profile-info">
            <p class="key" >Usually you can find me... </p>
            <p><?php echo $Find_me; ?>
            </p>
        </div>

        <div class="profile-info">
            <p class="key" >Institution / Research group: <br> </p>
            <p class="value" > <?php echo $Institute; ?><br/>
            </p>
        </div>
        <div class="profile-info">
            <p class="key" >Change profile picture: </p>
        <form class="text-left" action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="" value="">
            <button class="btn btn-success text-center" type="submit" name="submit">UPLOAD</button>
        </form>
    </div>

    </div>

    <div class="content">
        <div class="work-experience">
            <h1 class="heading"> MY STUFF</h1>
            <div class="info">
                <p class="sub-heading">My storages</p>
                <p>dsfcgv</p>
            </div>
            <div class="info">
                <p class="sub-heading">My lab groups</p>
                <p>asdsf</p>
            </div>
            <div class="info">
                <p class="sub-heading">My tubes</p>
                <p>yep</p>
            </div>
        </div>
    </div>
</div>

<style media="screen">

    .sidebar {
        width:30%;
        display: inline-block;
        margin-left: 0;
        background: #5da4d9;
        color: white;
    }

    img {
        width: 100%;
    }

    .sidebar-top { position: relative; }

    .profile-basic {
        position: absolute;
        bottom: 0px;
        left: 50px;
    }

    .profile-info {
        padding: 20px 10px;
        border-bottom: 1px solid #4783c2;
    }

     .profile-info p{
        margin-left: 10px;
        display: inline-block;
        vertical-align: top;
    }

    .profile-info .key{
        font-weight: bold;
    }

    .profile-info .value{
    }

    .social-media:hover{
        cursor: pointer;
        color: white;
    }

    .content {
        width: 65%;
        margin-left: 2%;
        display: inline-block;
        vertical-align: top;
    }

    .work-experience, .education {
        margin-bottom: 30px;
        padding: 5% 2% 5% 10%;
        background: white;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    }

    .info {
        padding: 2% 1%;
        border-bottom: 1px solid #bdbdbd;
    }


    .sub-heading {
  font-weight: bold;
}

    .duration {
        color: #5da4d9;
        font-size:12px;
    }

</style>

=======
        <div id="user-profile-2" class="user-profile">
            <div class="tabbable">
              <ul class="nav nav-tabs padding-18">
                <li class="active">
                  <a data-toggle="tab" href="#home">
                    <i class="green ace-icon fa fa-user bigger-120"></i>
                    Profile
                  </a>
                </li>

                <li>
                  <a data-toggle="tab" href="#feed">
                    <i class="orange ace-icon fa fa-rss bigger-120"></i>
                    Activity Feed
                  </a>
                </li>

                <li>
                  <a data-toggle="tab" href="#friends">
                    <i class="blue ace-icon fa fa-users bigger-120"></i>
                    Lab Groups
                  </a>
                </li>

                <li>
                  <a data-toggle="tab" href="#pictures">
                    <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                    Storage
                  </a>
                </li>
              </ul>



              <div class="tab-content no-border padding-24">
                <div id="home" class="tab-pane in active">
                  <div class="row">
                    <div class="col-xs-12 col-sm-3 center">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



                            <!-- CATTO -->

                            <div class="side_wrapper">
                      <section class="about-dev">
                        <header class="profile-card_header">
                          <div class="profile-card_header-container">
                            <div class="profile-card_header-imgbox">
                              <img src="http://placekitten.com/600/900" alt="Mewy Pawpins" />
                            </div>
                            <h1>Mewy Pawpins <span>Head of Hooman Relations</span></h1>
                          </div>
                        </header>
                        <div class="profile-card_about">
                          <h2>All About Mewy</h2>
                          <p>I'm an aspiring ruler of hoomans from Chicago, looking for my fur-ever home. I like treats and playing and treats. And treats. I'd do well in a home where hoomans give me lots of treats!</p>
                          <footer class="profile-card_footer">
                            <div class="social-row">
                              <div class="heart-icon" title="No Health Issues">
                                <?xml version="1.0" encoding="utf-8"?>
                                <!-- Generated by IcoMoon.io -->
                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="hearti" width="32" height="32" viewBox="0 0 32 32">
                               <path fill="#444" d="M24 12.977c-3.866 0-7 3.158-7 7.055 0 2.22 1.020 4.197 2.609 5.491-2.056 1.525-3.609 2.488-3.609 2.488s-14-8.652-14-15.622c0-4.2 2.583-8.399 7.5-8.399 4.5 0 6.5 4.296 6.5 4.296s1.75-4.296 6.5-4.296 7.416 4.115 7.416 8.399c0 0.958-0.272 1.943-0.716 2.932-1.281-1.436-3.134-2.344-5.2-2.344zM24 13.984c3.313 0 6 2.707 6 6.047s-2.687 6.048-6 6.048c-3.314 0-6-2.708-6-6.048s2.686-6.047 6-6.047zM21 21.039h2v2.016h2v-2.016h2v-2.016h-2v-2.016h-2v2.016h-2v2.016z"></path>
                               </svg>

                              </div>
                              <div class="paw-icon" title="Gets Along Well With Other Animals">
                                <?xml version="1.0" encoding="utf-8"?>
                                <!-- Generated by IcoMoon.io -->
                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="pawi" width="26" height="28" viewBox="0 0 26 28">
                                    <path fill="#444" d="M12.187 7.375q0 0.938-0.297 1.773t-0.984 1.445-1.641 0.609q-1.188 0-2.156-0.898t-1.437-2.117-0.469-2.359q0-0.938 0.297-1.773t0.984-1.445 1.641-0.609q1.203 0 2.164 0.898t1.43 2.109 0.469 2.367zM6.844 14.922q0 1.25-0.656 2.172t-1.859 0.922q-1.188 0-2.211-0.867t-1.57-2.086-0.547-2.375q0-1.25 0.656-2.18t1.859-0.93q1.188 0 2.211 0.867t1.57 2.094 0.547 2.383zM13 14.5q1.844 0 3.984 1.523t3.578 3.703 1.437 3.977q0 0.719-0.266 1.195t-0.758 0.703-1.008 0.313-1.188 0.086q-1.062 0-2.93-0.703t-2.852-0.703q-1.031 0-3.008 0.695t-3.133 0.695q-2.859 0-2.859-2.281 0-1.344 0.875-2.992t2.18-3.008 2.93-2.281 3.016-0.922zM16.734 11.203q-0.953 0-1.641-0.609t-0.984-1.445-0.297-1.773q0-1.156 0.469-2.367t1.43-2.109 2.164-0.898q0.953 0 1.641 0.609t0.984 1.445 0.297 1.773q0 1.141-0.469 2.359t-1.437 2.117-2.156 0.898zM23.484 9.578q1.203 0 1.859 0.93t0.656 2.18q0 1.156-0.547 2.375t-1.57 2.086-2.211 0.867q-1.203 0-1.859-0.922t-0.656-2.172q0-1.156 0.547-2.383t1.57-2.094 2.211-0.867z"></path>
                                    </svg>
                              </div>

                            </div>
                            <p><a class="back-to-profile" href="#">Full Adoption Profile</a></p>
                          </footer>
                        </div>
                      </section>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br><br>
                    <br>
                    <br>
                    <br>
                    <br>
                      <div class="space space-4"></div>

                      <a href="#" class="btn btn-sm btn-block btn-success">
                        <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                        <span class="bigger-110">Add as a friend</span>
                      </a>

                      <a href="#" class="btn btn-sm btn-block btn-primary">
                        <i class="ace-icon fa fa-envelope-o bigger-110"></i>
                        <span class="bigger-110">Send a message</span>
                      </a>
                    </div><!-- /.col --> -->

                    <div class="col-xs-12 col-sm-9">
                      <h4 class="blue">
                        <span class="middle">John Doe</span>

                        <span class="label label-purple arrowed-in-right">
                          <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                          online
                        </span>
                      </h4>

                      <div class="profile-user-info">
                        <div class="profile-info-row">
                          <div class="profile-info-name"> Username </div>

                          <div class="profile-info-value">
                            <span>alexdoe</span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Location </div>

                          <div class="profile-info-value">
                            <i class="fa fa-map-marker light-orange bigger-110"></i>
                            <span>Netherlands</span>
                            <span>Amsterdam</span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Age </div>

                          <div class="profile-info-value">
                            <span>38</span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Joined </div>

                          <div class="profile-info-value">
                            <span>2010/06/20</span>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name"> Last Online </div>

                          <div class="profile-info-value">
                            <span>3 hours ago</span>
                          </div>
                        </div>
                      </div>

                      <div class="hr hr-8 dotted"></div>

                      <div class="profile-user-info">
                        <div class="profile-info-row">
                          <div class="profile-info-name"> Website </div>

                          <div class="profile-info-value">
                            <a href="#" target="_blank">www.alexdoe.com</a>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name">
                            <i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
                          </div>

                          <div class="profile-info-value">
                            <a href="#">Find me on Facebook</a>
                          </div>
                        </div>

                        <div class="profile-info-row">
                          <div class="profile-info-name">
                            <i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
                          </div>

                          <div class="profile-info-value">
                            <a href="#">Follow me on Twitter</a>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->

                  <div class="space-20"></div>


    <style media="screen">

body{margin-top:20px;}

.align-center, .center {
text-align: center!important;
}

.profile-user-info {
display: table;
width: 98%;
width: calc(100% - 24px);
margin: 0 auto
}

.profile-info-row {
display: table-row
}

.profile-info-name,
.profile-info-value {
display: table-cell;
border-top: 1px dotted #D5E4F1
}

.profile-info-name {
text-align: right;
padding: 6px 10px 6px 4px;
font-weight: 400;
color: #667E99;
background-color: transparent;
width: 110px;
vertical-align: middle
}

.profile-info-value {
padding: 6px 4px 6px 6px
}

.profile-info-value>span+span:before {
display: inline;
content: ",";
margin-left: 1px;
margin-right: 3px;
color: #666;
border-bottom: 1px solid #FFF
}

.profile-info-value>span+span.editable-container:before {
display: none
}

.profile-info-row:first-child .profile-info-name,
.profile-info-row:first-child .profile-info-value {
border-top: none
}

.profile-user-info-striped {
border: 1px solid #DCEBF7
}

.profile-user-info-striped .profile-info-name {
color: #336199;
background-color: #EDF3F4;
border-top: 1px solid #F7FBFF
}

.profile-user-info-striped .profile-info-value {
border-top: 1px dotted #DCEBF7;
padding-left: 12px
}

/* .profile-picture {
border: 1px solid #CCC;
background-color: #FFF;
padding: 4px;
display: inline-block;
max-width: 100%;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
box-shadow: 1px 1px 1px rgba(0, 0, 0, .15)
}

.dd-empty,
.dd-handle,
.dd-placeholder,
.dd2-content {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box
} */

/* .profile-activity {
padding: 10px 4px;
border-bottom: 1px dotted #D0D8E0;
position: relative;
border-left: 1px dotted #FFF;
border-right: 1px dotted #FFF
} */

.profile-activity:first-child {
border-top: 1px dotted transparent
}

.profile-activity:first-child:hover {
border-top-color: #D0D8E0
}

.profile-activity:hover {
background-color: #F4F9FD;
border-left: 1px dotted #D0D8E0;
border-right: 1px dotted #D0D8E0
}

.profile-activity img {
border: 2px solid #C9D6E5;
border-radius: 100%;
max-width: 40px;
margin-right: 10px;
margin-left: 0;
box-shadow: none
}

.profile-activity .thumbicon {
background-color: #74ABD7;
display: inline-block;
border-radius: 100%;
width: 38px;
height: 38px;
color: #FFF;
font-size: 18px;
text-align: center;
line-height: 38px;
margin-right: 10px;
margin-left: 0;
text-shadow: none!important
}

.profile-activity .time {
display: block;
margin-top: 4px;
color: #777
}

.profile-activity a.user {
font-weight: 700;
color: #9585BF
}

.profile-activity .tools {
position: absolute;
right: 12px;
bottom: 8px;
display: none
}

.profile-activity:hover .tools {
display: block
}

.user-profile .ace-thumbnails li {
border: 1px solid #CCC;
padding: 3px;
margin: 6px
}

.user-profile .ace-thumbnails li .tools {
left: 3px;
right: 3px
}

.user-profile .ace-thumbnails li:hover .tools {
bottom: 3px
}

.user-title-label:hover {
text-decoration: none
}

.user-title-label+.dropdown-menu {
margin-left: -12px
}

.profile-contact-links {
padding: 4px 2px 5px;
border: 1px solid #E0E2E5;
background-color: #F8FAFC
}

.btn-link:hover .ace-icon {
text-decoration: none!important
}

.profile-social-links>a:hover>.ace-icon,
.profile-users .memberdiv .name a:hover .ace-icon,
.profile-users .memberdiv .tools>a:hover {
text-decoration: none
}

.profile-social-links>a {
text-decoration: none;
margin: 0 1px
}

.profile-skills .progress {
height: 26px;
margin-bottom: 2px;
background-color: transparent
}

.profile-skills .progress .progress-bar {
line-height: 26px;
font-size: 13px;
font-weight: 700;
font-family: "Open Sans";
padding: 0 8px
}

.profile-users .user {
display: block;
position: static;
text-align: center;
width: auto
}

.profile-users .user img {
padding: 2px;
border-radius: 100%;
border: 1px solid #AAA;
max-width: none;
width: 64px;
-webkit-transition: all .1s;
-o-transition: all .1s;
transition: all .1s
}

.profile-users .user img:hover {
-webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33);
box-shadow: 0 0 1px 1px rgba(0, 0, 0, .33)
}

.profile-users .memberdiv {
background-color: #FFF;
width: 100px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border: none;
text-align: center;
margin: 0 8px 24px
}

.profile-users .memberdiv .body {
display: inline-block;
margin: 8px 0 0
}

.profile-users .memberdiv .popover {
visibility: hidden;
min-width: 0;
max-height: 0;
max-width: 0;
margin-left: 0;
margin-right: 0;
top: -5%;
left: auto;
right: auto;
opacity: 0;
display: none;
position: absolute;
-webkit-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
-o-transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s;
transition: opacity .2s linear 0s, visibility 0s linear .2s, max-height 0s linear .2s, max-width 0s linear .2s, min-width 0s linear .2s
}

.profile-users .memberdiv .popover.right {
left: 100%;
right: auto;
display: block
}

.profile-users .memberdiv .popover.left {
left: auto;
right: 100%;
display: block
}

.profile-users .memberdiv>:first-child:hover .popover {
visibility: visible;
opacity: 1;
z-index: 1060;
max-height: 250px;
max-width: 250px;
min-width: 150px;
-webkit-transition-delay: 0s;
-moz-transition-delay: 0s;
-o-transition-delay: 0s;
transition-delay: 0s
}

.profile-users .memberdiv .tools {
position: static;
display: block;
width: 100%;
margin-top: 2px
}

.profile-users .memberdiv .tools>a {
margin: 0 2px
}

.user-status {
display: inline-block;
width: 11px;
height: 11px;
background-color: #FFF;
border: 3px solid #AAA;
border-radius: 100%;
vertical-align: middle;
margin-right: 1px
}

.user-status.status-online {
border-color: #8AC16C
}

.user-status.status-busy {
border-color: #E07F69
}

.user-status.status-idle {
border-color: #FFB752
}

.tab-content.profile-edit-tab-content {
border: 1px solid #DDD;
padding: 8px 32px 32px;
-webkit-box-shadow: 1px 1px 0 0 rgba(0, 0, 0, .2);
box-shadow: 1px 1px 0 0 rgba(0, 0, 0, .2);
background-color: #FFF
}

@media only screen and (max-width:480px) {
.profile-info-name {
    width: 80px
}
.profile-user-info-striped .profile-info-name {
    float: none;
    width: auto;
    text-align: left;
    padding: 6px 4px 6px 10px;
    display: block
}
.profile-user-info-striped .profile-info-value {
    margin-left: 10px;
    display: block
}
.user-profile .memberdiv {
    width: 50%;
    margin-left: 0;
    margin-right: 0
}
}



.itemdiv {
padding-right: 3px;
min-height: 66px
}

.itemdiv>.user {
display: inline-block;
width: 42px;
position: absolute;
left: 0
}

.itemdiv>.user>.img,
.itemdiv>.user>img {
border-radius: 100%;
border: 2px solid #5293C4;
max-width: 40px;
position: relative
}

.itemdiv>.user>.img {
padding: 2px
}

.itemdiv>.body {
width: auto;
margin-left: 50px;
margin-right: 12px;
position: relative
}

.itemdiv>.body>.time {
display: block;
font-size: 11px;
font-weight: 700;
color: #666;
position: absolute;
right: 9px;
top: 0
}

.itemdiv>.body>.time .ace-icon {
font-size: 14px;
font-weight: 400
}

.itemdiv>.body>.name {
display: block;
color: #999
}

.itemdiv>.body>.name>b {
color: #777
}

.itemdiv>.body>.text {
display: block;
position: relative;
margin-top: 2px;
padding-bottom: 19px;
padding-left: 7px;
font-size: 13px
}

.itemdiv.dialogdiv:before,
.itemdiv.dialogdiv>.body:before,
.itemdiv>.body>.text:after {
content: "";
position: absolute
}

.itemdiv>.body>.text:after {
display: block;
height: 1px;
font-size: 0;
overflow: hidden;
left: 16px;
right: -12px;
margin-top: 9px;
border-top: 1px solid #E4ECF3
}

.itemdiv>.body>.text>.ace-icon:first-child {
color: #DCE3ED;
margin-right: 4px
}

.itemdiv:last-child>.body>.text {
border-bottom-width: 0
}

.itemdiv:last-child>.body>.text:after {
display: none
}

.itemdiv.dialogdiv {
padding-bottom: 14px
}

.itemdiv.dialogdiv:before {
display: block;
top: 0;
bottom: 0;
left: 19px;
width: 3px;
max-width: 3px;
background-color: #E1E6ED;
border: 1px solid #D7DBDD;
border-width: 0 1px
}

.itemdiv.dialogdiv:last-child {
padding-bottom: 0
}

.itemdiv.dialogdiv:last-child:before {
display: none
}

.itemdiv.dialogdiv>.user>img {
border-color: #C9D6E5
}

.itemdiv.dialogdiv>.body {
border: 1px solid #DDE4ED;
padding: 5px 8px 8px;
border-left-width: 2px;
margin-right: 1px
}

.itemdiv.dialogdiv>.body:before {
display: block;
left: -7px;
top: 11px;
width: 8px;
height: 8px;
border: 2px solid #DDE4ED;
border-width: 2px 0 0 2px;
background-color: #FFF;
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
-webkit-transform: rotate(-45deg);
-ms-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
transform: rotate(-45deg)
}

.itemdiv.dialogdiv>.body>.time {
position: static;
float: right
}

.itemdiv.dialogdiv>.body>.text {
padding-left: 0;
padding-bottom: 0
}

.itemdiv.dialogdiv>.body>.text:after {
display: none
}

.itemdiv.dialogdiv .tooltip-inner {
word-break: break-all
}

.itemdiv.memberdiv {
width: 175px;
padding: 2px;
margin: 3px 0;
float: left;
border-bottom: 1px solid #E8E8E8
}

@media (min-width:992px) {
.itemdiv.memberdiv {
    max-width: 50%
}
}

@media (max-width:991px) {
.itemdiv.memberdiv {
    min-width: 33.333%
}
}
>>>>>>> ff05ecd91cf393d8e1c986ae9eb43eaeca013eb5

        <div class="profile-info">
            <p class="key" >Contact email : </p>
            <p class="value" ><?php echo $Contact_email; ?></p>
        </div>

        <div class="profile-info">
            <p class="key" >Usually you can find me... </p>
            <p><?php echo $Find_me; ?>
            </p>
        </div>

        <div class="profile-info">
            <p class="key" >Institution / Research group: <br> </p>
            <p class="value" > <?php echo $Institute; ?><br/>
            </p>
        </div>
        <div class="profile-info">
            <p class="key" >Change profile picture: </p>
        <form class="text-left" action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="" value="">
            <button class="btn btn-success text-center" type="submit" name="submit">UPLOAD</button>
        </form>
    </div>

    </div>

    <div class="content">
        <div class="work-experience">
            <h1 class="heading"> MY STUFF</h1>
            <div class="info">
                <p class="sub-heading">My storages</p>
                <p>dsfcgv</p>
            </div>
            <div class="info">
                <p class="sub-heading">My lab groups</p>
                <p>asdsf</p>
            </div>
            <div class="info">
                <p class="sub-heading">My tubes</p>
                <p>yep</p>
            </div>
        </div>
    </div>
</div>

<style media="screen">

    .sidebar {
        width:30%;
        display: inline-block;
        margin-left: 0;
        background: #5da4d9;
        color: white;
    }

    img {
        width: 100%;
    }

    .sidebar-top { position: relative; }

    .profile-basic {
        position: absolute;
        bottom: 0px;
        left: 50px;
    }

    .profile-info {
        padding: 20px 10px;
        border-bottom: 1px solid #4783c2;
    }

     .profile-info p{
        margin-left: 10px;
        display: inline-block;
        vertical-align: top;
    }

    .profile-info .key{
        font-weight: bold;
    }

    .profile-info .value{
    }

    .social-media:hover{
        cursor: pointer;
        color: white;
    }

    .content {
        width: 65%;
        margin-left: 2%;
        display: inline-block;
        vertical-align: top;
    }

    .work-experience, .education {
        margin-bottom: 30px;
        padding: 5% 2% 5% 10%;
        background: white;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    }

    .info {
        padding: 2% 1%;
        border-bottom: 1px solid #bdbdbd;
    }


    .sub-heading {
  font-weight: bold;
}

    .duration {
        color: #5da4d9;
        font-size:12px;
    }

</style>

<<<<<<< HEAD
=======
.itemdiv.commentdiv .tools {
right: 9px
}

.item-list {
margin: 0;
padding: 0;
list-style: none
}

.item-list>li {
padding: 9px;
background-color: #FFF;
margin-top: -1px;
position: relative
}

.item-list>li.selected {
color: #8090A0;
background-color: #F4F9FC
}

.item-list>li.selected .lbl,
.item-list>li.selected label {
text-decoration: line-through;
color: #8090A0
}

.item-list>li label {
font-size: 13px
}

.item-list>li .percentage {
font-size: 11px;
font-weight: 700;
color: #777
}


.ace-thumbnails>li,
.ace-thumbnails>li>:first-child {
display: block;
position: relative
}

.ace-thumbnails {
list-style: none;
margin: 0;
padding: 0
}

.ace-thumbnails>li {
float: left;
overflow: hidden;
margin: 2px;
border: 2px solid #333
}

.ace-thumbnails>li>:first-child:focus {
outline: 0
}

.ace-thumbnails>li .tags {
display: inline-block;
position: absolute;
bottom: 0;
right: 0;
overflow: visible;
direction: rtl;
padding: 0;
margin: 0;
height: auto;
width: auto;
background-color: transparent;
border-width: 0;
vertical-align: inherit
}

.ace-thumbnails>li .tags>.label-holder {
opacity: .92;
filter: alpha(opacity=92);
display: table;
margin: 1px 0 0;
direction: ltr;
text-align: left
}

.ace-thumbnails>li>.tools,
.ace-thumbnails>li>:first-child>.text {
position: absolute;
text-align: center;
background-color: rgba(0, 0, 0, .55)
}

.ace-thumbnails>li .tags>.label-holder:hover {
opacity: 1;
filter: alpha(opacity=100)
}

.ace-thumbnails>li>.tools {
top: 0;
bottom: 0;
left: -30px;
width: 24px;
vertical-align: middle;
-webkit-transition: all .2s ease;
-o-transition: all .2s ease;
transition: all .2s ease
}

.ace-thumbnails>li>.tools.tools-right {
left: auto;
right: -30px
}

.ace-thumbnails>li>.tools.tools-bottom {
width: auto;
height: 28px;
left: 0;
right: 0;
top: auto;
bottom: -30px
}

.ace-thumbnails>li>.tools.tools-top {
width: auto;
height: 28px;
left: 0;
right: 0;
top: -30px;
bottom: auto
}

.ace-thumbnails>li:hover>.tools {
left: 0;
right: 0
}

.ace-thumbnails>li:hover>.tools.tools-bottom {
top: auto;
bottom: 0
}

.ace-thumbnails>li:hover>.tools.tools-top {
bottom: auto;
top: 0
}

.ace-thumbnails>li:hover>.tools.tools-right {
left: auto;
right: 0
}

.ace-thumbnails>li>.in.tools {
left: 0;
right: 0
}

.ace-thumbnails>li>.in.tools.tools-bottom {
top: auto;
bottom: 0
}

.ace-thumbnails>li>.in.tools.tools-top {
bottom: auto;
top: 0
}

.ace-thumbnails>li>.in.tools.tools-right {
left: auto;
right: 0
}

.ace-thumbnails>li>.tools>a,
.ace-thumbnails>li>:first-child .inner a {
display: inline-block;
color: #FFF;
font-size: 18px;
font-weight: 400;
padding: 0 4px
}

.ace-thumbnails>li>.tools>a:hover,
.ace-thumbnails>li>:first-child .inner a:hover {
text-decoration: none;
color: #C9E2EA
}

.ace-thumbnails>li .tools.tools-bottom>a,
.ace-thumbnails>li .tools.tools-top>a {
display: inline-block
}

.ace-thumbnails>li>:first-child>.text {
right: 0;
left: 0;
bottom: 0;
top: 0;
color: #FFF;
opacity: 0;
filter: alpha(opacity=0);
-webkit-transition: all .2s ease;
-o-transition: all .2s ease;
transition: all .2s ease
}

.dialogs,
.itemdiv {
position: relative
}

.ace-thumbnails>li>:first-child>.text:before {
content: '';
display: inline-block;
height: 100%;
vertical-align: middle;
margin-right: 0
}

.ace-thumbnails>li>:first-child>.text>.inner {
padding: 4px 0;
margin: 0;
display: inline-block;
vertical-align: middle;
max-width: 90%
}

.ace-thumbnails>li:hover>:first-child>.text {
opacity: 1;
filter: alpha(opacity=100)
}

@media only screen and (max-width:480px) {
.ace-thumbnails {
    text-align: center
}
.ace-thumbnails>li {
    float: none;
    display: inline-block
}
}


.tab-content {
border: 1px solid #C5D0DC;
padding: 16px 12px;
position: relative
}

.tab-content.no-padding {
padding: 0
}

.tab-content.no-border {
border: none;
padding: 12px
}

.tab-content.padding-32 {
padding: 32px 24px
}

.tab-content.no-border.padding-32 {
padding: 32px
}

.tab-content.padding-30 {
padding: 30px 23px
}

.tab-content.no-border.padding-30 {
padding: 30px
}

.tab-content.padding-28 {
padding: 28px 21px
}

.tab-content.no-border.padding-28 {
padding: 28px
}

.tab-content.padding-26 {
padding: 26px 20px
}

.tab-content.no-border.padding-26 {
padding: 26px
}

.tab-content.padding-24 {
padding: 24px 18px
}

.tab-content.no-border.padding-24 {
padding: 24px
}

.tab-content.padding-22 {
padding: 22px 17px
}

.tab-content.no-border.padding-22 {
padding: 22px
}

.tab-content.padding-20 {
padding: 20px 15px
}

.tab-content.no-border.padding-20 {
padding: 20px
}

.tab-content.padding-18 {
padding: 18px 14px
}

.tab-content.no-border.padding-18 {
padding: 18px
}

.tab-content.padding-16 {
padding: 16px 12px
}

.tab-content.no-border.padding-16 {
padding: 16px
}

.tab-content.padding-14 {
padding: 14px 11px
}

.tab-content.no-border.padding-14 {
padding: 14px
}

.tab-content.padding-12 {
padding: 12px 9px
}

.tab-content.no-border.padding-12 {
padding: 12px
}

.tab-content.padding-10 {
padding: 10px 8px
}

.tab-content.no-border.padding-10 {
padding: 10px
}

.tab-content.padding-8 {
padding: 8px 6px
}

.tab-content.no-border.padding-8 {
padding: 8px
}

.tab-content.padding-6 {
padding: 6px 5px
}

.tab-content.no-border.padding-6 {
padding: 6px
}

.tab-content.padding-4 {
padding: 4px 3px
}

.tab-content.no-border.padding-4 {
padding: 4px
}

.tab-content.no-border.padding-2,
.tab-content.padding-2 {
padding: 2px
}

.tab-content.no-border.padding-0,
.tab-content.padding-0 {
padding: 0
}


.nav.nav-tabs.padding-28 {
padding-left: 28px
}

.tabs-left>.nav.nav-tabs.padding-28,
.tabs-right>.nav.nav-tabs.padding-28 {
padding-left: 0;
padding-top: 28px
}

.nav.nav-tabs.padding-26 {
padding-left: 26px
}

.tabs-left>.nav.nav-tabs.padding-26,
.tabs-right>.nav.nav-tabs.padding-26 {
padding-left: 0;
padding-top: 26px
}

.nav.nav-tabs.padding-24 {
padding-left: 24px
}

.tabs-left>.nav.nav-tabs.padding-24,
.tabs-right>.nav.nav-tabs.padding-24 {
padding-left: 0;
padding-top: 24px
}

.nav.nav-tabs.padding-22 {
padding-left: 22px
}

.tabs-left>.nav.nav-tabs.padding-22,
.tabs-right>.nav.nav-tabs.padding-22 {
padding-left: 0;
padding-top: 22px
}

.nav.nav-tabs.padding-20 {
padding-left: 20px
}

.tabs-left>.nav.nav-tabs.padding-20,
.tabs-right>.nav.nav-tabs.padding-20 {
padding-left: 0;
padding-top: 20px
}

.nav.nav-tabs.padding-18 {
padding-left: 18px
}

.tabs-left>.nav.nav-tabs.padding-18,
.tabs-right>.nav.nav-tabs.padding-18 {
padding-left: 0;
padding-top: 18px
}

.nav.nav-tabs.padding-16 {
padding-left: 16px
}

.tabs-left>.nav.nav-tabs.padding-16,
.tabs-right>.nav.nav-tabs.padding-16 {
padding-left: 0;
padding-top: 16px
}

.nav.nav-tabs.padding-14 {
padding-left: 14px
}

.tabs-left>.nav.nav-tabs.padding-14,
.tabs-right>.nav.nav-tabs.padding-14 {
padding-left: 0;
padding-top: 14px
}

.nav.nav-tabs.padding-12 {
padding-left: 12px
}

.tabs-left>.nav.nav-tabs.padding-12,
.tabs-right>.nav.nav-tabs.padding-12 {
padding-left: 0;
padding-top: 12px
}

.nav.nav-tabs.padding-10 {
padding-left: 10px
}

.tabs-left>.nav.nav-tabs.padding-10,
.tabs-right>.nav.nav-tabs.padding-10 {
padding-left: 0;
padding-top: 10px
}

.nav.nav-tabs.padding-8 {
padding-left: 8px
}

.tabs-left>.nav.nav-tabs.padding-8,
.tabs-right>.nav.nav-tabs.padding-8 {
padding-left: 0;
padding-top: 8px
}

.nav.nav-tabs.padding-6 {
padding-left: 6px
}

.tabs-left>.nav.nav-tabs.padding-6,
.tabs-right>.nav.nav-tabs.padding-6 {
padding-left: 0;
padding-top: 6px
}

.nav.nav-tabs.padding-4 {
padding-left: 4px
}

.tabs-left>.nav.nav-tabs.padding-4,
.tabs-right>.nav.nav-tabs.padding-4 {
padding-left: 0;
padding-top: 4px
}

.nav.nav-tabs.padding-2 {
padding-left: 2px
}

.tabs-left>.nav.nav-tabs.padding-2,
.tabs-right>.nav.nav-tabs.padding-2 {
padding-left: 0;
padding-top: 2px
}

.nav-tabs {
border-color: #C5D0DC;
margin-bottom: 0!important;
position: relative;
top: 1px
}

.nav-tabs>li>a {
padding: 7px 12px 8px
}

.nav-tabs>li>a,
.nav-tabs>li>a:focus {
border-radius: 0!important;
border-color: #C5D0DC;
background-color: #F9F9F9;
color: #999;
margin-right: -1px;
line-height: 18px;
position: relative
}

.nav-tabs>li>a:hover {
background-color: #FFF;
color: #4C8FBD;
border-color: #C5D0DC
}

.nav-tabs>li>a:active,
.nav-tabs>li>a:focus {
outline: 0!important
}

.nav-tabs>li.active>a,
.nav-tabs>li.active>a:focus,
.nav-tabs>li.active>a:hover {
color: #576373;
border-color: #C5D0DC #C5D0DC transparent;
border-top: 2px solid #4C8FBD;
background-color: #FFF;
z-index: 1;
line-height: 18px;
margin-top: -1px;
box-shadow: 0 -2px 3px 0 rgba(0, 0, 0, .15)
}

.tabs-below>.nav-tabs {
top: auto;
margin-bottom: 0;
margin-top: -1px;
border-color: #C5D0DC;
border-bottom-width: 0
}

.tabs-below>.nav-tabs>li>a,
.tabs-below>.nav-tabs>li>a:focus,
.tabs-below>.nav-tabs>li>a:hover {
border-color: #C5D0DC
}

.tabs-below>.nav-tabs>li.active>a,
.tabs-below>.nav-tabs>li.active>a:focus,
.tabs-below>.nav-tabs>li.active>a:hover {
border-color: transparent #C5D0DC #C5D0DC;
border-top-width: 1px;
border-bottom: 2px solid #4C8FBD;
margin-top: 0;
box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .15)
}

.tabs-left>.nav-tabs>li>a,
.tabs-right>.nav-tabs>li>a {
min-width: 60px
}

.tabs-left>.nav-tabs {
top: auto;
margin-bottom: 0;
border-color: #C5D0DC;
float: left
}

.tabs-left>.nav-tabs>li {
float: none!important
}

.tabs-left>.nav-tabs>li>a,
.tabs-left>.nav-tabs>li>a:focus,
.tabs-left>.nav-tabs>li>a:hover {
border-color: #C5D0DC;
margin: 0 -1px 0 0
}

.tabs-left>.nav-tabs>li.active>a,
.tabs-left>.nav-tabs>li.active>a:focus,
.tabs-left>.nav-tabs>li.active>a:hover {
border-color: #C5D0DC transparent #C5D0DC #C5D0DC;
border-top-width: 1px;
border-left: 2px solid #4C8FBD;
margin: 0 -1px;
-webkit-box-shadow: -2px 0 3px 0 rgba(0, 0, 0, .15)!important;
box-shadow: -2px 0 3px 0 rgba(0, 0, 0, .15)!important
}

.tabs-right>.nav-tabs {
top: auto;
margin-bottom: 0;
border-color: #C5D0DC;
float: right
}

.tabs-right>.nav-tabs>li {
float: none!important
}

.tabs-right>.nav-tabs>li>a,
.tabs-right>.nav-tabs>li>a:focus,
.tabs-right>.nav-tabs>li>a:hover {
border-color: #C5D0DC;
margin: 0 -1px
}

.tabs-right>.nav-tabs>li.active>a,
.tabs-right>.nav-tabs>li.active>a:focus,
.tabs-right>.nav-tabs>li.active>a:hover {
border-color: #C5D0DC #C5D0DC #C5D0DC transparent;
border-top-width: 1px;
border-right: 2px solid #4C8FBD;
margin: 0 -2px 0 -1px;
-webkit-box-shadow: 2px 0 3px 0 rgba(0, 0, 0, .15);
box-shadow: 2px 0 3px 0 rgba(0, 0, 0, .15)
}

.nav-tabs>li>a .badge {
padding: 1px 5px;
line-height: 15px;
opacity: .75;
vertical-align: initial
}

.nav-tabs>li>a .ace-icon {
opacity: .75
}

.nav-tabs>li.active>a .ace-icon,
.nav-tabs>li.active>a .badge {
opacity: 1
}

.nav-tabs li .ace-icon {
width: 1.25em;
display: inline-block;
text-align: center
}

.nav-tabs>li.open .dropdown-toggle {
background-color: #4F99C6;
border-color: #4F99C6;
color: #FFF
}

.nav-tabs>li.open .dropdown-toggle>.ace-icon {
color: #FFF!important
}

.tabs-left .tab-content,
.tabs-right .tab-content {
overflow: auto
}

.dark {
color: #333!important
}

.white {
color: #FFF!important
}

.red {
color: #DD5A43!important
}

.red2 {
color: #E08374!important
}

.light-red {
color: #F77!important
}

.blue {
color: #478FCA!important
}

.light-blue {
color: #93CBF9!important
}

.green {
color: #69AA46!important
}

.light-green {
color: #B0D877!important
}

.orange {
color: #FF892A!important
}

.orange2 {
color: #FEB902!important
}

.light-orange {
color: #FCAC6F!important
}

.purple {
color: #A069C3!important
}

.pink {
color: #C6699F!important
}

.pink2 {
color: #D6487E!important
}

.brown {
color: brown!important
}

.grey {
color: #777!important
}
    </style>



<style media="screen">
* {
box-sizing: border-box;
}

html {
font-size: 100%;
}

body {
padding: 0;
margin: 0;
min-height: 100vh;
background: -webkit-linear-gradient(transparent, rgba( 110, 110, 110, .3)), -webkit-linear-gradient(350deg, rgba(250, 214, 195, .8) 30%, #B0EAE8 120%);
background: linear-gradient(transparent, rgba( 110, 110, 110, .3)), linear-gradient(100deg, rgba(250, 214, 195, .8) 30%, #B0EAE8 120%);
}

.sidebar_wrapper {
width: 100%;
max-width: 26rem;
}

.about-dev {
width: 100%;
max-width: 26rem;
margin: auto;
box-shadow: 2px 4px 2px -2px rgba(0, 0, 0, .3), -2px -4px 15px -2px rgba(0, 0, 0, .2);
animation: profile_in 0.8s;
}

@keyframes profile_in {
0% {
opacity: 0;
transform: translateY(30%);
}
100% {
opacity: 1;
transform: translateY(0);
}
}


/* profile card header */

.profile-card_header-container {
max-width: 15rem;
margin: auto;
}

.profile-card_header {
background: #272727;
border-left: 0.625rem solid #97ece1;
padding: 1.5em 1.5em 1em;
text-align: center;
}


/* profile picture */

.profile-card_header-imgbox {
display: block;
width: 9.5rem;
height: 9.5rem;
overflow: hidden;
border-radius: 50%;
margin: auto;
background: rgba(250, 214, 195, 1);
border: 0.375rem solid rgba(250, 214, 195, 1);
}

.profile-card_header img {
max-width: 100%;
filter: grayscale(100%);
}


/* header heading */

.profile-card_header h1 {
color: #f3f3f3;
font-size: 1.5rem;
margin-top: 0.8em;
font-family: 'Oswald', sans-serif;
font-weight: normal;
position: relative;
}


/* header text span */

.profile-card_header h1 span {
font-size: 1.2rem;
font-weight: 300;
display: block;
color: rgba(220, 220, 220, .95);
margin-top: 0.25em;
padding-top: 0.25em;
border-top: 0.075em solid rgba(250, 214, 195, 1);
}


/* about section */

.profile-card_about {
line-height: 1.5;
background: #ededed;
padding: 1.5em 2rem;
color: #222;
font-family: 'Lato', sans-serif;
}

.profile-card_about h2 {
margin: 0;
display: inline-block;
color: #333;
font-weight: normal;
text-transform: uppercase;
font-size: 1.3rem;
position: relative;
z-index: 2;
vertical-align: middle;
}

.profile-card_about h2::before {
content: '';
position: absolute;
width: 110%;
/*  max-width: 13.8rem;
*/
height: 1rem;
background: #c6f1eb;
left: -5px;
top: 50%;
z-index: -1;
}

.profile-card_about p {
font-weight: 300;
}

.profile-card_footer {
margin-top: 1.5em;
text-align: right;
}


/* social row */

.social-row {
margin-right: 0.5em;
}

.paw-icon,
.heart-icon {
display: inline-block;
margin-left: 0.5em;
transition: transform 0.3s;
}

#pawi,
#hearti {
height: 1.8rem;
width: 1.8rem;
cursor: help;
-webkit-transition: fill 0.3s ease-in-out;
transition: fill 0.3s ease-in-out;
}

#pawi path,
#hearti path {
fill: #272727;
}

.paw-icon:hover,
.heart-icon:hover {
transform: scale(1.2);
}


/* back to profile link */

.back-to-profile,
.back-to-profile:visited {
display: inline-block;
padding-left: 0.5em;
padding-bottom: 0.1em;
color: #222;
text-decoration: none;
font-weight: bold;
border-top: 0.3125rem solid rgba(0, 0, 0, 0);
border-bottom: 0.3125rem solid #97ece1;
-webkit-transition: border 0.3s ease-in-out;
transition: border 0.3s ease-in-out;
}

.back-to-profile::after {
content: "\25b6";
margin: 0 0.75em;
color: #222;
}

.back-to-profile:hover,
.back-to-profile:focus {
border-top-color: #222;
border-bottom-color: #fdc1a0;
}

@media screen and (max-width: 26em) {
.side_wrapper {
min-height: 100vh;
background: #ededed;
}
.about-dev {
box-shadow: none;
}
}

@media screen and (min-width: 33em) {
.side_wrapper {
margin: 2rem auto;
}
.profile-card_header {
padding: 1.5em 4em 1em;
}
}

@media screen and (min-height: 46em) {
.side_wrapper {
width: 100%;
max-width: 26rem;
margin: 0;
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
.about-dev {
max-width: 26rem;
}
}
</style>

        <form class="" action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="" value="">
            <button type="submit" name="submit">UPLOAD</button>
        </form>
>>>>>>> ff05ecd91cf393d8e1c986ae9eb43eaeca013eb5
>>>>>>> main
        <?php include('footer.html') ?>


    </body>
</html>
