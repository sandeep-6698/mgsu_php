 <div class="container table-responsive">
  <table class="table table-bordered text-center" id="dep_table">
  	<tr>
  		<th>
  		#
  		</th>
  		<th colspan="2">
  		Department Name
  		</th>
      <th>
        Description
      </th>
  		<th>
  			<a id="addDepBtn" href="<?php echo BASEPATH."Department/insert" ?>"><span class="glyphicon glyphicon-plus-sign"> Add New</span></a>
  		</th>
  	</tr>
   <?php $count=1; 
   foreach ($this->dep_data as $data) 
 {?>
 	<tr>
 		<td>
 			<?=$count++?>
 		</td>
 		<td>
 			<img src="<?php echo BASEPATH."public/img/".$data['dep_img_name']?>" alt="<?=$data['dep_name'];?>" style="width:60px; height: 40px">
 		</td>
 		<td><p><?=$data['dep_name'];?></p></td>
    <td>
      <?php if(!$data['dep_description']):echo "No Description";else: echo $data['dep_description'];endif;?>
    </td>
 		<td>
 			<a href="<?=BASEPATH."Department/edit/".$data['id'];?>"><span class="glyphicon glyphicon-pencil" style="font-size: 20px; color: yellow"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 			 <a onclick="return depDel();" href="<?=BASEPATH."Department/delete/".$data['id'];?>"><span class="glyphicon glyphicon-trash" style="font-size: 20px; color: red"></span></a>
 		</td>
 	</tr>
 <?php }?>
  </table>
  </div>