<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
.table {
    width: auto;
    border: 3px;
    border-style: double;
    box-shadow: 5px 5px 5px 5px #888888;
    radius: 10px;
}
</style>
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
<?php
echo "<hr />";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <div class="card pt-3 px-3">
            <div class="alert alert-success p-3 mb-2 bg-gradient-info text-white" role="alert"> 
    <h4 class="text-center text-secondary fw-bolder">Daftar Pengisian Form</h4>
<table class="table table-primary table-striped table-hover table-bordered">
<hr/>
  <tr class="text-center">
    <td> ID </td>
    <td> TITLE </td>
    <td> DESCPRIPTION </td>
    <td> ACTION </td>
  </tr>
  <?php
  foreach($data as $dt) {
  ?>
    <tr>
				<td class="text-center"><?php echo $dt->id; ?></td>
				<td><?php echo $dt['title']; ?></td>
				<td><?php echo $dt['description']; ?></td>
				<td class="text-center">
        <a href="/delete/{{ $dt->id }}" class="btn btn-danger">Hapus</button>
        <a href="/edit/{{ $dt->id }}" class="btn btn-primary">Edit</button>
  </form>
				</td>
			</tr>
<?php
  }
?>
  </table>
</div>
</body>
</html>