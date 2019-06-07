<form action="{{route('postForm')}}" method="post">
	{{csrf_field()}}
	Tên: <input type="test" name="HoTen">
	<br>
	Tuổi: <input type="test" name="Tuoi">
	<input type="submit">
</form>