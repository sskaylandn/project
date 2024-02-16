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
                      <small class="text-muted float-end">Tabel Monitoring</small>
                    </div>
                    <div class="card-body">
                      <form action="{{ url('user/submit-monitoring') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Perangkat</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="nama_perangkat" placeholder="Masukan Nama Perangkat" />
                          </div>
                          
                       </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Lokasi</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="basic-default-name" name="lokasi" placeholder="Masukan Lokasi" />
                            </div>
                          
                      </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kapasitas Maksimal</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="max" id="basic-default-name" placeholder="Contoh : CPU:48 CPU, RAM:251GB, DISK:15TB" />
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Monitoring</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" name="tgl_monitoring" id="basic-default-name" placeholder="Masukkan Tanggal" />
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Utilisation (CPU)</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="basic-default-name" name="cpu" placeholder="Masukan Utilisation CPU" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Utilisation (RAM)</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="basic-default-name" name="ram" placeholder="Masukan Utilisation RAM" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Utilisation (DISK)</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="basic-default-name" name="disk" placeholder="Masukan Utilisation DISK" />
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Penanggung Jawab</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="pj" placeholder="Masukan Nama Penanggung Jawab" />
                          </div>
                       </div>
                       <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Tindak Lanjut Perubahan</label>
                        <div class="col-sm-10  mb-3">
                          <textarea
                            id="basic-default-message"
                            class="form-control" name="tindak_lanjut"
                            aria-label="Hi, Do you have a moment to talk Joe?"
                            aria-describedby="basic-icon-default-message2"></textarea>
                        </div>
                      </div>
                        <div class="row mb-3">
                        <div class="row mb-2">
                          
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                             
                             
                            </div>
                            
                          </div>
                        </div>
                        
                        
                        <div class="row mt-3">
                          <div class="">
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
@endsection