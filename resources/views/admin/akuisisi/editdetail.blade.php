@extends('admin.layout.main')

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
                        <form action="{{ url('admin/updatedetail-akuisisi', $detailakuisisi->id_detailakuisisi) }}" method="post">
                        @csrf
                      <form>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Pemegang</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_pemegang" value="{{$detailakuisisi->nama_pemegang}}" id="basic-default-name" placeholder="">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Perangkat</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_perangkat"  value="{{$detailakuisisi->nama_perangkat}}" id="basic-default-name" placeholder="">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Akses User</label>
                          <div class="col-sm-10">
                              <select id="defaultSelect" name="akses_user" class="form-select">
                                <option selected>{{$detailakuisisi->akses_user}} </option>
                                <option value="Baik">Baik</option>
                                <option value="Tidak Baik">Tidak Baik</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Power Lock</label>
                          <div class="col-sm-10">
                              <select id="defaultSelect" name="power_lock" class="form-select">
                                <option selected>{{$detailakuisisi->power_lock}} </option>
                                <option value="Baik">Baik</option>
                                <option value="Tidak Baik">Tidak Baik</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Sinkronisasi Waktu</label>
                          <div class="col-sm-10">
                              <select id="defaultSelect" name="sinkronisasi_waktu" class="form-select">
                                <option selected>{{$detailakuisisi->sinkronisasi_waktu}} </option>
                                <option value="Baik">Baik</option>
                                <option value="Tidak Baik">Tidak Baik</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Antivirus</label>
                          <div class="col-sm-10">
                              <select id="defaultSelect" name="antivirus" class="form-select">
                                <option selected>{{$detailakuisisi->antivirus}} </option>
                                <option value="Baik">Baik</option>
                                <option value="Tidak Baik">Tidak Baik</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Update OS</label>
                          <div class="col-sm-10">
                              <select id="defaultSelect" name="update_os" class="form-select">
                                <option selected>{{$detailakuisisi->update_os}} </option>
                                <option value="Baik">Baik</option>
                                <option value="Tidak Baik">Tidak Baik</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Scan Malware</label>
                          <div class="col-sm-10">
                              <select id="defaultSelect" name="scan_malware" class="form-select">
                                <option selected>{{$detailakuisisi->scan_malware}} </option>
                                <option value="Sudah">Sudah</option>
                                <option value="Belum">Belum</option>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Versi OS</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="versi_os"  value="{{$detailakuisisi->versi_os}}" id="basic-default-name" placeholder="">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Keterangan</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="keterangan"  value="{{$detailakuisisi->keterangan}}" id="basic-default-name" placeholder="">
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