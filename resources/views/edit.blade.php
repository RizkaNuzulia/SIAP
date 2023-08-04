<!DOCTYPE html>
<html>
<head>
	<title>SIAP</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit arsip</h3>
 
	<a href="/arsip"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($arsip as $a)
	<form action="/arsip/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->kode }}"> <br/>
		Kode <input type="text" required="required" name="Kode" value="{{ $a->kode }}"> <br/>
		Dokumen <input type="text" required="required" name="Dokumen" value="{{ $a->Dokumen }}"> <br/>
		Perkara <input type="text" required="required" name="Perkara" value="{{ $a->Perkara }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>