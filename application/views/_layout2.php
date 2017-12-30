<!DOCTYPE html>
<html lang="en" class=" js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie10 no-ios">

<head>
    <meta charset="utf-8">
    <title>Coddl</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <style>
        .file-input-wrapper {
            overflow: hidden;
            position: relative;
            cursor: pointer;
            z-index: 1;
        }
        .file-input-wrapper input[type=file],
        .file-input-wrapper input[type=file]:focus,
        .file-input-wrapper input[type=file]:hover {
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
            z-index: 99;
            outline: 0;
        }
        .file-input-name {
            margin-left: 8px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/bootstrap.css" type="text/css">

    <link rel="stylesheet" href="<?php echo (base_url());?>/layerslider/css/layerslider.css" type="text/css">


    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/font.css" type="text/css" cache="false">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/js/fuelux/fuelux.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/js/datepicker/datepicker.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/js/nestable/nestable.css" type="text/css" cache="false" />
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/plugin.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/app.css" type="text/css">
    

     <!-- testing smart menu -->
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/sm-simple.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/sm-core-css.css" type="text/css">

    <!-- responsive lightbox -->
   <link rel="stylesheet" type="text/css" href="<?php echo (base_url());?>Responsive-Lightbox/jquery.lightbox.css">

   <!-- responsive lightbox -->
   <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/coddl/coddl.css" type="text/css">
 
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo (base_url()."resources")?>/js/ie/respond.min.js" cache="false"></script>
    <script src="<?php echo (base_url()."resources")?>/js/ie/html5.js" cache="false"></script>
    <script src="<?php echo (base_url()."resources")?>/js/ie/fix.js" cache="false"></script>
  <![endif]-->


  
    <style type="text/css">



.try-container{

  position: relative;
  max-width: 600px;
  margin: 0 auto;
}




.f{
  
  height:54px;
  border-radius: 0px;
  margin: 0 auto;
  border: 1px solid #b9b9b9;
  box-shadow: 0px 4px 11.05px 1.95px rgba(0, 0, 0, 0.17);
  
}


/*styling for the breadcrumb*/
.m-breadcrumb
{


 margin-top: 5px;
 background-color: #<?php echo $theme['color']; ?>;
 padding: 5px;
 margin-bottom: 20px;
 color: #fff;
 font-weight: bold;


}


.product-description
{
    font-size: 16px;


}


.sizes{

    position: relative;
    margin-top: 30px;
    background-color: #f2f2f2;
    padding: 10px;
    font-size: 14px;
   
    /*box-shadow: 0px 4px 11.05px 1.95px rgba(0, 0, 0, 0.17); */



}


.book
{

    background-color: #fff;
    max-width: 1120px;
    position: relative;
    margin: 0 auto;
    border-left: solid 1px #<?php echo $theme['boxcolor']; ?>;
    border-right: solid 1px #<?php echo $theme['boxcolor']; ?>;



}

.bord-b{
     border-bottom: solid 1px #<?php echo $theme['boxcolor']; ?>;
}


/*filter buttons*/

.ft{

position: relative;
 background-color: #<?php echo $theme['color']; ?>;
 color: #fff;
 padding: 5px;
 border-radius: 2px;
 font-weight: bold;
 margin-left: 5px;


}


/*product styling*/
.bb {

    border: solid 3px #<?php echo $theme['color']; ?>;


}

.tit{

 background-color: #<?php echo $theme['color']; ?>;
 color: #fff;
 font-weight: bold;


}







.post-item{

    border: 1px solid #ccc;
   
}

h1,h2,h3,h4,h5{
  color: #111;
}

.m-t{
    margin-top: 30px;
}






    /*new menu test styles*/
.main-nav {
  /*border: 1px solid #bbb;*/
  background: #fff;
 /* -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 41px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);*/
}

.main-nav:after {
  clear: both;
  content: "\00a0";
  display: block;
  height: 0;
  font: 0px/0 serif;
  overflow: hidden;
}

.nav-brand {
  float: left;
  margin: 0;
}

.nav-brand a {
  display: block;
  padding: 11px 11px 11px 20px;
  color: #555;
  /*font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;*/
  font-size: 20px;
  font-weight: normal;
  line-height: 17px;
  text-decoration: none;
}

#main-menu {
  clear: both;
  border: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  margin-top: 25px;
  padding-bottom: 20px;

}

