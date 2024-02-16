@extends('user.layout.main')

@section('main_content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> {{ $title }}</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0"></h5>
            <small class="text-muted float-end">{{ $title }}</small>
          </div>
                    <div class="card-body">
                        <form action="{{ url('user/update-fisik', $fisik->id_fisik) }}" method="post">
                        @csrf
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Perangkat</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_fisik" value="{{$fisik->nama_fisik}}" id="basic-default-name" placeholder="">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company" >Jumlah</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" name="jumlah_fisik" value="{{$fisik->jumlah_fisik}}" id="basic-default-company" min="0" placeholder="">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Tanggal Pemeriksaan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <input type="date" class="form-control" name="tglperiksa_fisik" value="{{$fisik->tglperiksa_fisik}}" id="basic-default-company" placeholder="">
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Status</label>
                          <div class="col-sm-10">
                              <select id="defaultSelect" name="status_fisik" class="form-select">
                                <option selected>{{$fisik->status_fisik}} </option>
                                <option value="Baik">Baik</option>
                                <option value="Tidak Baik">Tidak Baik</option>
                              </select>
                            </div>
                          </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Tindak Lanjut</label>
                          <div class="col-sm-10">
                                <select id="defaultSelect" name="tindak_lanjut" class="form-select">
                                  <option selected>{{$fisik->tindak_lanjut}}</option>
                                  <option value="Tidak Bisa Diperbaiki">Tidak Bisa Diperbaiki</option>
                                  <option value="Menunggu Tim">Menunggu Tim</option>
                                  <option value="Upgrade">Upgrade</option>
                                </select>
                              </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">PIC</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="pic_fisik" value="{{$fisik->pic_fisik}}" id="basic-default-name" placeholder="">
                            </div>
                          </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Keterangan</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="keterangan" value="{{$fisik->keterangan}}"  id="basic-default-name" placeholder="">
                                </div>
                              </div>
                            
                              <div class="row mt-3">
                                <div class="">
                                  <button type="submit" class="btn btn-primary">Send</button>
                              </div>
                      </form>


                    </div>
                  </div>
                </div>
@endsection