@extends('layouts.app')

@section('content')
<div class="container mt-5"  >
    <!-- <a href="{{route('admin.index')}}" class="btn btn-primary mb-3">Create POST</a> -->
    
       
            <h1 class="text-center">Admin </h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">jenis</th>
                        <th scope="col">kategori</th>
                        <th scope="col">nama</th>
                        <th scope="col">gelar depan</th>
                        <th scope="col">gelar belakang</th>
                           <th scope="col">tempat lahir</th>
                            <th scope="col">status</th>
                            <th scope="col">kebangsaan</th>
                            <th scope="col">no telpon</th>
                            <th scope="col">email</th>
                            <th scope="col">gambar</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($blog as $blog)
                    <tr>
                        <th >{{$blog->jenis}}</th>
                        <td >{{$blog->kategori}}</td>
                        <td style=' white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 75ch;'>{{$blog->nama}}</td>
                        <td >{{$blog->gelardepan}}</td>
                        <th >{{$blog->gelarbelakang}}</th>
                        <th >{{$blog->tempatlahir}}</th>
                       <th >{{$blog->status}}</th>
                       <th >{{$blog->kebangsaan}}</th>
                       <th >{{$blog->notelp}}</th>
                       <th >{{$blog->email}}</th>

                       <th ><img src="/storage/img/{{$blog->gambar}}" style="width: 100px;height:100PX; "></th>
                       <td>
                        <a href="{{route('delete',$blog->id)}}" class="btn btn-danger">Delete</a> 
                        <a href="{{route('edit',$blog->id)}}" class="btn btn-primary"  >Edit</a> 
                        <a href="{{route('details',$blog->id)}}" class="btn btn-primary"> View</a> 
                    </td>
                     

                        @endforeach

                    </tbody>

            
                       
                       

                        
        




            </table>

        </div>
   



@endsection