@media (min-width: 768px) {
  #main-menu {
    float: right;
    clear: none;
  }
}


/* Mobile menu toggle button */

.main-menu-btn {
  float: right;
  margin: 5px 10px;
  position: relative;
  display: inline-block;
  width: 29px;
  height: 29px;
  text-indent: 29px;
  white-space: nowrap;
  overflow: hidden;
  cursor: pointer;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

.sm-simple a:hover, .sm-simple a:focus, .sm-simple a:active, .sm-simple a.highlighted {
    background: #ffffff;
    color: #<?= $theme['color'] ?>
}

.sm-simple > li {
    border-top: 0;
     border-left: 1px solid #ffffff; 
}



.main-menu-btn-icon,
.main-menu-btn-icon:before,
.main-menu-btn-icon:after {
  position: absolute;
  top: 50%;
  left: 2px;
  height: 2px;
  width: 24px;
  background: #555;
  -webkit-transition: all 0.25s;
  transition: all 0.25s;
}

.main-menu-btn-icon:before {
  content: '';
  top: -7px;
  left: 0;
}

.main-menu-btn-icon:after {
  content: '';
  top: 7px;
  left: 0;
}


/* x icon */

#main-menu-state:checked ~ .main-menu-btn .main-menu-btn-icon {
  height: 0;
  background: transparent;
}

#main-menu-state:checked ~ .main-menu-btn .main-menu-btn-icon:before {
  top: 0;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

#main-menu-state:checked ~ .main-menu-btn .main-menu-btn-icon:after {
  top: 0;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}


/* hide menu state checkbox (keep it visible to screen readers) */

#main-menu-state {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  border: 0;
  padding: 0;
  overflow: hidden;
  clip: rect(1px, 1px, 1px, 1px);
}


/* hide the menu in mobile view */

#main-menu-state:not(:checked) ~ #main-menu {
  display: none;
}

#main-menu-state:checked ~ #main-menu {
  display: block;
}

@media (min-width: 768px) {
  /* hide the button in desktop view */
  .main-menu-btn {
    position: absolute;
    top: -99999px;
  }
  /* always show the menu in desktop view */
  #main-menu-state:not(:checked) ~ #main-menu {
    display: block;
  }
}

