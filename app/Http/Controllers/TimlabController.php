<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use catalog;
use solusi;
use Mail;
use feed;
use layanan;
use topic;
use beli;

class TimlabController extends Controller
{
    
    // BERANDA & TOPIK
    
    public function index()
    {
        $layanan = \App\Models\layanan::all();
        return view('timlab.index',['layanan' => $layanan]);
    }
    
    public function topic()
    {
        $topic = \App\Models\topic::all();
        return view('timlab.topic',['topic' => $topic]);
    }
    
    // SISTEM ANTENNA
    
    public function sistem_antenna()
    {
        $catalog = \App\Models\catalog::all();
        return view('timlab.sistem_antenna.sistem_antenna',['catalog' => $catalog]);
    }
    
    public function tambah_sistem_antenna()
    {
        return view('timlab.sistem_antenna.tambah_sistem_antenna');
    }
    
    public function store_antenna(Request $request,$name)
    {
        \App\Models\catalog::create([
            'name' => $name,
            'id_barang' => $request->id_barang,
            'nama_barang' => $request->get('nama_barang'),
            'foto_barang' => $request->file('foto_barang')->getClientOriginalName(),
            'stok' => $request->get('stok'),
            'manual' => $request->file('manual')->getClientOriginalName()
        ]);
        
        // foto
        $file_foto = $request->file('foto_barang');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload_gambar = asset('E:\Project Web\TimlabWeb\public\assets\images\catalog');
        
        // upload file
        $file_foto->move('E:\Project Web\TimlabWeb\public\assets\images\catalog',$file_foto->getClientOriginalName());

        // manual
        $file_manual = $request->file('manual');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload_manual = asset('E:\Project Web\TimlabWeb\public\assets\manual');
        
        // upload file
        $file_manual->move('E:\Project Web\TimlabWeb\public\assets\manual',$file_manual->getClientOriginalName());

        return redirect('/sistem_antenna')->with('toast_success','Data Berhasil Ditambah!');
    }

    public function edit_sistem_antenna($id_barang)
    {
        $catalog = \App\Models\catalog::find($id_barang);
        return view('timlab.sistem_antenna.edit_sistem_antenna',['catalog' => $catalog]);
    }

    public function update_antenna(Request $request,$id_barang,$name)
    {
        $catalog = \App\Models\catalog::find($id_barang);
        $catalog->update($request->all());

        if($request->hasFile('foto_barang')){

            $request->file('foto_barang')->move('E:\Project Web\TimlabWeb\public\assets\images\catalog',$request->file('foto_barang')->getClientOriginalName());
            $catalog->foto_barang = $request->file('foto_barang')->getClientOriginalName();
            $catalog->save();

        }

        if($request->hasFile('manual')){

            $request->file('manual')->move('E:\Project Web\TimlabWeb\public\assets\manual',$request->file('manual')->getClientOriginalName());
            $catalog->manual = $request->file('manual')->getClientOriginalName();
            $catalog->save();

        }

        return redirect('/sistem_antenna')->with('toast_success','Data Berhasil Diedit');
    }

    public function hapus_sistem_antenna($id_barang)
    {
        $catalog = \App\Models\catalog::where('id_barang',$id_barang)->first();

        if ($catalog != null) {
            $catalog->delete();
        }

        return redirect('/sistem_antenna')->with('toast_success','Data Berhasil Dihapus');
    }

    public function beli()
    {
        return view('pesanan.beli');
    }

    public function store_beli(Request $request,$nama_barang)
    {
        \App\Models\beli::create([
            'nama_barang' => $nama_barang,
            'id_beli' => $request->get('id_beli'),
            'name' => $request->get('name'),
            'jumlah' => $request->get('jumlah'),
            'email' => $request->get('email'),
            'tlp' => $request->get('tlp')
        ]);
        Mail::send('ordermail.ordermailbeli',[
            'nama_barang' => $nama_barang,
            'id_beli' => $request->id_beli,
            'name' => $request->name,
            'jumlah' => $request->jumlah,
            'email' => $request->email,
            'tlp' => $request->tlp
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS',$request->name));
            $mail->to("achmadnukmanjaza098@gmail.com")->subject('Contact Us Message');  
        });
        return redirect('/sistem_antenna')->with('toast_success','Pesanan Berhasil Ditambah!');
    }

    // SISTEM SOLUSI
    
    public function sistem_solusi()
    {
        $solusi = \App\Models\solusi::all();
        return view('timlab.sistem_solusi.sistem_solusi',['solusi' => $solusi]);
    }

    public function tambah_sistem_solusi()
    {
        return view('timlab.sistem_solusi.tambah_sistem_solusi');
    }
    
