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

    
    <link href='<?php echo (base_url()."resources")?>/fullcalendar/fullcalendar.css' rel='stylesheet' />
    
    <link href='<?php echo (base_url()."resources")?>/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='<?php echo (base_url()."resources")?>/fullcalendar/lib/moment.min.js'></script>
    <script src='<?php echo (base_url()."resources")?>/fullcalendar/lib/jquery.min.js'></script>
    <script src='<?php echo (base_url()."resources")?>/fullcalendar/fullcalendar.min.js'></script>





    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/font.css" type="text/css" cache="false">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/js/fuelux/fuelux.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/js/datatables/datatables.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/js/datepicker/datepicker.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/js/nestable/nestable.css" type="text/css" cache="false" />
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/plugin.css" type="text/css">
    <link rel="stylesheet" href="<?php echo (base_url()."resources")?>/css/app.css" type="text/css">
    

    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
 
 
    

    <!--[if lt IE 9]>
    <script src="<?php echo (base_url()."resources")?>/js/ie/respond.min.js" cache="false"></script>
    <script src="<?php echo (base_url()."resources")?>/js/ie/html5.js" cache="false"></script>
    <script src="<?php echo (base_url()."resources")?>/js/ie/fix.js" cache="false"></script>
  <![endif]-->


  
    <style type="text/css">

/*fullcalendar styling*/
.fc-widget-header {
        background-color: #fff;
    }
    .fc-agendaWeek-view tr {
        height: 30px;
    }
    .fc-agendaDay-view tr {
        height: 30px;
    }
    .fc-unthemed td.fc-today {
        background: #ccc;
    }
    .popover {
        width: 600px;
        height: 250px;
        z-index: 10000;
    }
    .tooltiptopicevent {
        width: auto;
        height: auto;
        background: #fff7e0;
        position: absolute;
        z-index: 10001;
        padding: 10px 10px 10px 10px;
        line-height: 200%;
        border: 1px solid #b9b9b9;
        box-shadow: 0px 4px 11.05px 1.95px rgba(0, 0, 0, 0.37);
        border-radius: 5px;
    }


    /* test to style individual events*/
    .blue{
        background-color: #A6DBFE;
        border-left: 4px solid #2196f3;
    }

    .red{
        background-color: #FCADAD;
        border-left: 4px solid #F20D0D;
    }

    .green{
        background-color: #C9FFC6;
        border-left: 4px solid #33B045;
    }

    .orange{
        background-color: #F9D98C;
        border-left: 4px solid #F2AF0D;
    }

    .purple{
        background-color: #DEA7E2;
        border-left: 4px solid #8D3193;
    }

/*end full calendar styling*/


/*for the datatable pagination*/
    
    .paginate_disabled_previous {
        margin-top: 5px;
        padding: 5px;
        color: #ffffff;
        border-radius: 2px;
        background-color: #<?php echo $theme['color']; ?>;
        border: 1px solid;
        border-color: #<?php echo $theme['color']; ?>;
        font-weight: bold;
        font-size: 12px;
        cursor: pointer;
    }
    
    .paginate_enabled_previous {
        margin-top: 5px;
        padding: 5px;
        color: #ffffff;
        border-radius: 2px;
        background-color: #<?php echo $theme['color']; ?>;
        border: 1px solid;
        border-color: #<?php echo $theme['color']; ?>;
        font-weight: bold;
        font-size: 12px;
        cursor: pointer;
    }
    
    .paginate_disabled_next {
        margin-top: 5px;
        margin-left: 5px;
        padding: 5px;
        color: #ffffff;
        border-radius: 2px;
        background-color: #<?php echo $theme['color']; ?>;
        border: 1px solid;
        border-color: #<?php echo $theme['color']; ?>;
        font-weight: bold;
        font-size: 12px;
        cursor: pointer;
    }
    
    .paginate_enabled_next {
        margin-top: 5px;
        margin-left: 5px;
        padding: 5px;
        color: #ffffff;
        border-radius: 2px;
        background-color: #<?php echo $theme['color']; ?>;
        border: 1px solid;
        border-color: #<?php echo $theme['color']; ?>;
        font-weight: bold;
        font-size: 12px;
        cursor: pointer;
    }
    
    .dataTables_length {
        padding: 5px;
        max-width: 200px;
        float: left;
    }

    .odd{
        background-color: #f5f5f5;
    }

    .m-edit{
        margin-top: 5px;
        margin-left: 5px;
        padding: 5px;
        color: #ffffff;
        border-radius: 2px;
        background-color: #<?php echo $theme['color']; ?>;
        border: 1px solid;
        border-color: #<?php echo $theme['color']; ?>;
        font-weight: bold;
        font-size: 12px;
        cursor: pointer;


    }
    .m-delete{
        margin-top: 5px;
        margin-left: 5px;
        padding: 5px;
        color: #ffffff;
        border-radius: 2px;
        background-color: #<?php echo $theme['color']; ?>;
        border: 1px solid;
        border-color: #<?php echo $theme['color']; ?>;
        font-weight: bold;
        font-size: 12px;
        cursor: pointer;

    }

