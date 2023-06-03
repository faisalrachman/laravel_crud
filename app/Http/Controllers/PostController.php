<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('add-blog-post-form');
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->nim = $request->nim;
        $post->nama = $request->nama;
        $post->umur = $request->umur;
        $post->alamat = $request->alamat;
        $post->kota = $request->kota;
        $post->kelas = $request->kelas;
        $post->jurusan = $request->jurusan;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
