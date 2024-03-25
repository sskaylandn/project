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
                    <form action="{{ url('user/update-whitelist', $whitelist->id_whitelist) }}" method="post">
                        @csrf
                        <form>
                            <div class="row mb-3"> 
                              <label class="col-sm-2 col-form-label" for="basic-default-message">Jenis Software</label>
                              <div class="col-sm-10">
                                    <select id="defaultSelect" name="jenis_software"  class="form-select">
                                      <option selected>{{$whitelist->jenis_software}}</option>
                                      <option value="Operating System">Operating System</option>
                                      <option value="Antivirus">Antivirus</option>
                                      <option value="Design">Design</option>
                                      <option value="Browser">Browser</option>
                                      <option value="Text Editor">Text Editor</option>
                                      <option value="Remote">Remote</option>
                                      <option value="API Tester">API Tester</option>
                                      <option value="SQL Client">SQL Client</option>
                                      <option value="Communication">Communication</option>
                                      <option value="Office">Office</option>
                                      <option value="Development">Development</option>
                                      <option value="Server">Server</option>
                                    </select>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Software</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_software" value="{{$whitelist->nama_software}}"id="basic-default-name" placeholder="">
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