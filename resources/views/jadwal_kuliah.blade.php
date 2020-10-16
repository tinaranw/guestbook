@extends('layout/main')
@section('judul','KONTAK TEMAN')
@section('isi_utama')
<div class="row">
  <h1>Jadwal Kuliahku</h1>
  <div class="col-sm-12">
      <div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Hari</th>
              <th scope="col">Jam</th>
              <th scope="col">Kuliah</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Senin</td>
              <td>08:20 - 10:50</td>
              <td>Mobile Apps Development</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Selasa</td>
              <td>09:10 - 11:40</td>
              <td>Game Design</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jumat</td>
              <td>02:30 - 10:50</td>
              <td>Web Development</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>
@endsection


