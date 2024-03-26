@extends('user.layout.main')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>{{ $title }}</h4>

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
                    <form action="{{ url('user/submit-akuisisi')}}" method="post">
                        @csrf
                        <form>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Tanggal Efektif</label>
                                <div class="col-sm-10">
                                  <div class="input-group input-group-merge">
                                  <input type="date" class="form-control" name="tgl_efektif" id="basic-default-company" placeholder="">
                                  </div>
                                </div>
                              </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-name">Nomor Dokumen</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nomor_dokumen" id="basic-default-name" placeholder="">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-company" >Kategori Dokumen</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="kategori_dokumen" id="basic-default-company"placeholder="">
                              </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company" >Versi</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="versi" id="basic-default-company"  placeholder="">
                                </div>
                              </div>
                              <br>

                              <div class="row mb-3">
                                <div class="table-responsive text-nowrap">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pemegang Aset</th>
                                                <th>Perangkat</th>
                                                <th>Akses User</th>
                                                <th>Power Lock</th>
                                                <th>Sinkronisasi Waktu</th>
                                                <th>Antivirus</th>
                                                <th>Update OS</th>
                                                <th>Acan Malware Terakhir</th>
                                                <th>Versi OS Aktif</th>
                                                <th>Keterangan</th>
                                              </tr>
                                        </thead> 
                                        <tbody class="table-border-bottom-0">
                                        @php $no = 1; @endphp
                                        @foreach ($aset as $item)
                                              <tr>
                                                <td>{{$no++}}</td>
                                                <td> <input type="text" class="form-control" name="nama_pemegang[]"  value="{{$item->nama_pemegang}}" id="basic-default-company" placeholder=""></td>
                                                <td> <input type="text" class="form-control" name="nama_perangkat[]"  value="{{$item->nama_perangkat}}" id="basic-default-company" placeholder=""></td>
                                              
                                                
                                                <td> <select id="defaultSelect" name="akses_user[]" class="form-select">
                                                  <option value="Aktif">Aktif</option>
                                                  <option value="Tidak Aktif">Tidak Aktif</option>
                                                </select></td>
                                                <td> <select id="defaultSelect" name="power_lock[]" class="form-select">
                                                  <option value="Aktif">Aktif</option>
                                                  <option value="Tidak Aktif">Tidak Aktif</option>
                                                </select></td>
                                                <td> <select id="defaultSelect" name="sinkronisasi_waktu[]" class="form-select">
                                                  <option value="Aktif">Aktif</option>
                                                  <option value="Tidak Aktif">Tidak Aktif</option>
                                                </select></td>
                                                <td> <select id="defaultSelect" name="antivirus[]" class="form-select">
                                                  <option value="Aktif">Aktif</option>
                                                  <option value="Tidak Aktif">Tidak Aktif</option>
                                                </select></td>
                                                <td> <select id="defaultSelect" name="update_os[]" class="form-select">
                                                  <option value="Aktif">Aktif</option>
                                                  <option value="Tidak Aktif">Tidak Aktif</option>
                                                </select></td>
                                                <td> <select id="defaultSelect" name="scan_malware[]" class="form-select">
                                                  <option value="Sudah">Sudah</option>
                                                  <option value="Belum">Belum</option>
                                                </select></td>
                                                <td><input type="text" class="form-control" name="versi_os[]" id="basic-default-company" placeholder=""></td>
                                                <td><input type="text" class="form-control" name="keterangan[]" id="basic-default-company" placeholder=""></td>
                                              </tr>
                                              @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row mt-3">
                                  
                                </div>
           
                              
                                <div class="">
                                  <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                          </form>


                    </div>
                  </div>
                </div>
@endsection