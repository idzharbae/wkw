<html>
<head>
 <title> Hihi </title> 
</head>
<body>
<form novalidate method="POST"  action='{{url("berkas/{$users}")}}' enctype="multipart/form-data" >
{{ csrf_field() }}

<div class="form-group">
    <label for="">   Book image</label>
    <input type="file" class="form-control" name="letter" id="img">
</div>
<div class="form-group">
    <label for="">   KTM</label>
    <input type="file" class="form-control" name="ktm_img1" id="img">
</div>

<div class="form-group">
    <label for="">   KTM2</label>
    <input type="file" class="form-control" name="ktm_img2" id="img">
</div>

<div class="form-group">
    <label for="">   KTM3</label>
    <input type="file" class="form-control" name="ktm_img3" id="img">
</div>

<input type="submit" name = 'submit' value = 'submit'>
</form>
</body>
</html>