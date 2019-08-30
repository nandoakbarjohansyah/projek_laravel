@extends('layouts.app')

@section('content')


<div class="container">
<div class="card">
    <div class="card-body">

<table border="1px;" style="margin-left: 400px;">

<tr><td><p>{{$blog->nama}}</p></td></tr>
<tr><td><p>{{$blog->gelardepan}}</p></td></tr>

<tr><td>   <p>{{$blog->gelarbelakang}}</p></td></tr>

<tr><td> <p>{{$blog->tempatlahir}}</p></td></tr>

<tr><td><p>{{$blog->status}}</p></td></tr>

<tr><td><p>{{$blog->kebangsaan}}</p></td></tr>

<tr><td><p>{{$blog->notelp}}</p></td></tr>

<tr><td><p>{{$blog->email}}</p></td></tr>
<tr><td><p><img src="{{url('/storage/img/'.$blog->gambar)}} " style="width: 200px; height: 200px;"></p></td></tr>

    

 </table>
 <div style="margin-left: 400px;">
 	<button class="bg-primary"> <a href="/berhasil" style="color: white;"> cetak</a></button>
 		<button class="bg-danger"><a href="{{Route('batal',$blog->id)}}" style="color: white;">tidak</a></button>
 </div>

    </div>
</div>
</div>



@endsection