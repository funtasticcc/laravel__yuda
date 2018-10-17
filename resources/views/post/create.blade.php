@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('post.store') }}">
      {{csrf_field()}}
   <form>
  <div class="form-row">
    <div class="col-md-4 ">
      <label for="validationDefault01">nama</label>
      <input type="text"required="required" class="form-control" id="validationDefault01" placeholder="nama" name="nama">
    </div>
    <div class="col-md-4 ">
      <label for="validationDefault02">nip</label>
      <input type="number" required="required" class="form-control" id="validationDefault02" placeholder="nip" name="nip">
    </div>
    <div class="col-md-4 ">
      <label for="validationDefaultUsername">pangkat/golongan ruang</label>
      <div class="input-group">
        <div class="input-group-prepend">
          
        </div>
        <input type="number" required="required" class="form-control" id="validationDefaultUsername" placeholder="pangkat" name="pangkat"aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="inputState">Jabata</label>
      <select id="inputState" required="required" class="form-control" name="jabatan_id">
        <option selected>Pilih Jabatan</option>
        @foreach(App\Jabatan::all() as $jabatan)
          <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">TPP maksimal</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="TPP maksimal" name="tpp">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">tahun</label>
      <input type="number" required="required" class="form-control" id="validationDefault04" placeholder="tahun" name="tahun">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">bulan</label>
      <input type="number" required="required" class="form-control" id="validationDefault05" placeholder="bulan" name="bulan">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">jumlah hari kerja</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="jumlah hari kerja" name="jumlah">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">hadir</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="hadir" name="hadir">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">izin</label>
      <input type="number" required="required" class="form-control" id="validationDefault04" placeholder="izin" name="izin">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">sakit</label>
      <input type="number" required="required"" class="form-control" id="validationDefault05" placeholder="sakit" name="sakit">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">cuti</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="cuti" name="cuti">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">tanpa alasan sah</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="alasan" name="alasan">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">terlambat</label>
      <input type="number" required="required"" class="form-control" id="validationDefault04" placeholder="terlambat" name="terlambat">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">cepat pulang</label>
      <input type="number" required="required" class="form-control" id="validationDefault05" placeholder="cepat pulang" name="pulang">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">UWAS</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="UWAS" name="uwas">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">upacara</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="upacara" name="upacara">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">wirid</label>
      <input type="number" required="required" class="form-control" id="validationDefault04" placeholder="wirid" name="wirid">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">apel</label>
      <input type="number" required="required" class="form-control" id="validationDefault05" placeholder="apel" name="apel">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">senam</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="senam" name="senam">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">SKP</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="SKP" name="skp">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">orientasi pelayanan</label>
      <input type="number" required="required" class="form-control" id="validationDefault04" placeholder="orientasi pelayanan" name="pelayanan">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">integritas</label>
      <input type="number" required="required" class="form-control" id="validationDefault05" placeholder="integritas" name="integritas">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">komitmen</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="komitmen" name="komitmen">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">disiplin</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="disiplin" name="disiplin">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">kerjasama</label>
      <input type="number" required="required" class="form-control" id="validationDefault04" placeholder="kerjasama" name="kerjasama">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">kepemimpinan</label>
      <input type="number" required="required" class="form-control" id="validationDefault05" placeholder="kepemimpinan" name="kepemimpinan">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">LKH</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="LKH" name="lkh">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">SOP</label>
      <input type="number" required="required"" class="form-control" id="validationDefault03" placeholder="SOP" name="sop">
    </div>
     <div class="col-md-3 mb-3">
      <label for="validationDefault03">title</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="title" name="title">
    </div>
     <div class="col-md-3 mb-3">
      <label for="validationDefault03">content</label>
      <input type="number" required="required" class="form-control" id="validationDefault03" placeholder="content" name="content">
    </div>
    <input type="submit"class="btn btn-primary"value="save"> 
	</div>
	</form>

 




@endsection
