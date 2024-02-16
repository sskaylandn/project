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
                        <form>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-message">Jenis Software</label>
                              <div class="col-sm-10">
                                    <select id="defaultSelect" class="form-select">
                                      <option>Pilih Salah Satu</option>
                                      <option value="1">Operating System</option>
                                      <option value="2">Antivirus</option>
                                      <option value="3">Design</option>
                                      <option value="3">Browser</option>
                                      <option value="3">Text Editor</option>
                                      <option value="3">Remote</option>
                                      <option value="3">API Tester</option>
                                      <option value="3">SQL Client</option>
                                      <option value="3">Communication</option>
                                      <option value="3">Office</option>
                                      <option value="3">Development</option>
                                      <option value="3">Server</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Software</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="basic-default-name" placeholder="">
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