/*end new menu*/








        /*style for asset add new*/
        .m-asset-new{
            color: #03a9f4;
            text-decoration: underline;
            margin-left: 5px;
        }

        /*styles for the select assets*/
        .new-file{

            padding: 10px;
            background-color: #e8ebef;


        }


        .existing-assets{
            padding: 10px;
            

        }

        /*styling for the assets*/
        .one-asset{

            position: relative;
            margin-left: 20px;
            
            width: 100px;
            height: auto;
            padding:10px;
            float: left;

        }

        /*styling for rich text box display*/
        .rich{

            padding: 10px;
            background-color: #e8efec;
            min-height: 200px;

        }


        .bot{

            position: relative;
            top: 5px;
            
            margin-left: 10px;

        }

        

       
        pre{
            
            color: #333;
            font-size: 14px;
            background-color: #f0f0f0;
        }

        /*small label text*/
        .igs-small{
            color: #555;
            font-size: 12px;
            line-height: 20px;
            

        }

        .breadcrumb{
            font-weight: bold;
        }


        /*For the big icons on dashboard*/
        .big{
            font-size: 30px;
            
        }

        .my-pad{
            padding:20px;
        }

        .my-pad-top{

            padding:20px;
        }

        .my-blk{
            
            padding:10px;
            max-width: 200px;

            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
        }
        .my-info{
            display:inline-block;
            margin-left: 10px;
            font-weight: bold;
        }
        
        .my-center {
            margin-left: auto;
            margin-right: auto;

        }
        #tidy {
            max-width: 1170px;
            margin: 0 auto;
        }

        .small-gap{
            margin-top: 10px;
        }
        .gap {
            margin-top: 50px;
        }
        body {
            background-color: #ffffff;
            font-family: 'Varela Round', sans-serif;
            font-size: 18px;
            line-height: 1.8em;
            color: #<?php echo $theme['fontcolor']; ?>;
            -webkit-font-smoothing: antialiased;
            
            
            /* Fix for webkit rendering */
        }
        .shorttag {
            /*display:none;*/
        }
        .pm-footer {
            background-color: #<?php echo $theme['bgcolor']; ?>;
            min-height: 200px;
            bottom: 0px;

        }
        .footer-brand {
            color: #666;
            

        }
        .phone-number-bar {
            position: relative;
            min-height: 30px;
            font-size: 16px;
            background-color: #333;
        }
        .phone-number {
            position: relative;
            margin: 0 auto;
            max-width: 1170px;
        }
        .num {
            float: right;
            position: relative;
            padding-top: 5px;
            padding-right: 5px;
            color: #fff;
        }
        .social-media {
            margin-top: 5px;
        }
        .tab-content {
            background-color: #<?php echo $theme['bgcolor']; ?>;
        }
        .pmf-container {
            position: relative;
            margin-right: auto;
            margin-left: auto;
            
            max-width: 1170px;
        }
        .pm-header {
            min-height: 150px;
            background-color: #B384A3;
            border-bottom: 1px solid #ccc;
        }
        .pm-btext {
            font-family: 'open sans';
            /*font-family: 'MuseoSans-500', sans-serif;*/
            color: #fff;
        }
        .logo {
            float: left;
            position: relative;
            
        }
        .logo-text {
            position: relative;
            top: 30px;
            margin-left: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        .head-outer {
            position: relative;
            background-color: #363636;
            /*box-shadow: 0 4px 4px rgba(0, 0, 0, .11);*/
            min-height: 90px;
            z-index: 999;
        }
        .head {
            height: 80px;
            background-color: #363636;
            color: #fff;
            min-width: 205px;
        }
        a {
            color: #<?= $theme['color'] ?>;
            
        }
        /*for the login button on menu*/
        a:hover {
            
            text-decoration: underline;
        }   
        .red{
            color:#811607;
        }


        .purplet {
            /*color: #bc8dbe; */
            color: #<?= $theme['color'] ?>;
        }
        .bg-purplet {
            background-color: #<?= $theme['color'] ?>;
        }
        .btn-purplet {
            color: #fff !important;
            background-color: #<?= $theme['color'] ?>;
            border-color: #<?= $theme['color'] ?>;
        }

        .btn-black{
            color: #fff !important;
            background-color: #363636;
            border-color: #363636;
            
        }
        /*page builder styles*/
        .handle {
            display: inline;
            float: left;
            cursor: move;
        }
        .grow {
            display: inline;
            width: 20px;
            height: 20px;
            float: left;
            text-align: center;
            color: #666;
            cursor: pointer;
        }
        .shrink {
            display: inline;
            width: 20px;
            height: 20px;
            float: left;
            text-align: center;
            color: #666;
            cursor: pointer;
        }
        .remove {
            display: inline;
            width: 20px;
            height: 20px;
            float: right;
            text-align: center;
            color: #333;
            cursor: pointer;
        }
        #sortable {
            /*background-color: #cccccc;
            margin-left: 20px;*/
        }
        .clearfix {
            clear: both;
            font-size: 1px;
        }
        .text {
            display: inline;
            float: left;
            color: #ffffff;
        }
        .popover{
            min-width: 150px;
        }
        .popover-title{
            color:#333;
        }
        .popover-content{
            color:#333;
        }
        .pm-hidden{
            display:none;
        }
        .datepicker td.active, .datepicker td.active:hover, .datepicker td.active:hover.active, .datepicker td.active.active {
            background-color: #<?= $theme['color'] ?>;

        }

        .switch input:checked + span {
            background-color: #<?= $theme['color'] ?>;
        }

        .list-group-item {
            background-color: #E6E6E6;
        }
        /*For the draggable section types*/
        #my-sort{
            cursor: pointer;
        }

        /*For the portlets */

         #sortable1 {
            border: 2px dashed #E0604E;
            width: 220px;
            min-height: 80px;
            list-style-type: none;
            margin: 0;
            padding: 5px 0 0 0;
            float: left;
            border-radius: 5px;
            margin-right: 10px;
          }

          #sortable2 {
            border: 2px dashed #<?= $theme['color'] ?>;
            width: 220px;
            min-height: 80px;
            list-style-type: none;
            margin: 0;
            padding: 5px 0 0 0;
            float: left;
            border-radius: 5px;
            margin-right: 10px;

          }
          #sortable1 li, #sortable2 li {
            margin: 0 5px 5px 5px;
            padding: 10px;
            border:1px solid #999;
            font-size: 12px;
            font-weight: bold;
            width: 200px;
            border-radius: 5px;
            cursor: pointer;
          }

          .m-required{
            background-color: #<?= $theme['color'] ?>;

          }

        .errors{
            color: #E0604E;
            font-size: 12px;
        }
        

        .green-block
        {
            background-color: #eee;
            border-top: 1px solid #C5C5C5;
            border-left: 1px solid #C5C5C5;
            border-right:1px solid #C5C5C5;
            min-height: 50px;
            cursor: pointer;

        }
        /*highlights chosen block*/
        .highlight
        {
            background-color: #DCEAE9;
        }

        .green-block-title{
            position: relative;
            margin-top: 10px;
            margin-left: 10px;
            color: #999;
            font-size: 12px;
            line-height: 20px;

        }

       
        
    </style>
