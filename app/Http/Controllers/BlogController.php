<?php

namespace App\Http\Controllers;
use App\Blog;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog = Blog::all();
        return view('blog.home',['blog' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $blog = new Blog;
       $blog->jenis= $request->jenis;
       $blog->kategori = $request->kategori;
       $blog->nama = $request->nama;
       $blog->gelardepan = $request->gelardepan;
       $blog->gelarbelakang = $request->gelarbelakang;
       $blog->tempatlahir = $request->tempatlahir;
       $blog->status = $request->status;
       $blog->kebangsaan = $request->kebangsaan;
       $blog->notelp = $request->notelp;
       $blog->email = $request->email;
       $img=$request->gambar->store('public/img');
       $blog->gambar = basename($img);

       $blog->save();
       $cekblog = Blog::orderBy('id', 'desc')->first();
       // $cekblog
       return redirect(Route('details',$cekblog));
       // return r;
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response



     */
    public function show($id)
    {
        //
     $blog = Blog::find($id);
     return view('details',['blog' => $blog]);
 }


 public function delete($id)
 {
    $blog = Blog::destroy($id);
    return redirect('/admin');

}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $blog = Blog::find($id);
       return view ('blog.edit',['blog' => $blog]);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       $blog =Blog::find($id);
       $blog->jenis= $request->jenis;
       $blog->kategori = $request->kategori;
       $blog->nama = $request->nama;
       $blog->gelardepan = $request->gelardepan;
       $blog->gelarbelakang = $request->gelarbelakang;
       $blog->tempatlahir = $request->tempatlahir;
       $blog->status = $request->status;
       $blog->kebangsaan = $request->kebangsaan;
       $blog->notelp = $request->notelp;
       $blog->email = $request->email;
       $img=$request->gambar->store('public/img');
       $blog->gambar = basename($img);
       
       $blog->save();
       return redirect('/admin');


   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $blog =Blog::find($id);
      $blog->delete();
      return redirect('/homee');


    }
}
