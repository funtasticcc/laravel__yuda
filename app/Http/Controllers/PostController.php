<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
	public function index()
    {

        $posts = Post::all();

        return view('post.index',compact('posts'));
    }
    

  
 public function create()
{
	return view('post.create');
}
 

 public function store()
    {

        $pegawai = Post::create([
          'title'=> request('title'),
          'content'=> request('content'),
          'nama'=> request('nama'),
          'nip'=> request('nip'),
          'pangkat'=> request('pangkat'),
          'jabatan_id'=> request('jabatan_id'),
          'tpp'=> request('tpp'),
          'tahun'=> request('tahun'),
          'bulan'=> request('bulan'),
          'jumlah'=> request('jumlah'),
          'hadir'=> request('hadir'),
          'izin'=> request('izin'),
          'sakit'=> request('sakit'),
          'cuti'=> request('cuti'),
          'alasan'=> request('alasan'),
          'terlambat'=> request('terlambat'),
          'pulang'=> request('pulang'),
          'uwas'=> request('uwas'),
          'upacara'=> request('upacara'),
          'wirid'=> request('wirid'),
          'apel'=> request('apel'),
          'senam'=> request('senam'),
          'skp'=> request('skp'),
          'pelayanan'=> request('pelayanan'),
          'integritas'=> request('integritas'),
          'komitmen'=> request('komitmen'),
          'disiplin'=> request('disiplin'),
          'kerjasama'=> request('kerjasama'),
          'kepemimpinan'=> request('kepemimpinan'),
          'lkh'=> request('lkh'),
          'sop'=> request('sop'),
        ]);

        $pegawai->tunjangan()->create(['max_tpp' => $pegawai->tpp_bulan_ini()]);
    return redirect('/hasil');
    }

  
  public function edit($id)
      {
        $post=Post::find($id);
      return view('post.edit',compact('post'));
}

  public function update($id)
    {
      $post=Post::find($id);
    $post->update([
    'title'=> request('title'),
    'content'=> request('content'),


     ]);
    return redirect('/post');
    }

  public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect('/post');
    }
}