</head>

<body  screen_capture_injected="true" class="tab-content">
    <section class="hbox stretch">
   
<!-- .vbox -->
<section id="content">
  <section class="vbox">
   

<div class="book">
  <div class="pmf-container " style="margin-left:auto; margin-right:auto;  max-width:1170px;  ">



    <div class="row" style="margin-left:30px; margin-right:30px; max-width:1120px;">



       <div class="col-sm-12">
         <!-- site logo goes here make sure it isn't too big -->
         <a href="#">
              
              <img class="img-responsive pull-left" src="<?= $theme['logo'] ?>" alt="image" width="<?= $theme['logowidth'] ?>px"  /> 
          </a>
          <!-- end site logo -->
          <nav class="main-nav" role="navigation">

          <!-- Mobile menu toggle button (hamburger/x icon) -->
          <input id="main-menu-state" type="checkbox" />
          <label class="main-menu-btn" for="main-menu-state">
            <span class="main-menu-btn-icon"></span> Toggle main menu visibility
          </label>

          <h2 class="nav-brand" style="margin-top:15px;">
           
          
      
          </h2>

          <!-- Sample menu definition -->
           <?php echo $menu; ?>
        </nav>
       </div>
       
   </div>



   </div>
</div>
    
  <!-- Actual content goes here took out wrapper -->
  <section class="scrollable " > 
    <section class="tab-content" 
      <section class="tab-pane active" id="basic">
        
        <!-- <div class="pmf-container" style="margin-left:auto; margin-right:auto;  max-width:1170px;">
          <div class="row text-muted" style="margin-left:30px; margin-right:30px;">
             <?php echo $this->uri->segment(1); ?>
          </div>
         
        </div> -->
        
          
        
            
            
        
              
  
 