    public function store_solusi(Request $request,$name)
    {
        \App\Models\solusi::create([
            'name' => $name,
            'id_solusi' => $request->id_barang,
            'solusi' => $request->get('solusi'),
            'foto_solusi' => $request->file('foto_solusi')->getClientOriginalName()
        ]);
        
        // foto
        $file_foto = $request->file('foto_solusi');
        
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload_gambar = asset('E:\Project Web\TimlabWeb\public\assets\images\solusi');
        
        // upload file
		$file_foto->move('E:\Project Web\TimlabWeb\public\assets\images\solusi',$file_foto->getClientOriginalName());
        
        return redirect('/sistem_solusi')->with('toast_success','Data Berhasil Ditambah!');
    }
    
    public function edit_sistem_solusi($id_solusi)
    {
        $solusi = \App\Models\solusi::find($id_solusi);
        return view('timlab.sistem_solusi.edit_sistem_solusi',['solusi' => $solusi]);
    }

    public function update_solusi(Request $request,$id_solusi,$name)
    {
        $solusi = \App\Models\solusi::find($id_solusi);
        $solusi->update($request->all());
        
        if($request->hasFile('foto_solusi')){
            
            $request->file('foto_solusi')->move('E:\Project Web\TimlabWeb\public\assets\images\solusi',$request->file('foto_solusi')->getClientOriginalName());
            $solusi->foto_solusi = $request->file('foto_solusi')->getClientOriginalName();
            $solusi->save();
            
        }
        
        return redirect('/sistem_solusi')->with('toast_success','Data Berhasil Diedit');
    }
    
    public function hapus_sistem_solusi($id_solusi)
    {
        $solusi = \App\Models\solusi::where('id_solusi',$id_solusi)->first();

        if ($solusi != null) {
            $solusi->delete();
        }

        return redirect('/sistem_solusi')->with('toast_success','Data Berhasil Dihapus');
    }
    
    // LAYANAN
    
    public function layanan()
    {
        $layanan = \App\Models\layanan::all();
        return view('timlab.layanan',['layanan' => $layanan]);
    }

    public function beli_custom()
    {
        return view('pesanan.beli_custom');
    }

    public function store_beli_custom(Request $request)
    {
        \App\Models\order::create([
            'id_order' => $request->get('id_order'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'tlp' => $request->get('tlp'),
            'barang_order' => $request->get('barang_order')
        ]);
        Mail::send('ordermail.ordermailbelicustom',[
            'id_order' => $request->id_order,
            'name' => $request->name,
            'email' => $request->email,
            'tlp' => $request->tlp,
            'barang_order' => $request->barang_order
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS',$request->name));
            $mail->to("achmadnukmanjaza098@gmail.com")->subject('Contact Us Message');  
        });
        return redirect('/layanan')->with('toast_success','Pesanan Berhasil Ditambah!');
    }

    // TENTANG KAMI

    public function tentang_kami()
    {
        return view('timlab.tentang_kami');
    }

    public function store_komen(Request $request)
    {
        \App\Models\feed::create([
            'id_komen' => $request->get('id_komen'),
            'nama_depan' => $request->get('nama_depan'),
            'nama_belakang' => $request->get('nama_belakang'),
            'email' => $request->get('email'),
            'tlp' => $request->get('tlp'),
            'komen' => $request->get('komen')
        ]);
        Mail::send('ordermail.ordermailkomen',[
            'id_komen' => $request->id_komen,
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'email' => $request->email,
            'tlp' => $request->tlp,
            'komen' => $request->komen
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS',$request->name));
            $mail->to("achmadnukmanjaza098@gmail.com")->subject('Contact Us Message');  
        });
        return redirect('/tentang_kami')->with('toast_success','Komentar Berhasil Ditambah!');
    }

    // PESANAN

    public function pesanan()
    {
        $beli = \App\Models\beli::all();
        $order = \App\Models\order::all();
        return view('pesanan.pesanan',['beli' => $beli, 'order' => $order]);
    }
    public function edit_status($id_beli)
    {
        $beli = \App\Models\beli::find($id_beli);
        return view('pesanan.edit_status',['beli' => $beli]);
    }
    public function update_beli(Request $request,$id_beli)
    {
        $beli = \App\Models\beli::find($id_beli);
        $beli->update($request->all());

        return redirect('/pesanan')->with('toast_success','Status Berhasil Diedit');
    }
    public function edit_status_custom($id_order)
        {
            $order = \App\Models\order::find($id_order);
            return view('pesanan.edit_status_custom',['order' => $order]);
        }
    public function update_custom(Request $request,$id_order)
    {
        $order = \App\Models\order::find($id_order);
        $order->update($request->all());

        return redirect('/pesanan')->with('toast_success','Status Berhasil Diedit');
    }
}
