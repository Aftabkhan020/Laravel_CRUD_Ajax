<!DOCTYPE html>
<html>
<head>
	<title>Student Data Entry</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>

	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	{{ csrf_field() }}

      	<!--Form start -->
      	<form id="addform">
  <div class="form-group">
    <label >Enter First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label >Enter Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label >Enter Course Name</label>
    <input type="text" class="form-control" name="course" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label >Enter Section</label>
    <input type="text" class="form-control" name="section" placeholder="Enter First Name">
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Student Data</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="studenteditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Students</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <!--Form start -->
  <form id="editformId">
  <input type="hidden" name="id" id="id">
  <div class="form-group">
    <label >Enter First Name</label>
    <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label >Enter Last Name</label>
    <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label >Enter Course Name</label>
    <input type="text" class="form-control" name="course" id="course" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label >Enter Section</label>
    <input type="text" class="form-control" name="section" id="section" placeholder="Enter First Name">
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Student Data</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>



<div class="container">
	<div class="row">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
     Student Add Data
</button>
	</div>
	<br>
	<br>
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Course</th>
      <th scope="col">Section</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($students as $student)
    <tr>
      <td>{{ $student->id }}</td>
      <td>{{ $student->fname }}</td>
      <td>{{ $student->lname }}</td>
      <td>{{ $student->course }}</td>
      <td>{{ $student->section }}</td>
      <td><button class="btn btn-success editbtn">Edit</button>
      	<button class="btn btn-danger deletebtn">Delet</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<!--Delte data Model-->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="studentdeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="deleteFromID">
          <div class="modal-body">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <input type="hidden" name="id" id="delete_id">
            <p>Are you sure !! you want to delete this data?</p>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Delete student</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>





<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  $('.deletebtn').on('click',function(){
    $('#studentdeleteModal').modal('show');
    $tr = $(this).closest('tr');
    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();
    console.log(data);
    $('#delete_id').val(data[0]);
  });
  $('#deleteFromID').on('submit',function(e){
    e.preventDefault();
    var id = $('#delete_id').val();
    $.ajax({
      type: "GET",
      url: "/studentdelete/"+id,
      data: $('#deleteFromID').serialize(),
      success: function (response) {
        console.log(response);
        $('#studentdeleteModal').modal('hide');
        alert("Data Deleted");
      },
      error: function(error){
        console.log(error);
      }
    });
  });
</script>

<script>
  $(document).ready(function(){
    $('.editbtn').on('click', function(){
      $('#studenteditmodal').modal('show');


      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();
      console.log(data);

      $('#id').val(data[0]);
      $('#fname').val(data[1]);
      $('#lname').val(data[2]);
      $('#course').val(data[3]);
      $('#section').val(data[4]);
    });

    $('#editformId').on('submit', function(e){
      e.preventDefault();
      var id = $('#id').val();
      $.ajax({
        type:"PUT",
        url:"/studentupdate/"+id,
        data: $('#editformId').serialize(),
        success: function(response){
          console.log(response);
          $('#studenteditmodal').modal('hide');
          alert("Data Updated");
        },
        error: function(error){
          console.log(error);
        }
      });
    });

  });
</script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#addform').on('submit',function(e){
			e.preventDefault();

			$.ajax({
				type: "GET",
				url: "/studentadd",
				data: $('#addform').serialize(),
				success: function (response){
					console.log(response)
					$('#studentaddmodal').modal('hide')
					alert("Data Saved");
				},
				error: function(error){
					console.log(error)
					alert("Data Not Saved");
				}
			});
		});
	});
</script>
</body>
</html>