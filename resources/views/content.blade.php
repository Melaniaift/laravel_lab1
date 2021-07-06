@extends('master')
@section('content')
<!--
<h1>About <?php echo $nume." ".$prenume;?></h1>
<p>bla bla...............</p>
-->
@if(($nume=='Popescu')&&($prenume=='Bogdan'))
<h1>About <?php echo $nume." ".$prenume;?></h1>
@else
<h1>bau bau!</h1>
@endif
<p>bla bla...............</p>
@endsection

@section('footer')
<script> alert('Alert script from contact page!');</script>
@stop
