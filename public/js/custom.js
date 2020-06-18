function scourse(dep_id)
	{
		$('#course').html('loading...');
		$.ajax({
			url:BASEPATH+"Upload/getCourse",
			data:"dep_id="+dep_id,
			type:'post',
			success:function(r){
				$('#course').html(r);
			}
		});
	}
	function subject(sem,course_id)
	{
		$.ajax({
			url:BASEPATH+"Upload/getSubject",
			data:"course_id="+course_id+"&sem="+sem,
			type:'post',
			success:function(r){
				$('#sub').html(r);
			}
		});
	}
	$(document).ready(function()
	{
		//var x=document.getElementsByTagName('input');	
		var course=$("#course")
		var addBtn=$("#addBtn");
		var c_num = 0;
		$(addBtn).click(
			function(e)
			{
				e.preventDefault();
				$(course).append(`<div class="course_boxes"><input type="text" class="form-control" name="course${c_num}[]" placeholder="Enter youre course" required>
						<input type="radio" name="course${c_num}[]" value="1" class="form-check-input">yearly
						<input type="radio" name="course${c_num}[]" value="0" class="form-check-input">Semester
						<input type="number" name="course${c_num}[]" placeholder="Enter number of Year/Semester" class="form-control">
						<a href="#" class="delBtn" id="delBtn">Delete</a></div>`);
			c_num+=1;
			}
			)
		$("#course").on("click","#delBtn",function(e){
			e.preventDefault();
			$(this).parent('div').remove();
		})
	}
	);

function del()
{
	if(confirm("Do you realy want to delete this data!"))
	{
		return true;
	}
	return false;
}
function depDel()
{
	if(confirm("Do you realy want to delete this data!"))
	{
		if(confirm("You lost the all data about this department"))
		{
			return true;
		}
		return false;	
	}
	return false;
}
function delMulti(data) {
if(confirm("Do you realy want to delete this data!"))
	{
		alert(data);
		return true;
	}
	return false;
	
}

function getSem(course)
	{
		//alert(course.value);
		var count = 1;
		var looCounter;
		var name="Semester";
		var x='';;
		$.ajax({
			url:BASEPATH+"Download/getSem",
			data:"course_id="+course.value,
			type:'post',
			success:function(r){
				var data = r.split(',');
				if(data[0]!=0)
				{
					name="Year";
					x=1;
				}
				loopCounter=data[1];
				$('#sem').empty();
				for(count;count<=loopCounter;count++){
				$('#sem').append(`<option value="${x+''+count}">${name+"-"+count}</option>`);
				}
			}
		});
	}
	
	$(document).ready(function(){  
		var i=1;  
		$('#add').click(function(){  
			 i++;  
			 $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="sub_name[]" placeholder="Enter your Subject" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
		});  
		$(document).on('click', '.btn_remove', function(){  
			 var button_id = $(this).attr("id");   
			 $('#row'+button_id+'').remove();  
		});
   });  
	function addsub(id) {
		var subdiv = "sub"+id;
		$('#'+subdiv).append(`<input type="text" class="form-control" name="sem${id}[]">`);
		return false;
	}  
	var unameStatus=0;
	var passStatus=0;
	var mobStatus=0;
	var confStatus=0;
	function validUname(data)
	{
		if(data.value==data.value.match(/[A-z0-9@._-]{6,30}/))
		{
			data.style.borderColor='lightblue';
			unameStatus = 1;
			return;
		}
		data.style.borderColor='red';
		unameStatus = 0;
	}
	function validPass(data)
	{
		if(data.value==data.value.match(/[A-z0-9@#$-_]{6,15}/))
		{
			data.style.borderColor='lightblue';
			passStatus=1;
			return;
		}
		data.style.borderColor='red';
		passStatus=0;
	}
	function validMob(data)
	{
		if(data.value==data.value.match(/[0-9]{10}/))
		{
			data.style.borderColor='lightblue';
			mobStatus=1;
			return;
		}
		data.style.borderColor='red';
		mobStatus=0;
	}

	function confPass(confPass,Pass)
	{
		if(confPass!=Pass){
			$('#confMsg').html("Password not match!");
			confStatus=0;
			}
		else
			{
			$('#confMsg').html('');
			confStatus=1;
			}
	}
	function validStatus()
	{
		if(unameStatus && passStatus && mobStatus && confStatus)
		{
			return true;
		}
		else
		return false;
	}
	function validate()
	{
		var uname = document.getElementById('username');
		var pass = document.getElementById('password');
		
		if(-1<uname.value.search(/[!`~%^&*()+=|?><,.;:'"]/))
		{
			uname.style.borderColor="red";
			unameStatus=0;
		}
		else
		{
		uname.style.borderColor="lightblue";
		unameStatus=1;
		}
		if(-1<pass.value.search(/[!`~%^&*()+=|?><,.;:'"]/))
		{
			pass.style.borderColor="red";
			passStatus=0;
		}
		else{
		pass.style.borderColor="lightblue";
		passStatus=1;
		}
		if(unameStatus && passStatus)
		{
			return true;
		}
		else
		return false;
	}

	function validUpdateStatus()
	{
		if(confStatus)
		{
			return true;
		}
		return false;
	}