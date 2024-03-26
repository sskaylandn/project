@extends('admin.layout.main')

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
                    <form action="{{ url('admin/storeaset-akuisisi')}}" method="post">
                        @csrf
                        <form>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Pemegang Aset</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_pemegang[]" id="basic-default-name" placeholder="">
                              </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Perangkat</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="nama_perangkat[]" id="basic-default-name" placeholder="">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name"></label>
                                <div class="col-sm-10">
                                <a href="#" class="addtambahaset btn btn-outline-info" style="float:right">Tambah Data</a> 
                                </div>
                              </div> 

                              <div class="tambahaset">
                              
                              </div>

                                <div class="">
                                  <button type="submit" class="btn btn-primary">Send</button>
                                </div>

                            
                          </form>


                    </div>
                  </div>
                </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script type="text/javascript">
              $('.addtambahaset').on('click',function(){
                addtambahaset()
              });
              function addtambahaset(){
                var tambahaset='<div><div class="row mb-3"><label class="col-sm-2 col-form-label" for="basic-default-name">Nama Pemegang Aset</label><div class="col-sm-10"><input type="text" class="form-control" name="nama_pemegang[]" id="basic-default-name" placeholder=""></div></div><div class="row mb-3"><label class="col-sm-2 col-form-label" for="basic-default-name">Nama Perangkat</label><div class="col-sm-10"><input type="text" class="form-control" name="nama_perangkat[]" id="basic-default-name" placeholder=""></div></div>  <div class="row mb-3"><label class="col-sm-2 col-form-label" for="basic-default-name"></label><div class="col-sm-10"><a href="#" class="remove btn btn-outline-danger" style="float:right">Hapus</a></div></div> </div>';
                $('.tambahaset').append(tambahaset);
              };
              $(document).on('click', '.remove', function(){
                  $(this).parent().parent().parent().remove();
              });
              </script>
@endsection