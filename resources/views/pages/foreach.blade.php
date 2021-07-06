@extends('master')
@section('content')
<h1>Authors of the site:</h1>
@if(count($people))
<ul>
    @foreach($people as $person)
    <li><?php echo $person;?></li>
    @endforeach
</ul>
@endif
@endsection