/*end datatable styling*/


    
.f{
  
  height:54px;
  border-radius: 0px;
  margin: 0 auto;
  border: 1px solid #b9b9b9;
  box-shadow: 0px 4px 11.05px 1.95px rgba(0, 0, 0, 0.17);
  
}

.shade-b{


  border-radius: 0px;
  margin: 0 auto;
  border-left: 1px solid #b9b9b9;
  border-right: 1px solid #b9b9b9;
  border-bottom: 1px solid #b9b9b9;
  box-shadow: 0px 4px 11.05px 1.95px rgba(0, 0, 0, 0.17);
  

}


.shade-t{


  border-radius: 0px;
  margin: 0 auto;
  border-left: 1px solid #b9b9b9;
  border-right: 1px solid #b9b9b9;
  border-top: 1px solid #b9b9b9;
  box-shadow: 0px 4px 11.05px 1.95px rgba(0, 0, 0, 0.17);
  

}


/*styling for the breadcrumb*/
.breadcrumb
{

font-size: 14px;
 border-radius: 0px;
  margin: 0 auto;
  border: 1px solid #b9b9b9;
  
  box-shadow: 0px 4px 11.05px 1.95px rgba(0, 0, 0, 0.17);
  margin-bottom: 30px;


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
    border-left: solid 1px #666;
    border-right: solid 1px #666;



}

.bord-b{
     border-bottom: solid 1px #666;
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


.m-l{
    margin-left: 30px;
}





 







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
            background-color: #<?php echo $theme['bgcolor']; ?>;
            font-family: 'Varela Round', sans-serif;
            font-size: 14px;
            line-height: 1.8em;
            color: #222;
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
            font-size: 16px;

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
            
            /*text-decoration: underline;*/
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
<body>
  <section class="hbox stretch">
    <!-- .aside -->
    <aside class="bg-black aside-sm" id="nav">
      <section class="vbox">
        <header class="dker nav-bar">
          <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
            <i class="fa fa-bars"></i>
          </a>
          <a href="#" class="nav-brand" data-toggle="fullscreen">coddl</a>
          
        </header>
        <section>
   
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              

                <?php foreach ($multiples["menuitems"] as $key) : ?>
                    


                    <li>
                        <a href="<?= $key["url"] ?>">
                          <i class="fa <?= $key["icon"]; ?>"></i>
                          <span><?= $key["name"] ?></span>
                        </a>
                      </li>  
                  <?php endforeach; ?>



                          
             
             
              
            </ul>
          </nav>
        </section>
        
      </section>
    </aside>
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
        <header class="header b-b bg-white">
          <div class="input-group input-s pull-right m-t-sm" style="margin-top:40px;">
            <span class="input-group-addon input-sm"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control input-sm" id="search-note" placeholder="search">
          </div>
           <img class="img-responsive" src="<?= $theme['logo']; ?>" alt="image" />
           <div class="m-l">Welcome back <b><?php echo my_username(); ?></b></div>
        </header>
        <section class="scrollable wrapper">          
          
      