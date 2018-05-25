<html>
<head>
 <title> Guest Book </title> 
</head>
<body>
 <h2>Guest Book </h2>
 <form method = 'POST' action = '{{ url("/daftar/{$users}") }}'>
  {{csrf_field()}}
 <table>
 <tr>
  <td> Nama Anggota</td>
  <td> <input type = 'text' name = 'member_one' /> </td>
  </tr>

   <tr>
  <td> Nama Anggota</td>
  <td> <input type = 'text' name = 'member_two' /> </td>
  </tr>
  
  <tr>
  <td> Nama Anggota</td>
  <td> <input type = 'text' name = 'member_three' /> </td>
  </tr>
  
  <tr>
  <td> Asal Sekolah</td>
  <td> <input type = 'text' name = 'school' /> </td>
  </tr>

  <tr>
  <td> Provinsi Sekolah</td>
  <td> <input type = 'text' name = 'province' /> </td>
  </tr>
  
  <tr>
  <td> ID Line</td>
  <td> <input type = 'text' name = 'line_id' /> </td>
  </tr>

  <tr>
  <td> Nomor HP</td>
  <td> <input type = 'text' name = 'phone_num' /> </td>
  </tr>
  
  <input type='hidden' name='tipe' value="apps" /> 
 <tr>
 <td><input type = 'submit' name = 'submit' value = 'comment'/> </td>
 </tr>

</table>
</form>
</body>
</html>