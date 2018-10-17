@extends('layouts.app')

@section('content')
 <section class="content-header">
    <h1></h1>
    <ol class="breadcrumb">
      <li class="active">Home</li>
      <li></li>
    </ol>
  </section>

  <section class="content">

    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            tampilan nilai tambah penghasilan pegawai
          </div>

          <div class="box-body">

            <ul class="nav nav-stacked">
              <li>
                TPP bulan ini
                <span class="pull-right">
                  {{App\Post::find(2)->tunjangan }}
                </span>
              </li>
              <ul class="nav nav-stacked">
              <li>
                kehadiran
                <span class="pull-right">
                  {{App\Post::find(2)->tunjangan }}
                </span>
              </li>
              <ul class="nav nav-stacked">
              <li>
                kinerja
                <span class="pull-right">
                  {{App\Post::find(2)->tunjangan }}
                </span>
              </li>
              <ul class="nav nav-stacked">
              <li>
                penilaian prestasi kerja
                <span class="pull-right">
                  {{App\Post::find(2)->tunjangan }}
                </span>
              </li>
              <ul class="nav nav-stacked">
              <li>
                sasaran kerja pegawai
                <span class="pull-right">
                  {{App\Post::find(2)->tunjangan }}
                </span>
              </li>
              <ul class="nav nav-stacked">
              <li>
                prilaku kerja
                <span class="pull-right">
                 {{App\Post::find(2)->tunjangan }}
                </span>
              </li>
              <ul class="nav nav-stacked">
              <li>
                displin
                <span class="pull-right">
                  {{App\Post::find(2)->tunjangan }}
                </span>
              </li>

              <li>
                komitmen
                <span class="pull-right">
                 {{App\Post::find(2)->tunjangan }}
                </span>
              </li>
            </ul>
          </div>

          <div class="box-footer">
            <a href="#" class="btn btn-warning pull-right">Edit</a>
          </div>
        </div>
      </div>
    </div>

  </section>
  @endsection