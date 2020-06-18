
<div class="container-fluid" style="padding:5px">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo BASEPATH."public/img/history.jpeg"?>" alt="" style="width:100%; height:300px;">
      </div>

      <div class="item">
        <img src="<?php echo BASEPATH."public/img/cs.jpeg"?>" alt="" style="width:100%;height:300px;">
      </div>
    
      <div class="item">
        <img src="<?php echo BASEPATH."public/img/es.jpeg"?>" alt="" style="width:100%;height:300px;">
      </div> 

    <div class="item">
        <img src="<?php echo BASEPATH."public/img/ys.jpeg"?>" alt="" style="width:100%;height:300px;">
      </div> 

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container-fluid">
<div class="row">
 <?php 
 foreach ($this->dep_info as $data) 
 {?>
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 ">
     <div class="thumbnail">
      <a href="<?php echo BASEPATH."Download/form/".$data['id']?>">
        <img src="<?php echo BASEPATH."public/img/".$data['dep_img_name']?>" alt="<?=$data['dep_name'];?>" style="width:100%; height: 200px">
        <div class="caption">
          <p><?=$data['dep_name'];?></p>
        </div>
      </a>
    </div>
  </div>
  <?php  }
  ?>
  </div>
  </div>
