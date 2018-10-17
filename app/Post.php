<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable = [
        'nama', 'nip', 'pangkat', 'jabatan_id', 'tpp', 'tahun', 'bulan', 'jumlah', 'hadir', 'izin', 'sakit', 'cuti', 'alasan', 'terlambat', 'pulang', 'uwas', 'upacara', 'wirid', 'apel', 'senam', 'skp', 'pelayanan', 'integritas', 'komitmen', 'disiplin', 'kerjasama', 'kepemimpinan', 'lkh', 'sop','title', 'content', 'user_id'
    ];

    public function user(){
    	return $this->belongsTo(User);
    }

    public function jabatan(){
    	return $this->belongsTo(Jabatan::class);
    }

    public function tunjangan() {
    	return $this->hasMany(Tpp::class, 'post_id', 'id');
    }

    public function max_tpp(){
    	return $this->jabatan->max_tpp;
    }

    public function tpp_bulan_ini(){
		return $this->kehadiran() + $this->kinerja();
	}


	public function kehadiran(){
		$max_tpp = $this->max_tpp();
		$tanpa_alasan = (int)$this->alasan;
		$izin = (int)$this->izin;
		$terlambat = (int)$this->terlambat;
		$pulang_cepat = (int)$this->pulang;
		
		return 0.3 * $max_tpp - ((0.05 * $tanpa_alasan) + (0.03 * $izin) + (0.03 * (( $terlambat + $pulang_cepat) / 300))) * 0.3 * $max_tpp;
	}

	public function kinerja() {
		$max_tpp = $this->max_tpp();
		$prestasi_kerja = $this->prestasi_kerja();
		$sop = $this->sop;
		
		return 	(0.7 * ((int)$prestasi_kerja / 100) * 0.7 *  $max_tpp) + (0.2 * ((int)$this->lembar_kerja_harian/100) * 0.7 * $max_tpp) + (0.1 * ((int)$sop/100));
	}

	public function prestasi_kerja(){
		return (0.6 * $this->sasaran_kinerja()) + (0.4 * $this->perilaku_kerja());
	}

	public function sasaran_kinerja(){
		$skp = 25;
		if ((int)$this->skp >= 76){
			$skp = 100;
		} else if(51 <= (int)$this->skp && (int)$this->skp < 76 ){
			$skp = 76;
		} else if (26 <= (int)$this->skp && (int)$this->skp < 51) {
			$skp = 50;
		}
		return $skp;
	}

	public function perilaku_kerja(){
	 	return (0.2 * (int)$this->pelayanan) + (0.2 * (int)$this->integritas) + (0.2 * $this->komitmen()) + (0.2 * $this->disiplin()) + (0.1 * (int)$this->kerjasama) + (0.1 * (int)$this->kepemimpinan);
	}


	public function disiplin(){
		return (int)$this->hadir / (int)$this->jumlah * 100;
	}

	public function komitmen(){
		return ((int)$this->upacara + (int)$this->wirid + (int)$this->apel + (int)$this->senam) / (int)$this->uwas * 100;
	}

}

