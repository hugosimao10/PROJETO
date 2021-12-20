<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

@foreach($estados as $key => $data)
<table>
    <tr>
      <th>{{$data->id_estado}}</th>
      <th>{{$data->descricao}}</th>
    </tr>
    <table>
@endforeach

</body>
</html>
