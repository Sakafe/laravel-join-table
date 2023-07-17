<h1>All patients Data.</h1>
@foreach ($patients as $data )
    <h3>Id:{{$data->id}}</h3>
    <h3>Name:{{$data->name}}</h3>
    <h3>Email:{{$data->email}}</h3>
    <h3>Age:{{$data->age}}</h3>
    <h3>city-name:{{$data->city_name}}</h3>
@endforeach
