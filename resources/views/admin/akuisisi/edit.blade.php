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
                        <form action="{{ url('admin/update-akuisisi', $akuisisi->id_akuisisi) }}" method="post">
                        @csrf
                      <form>
                      <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Tanggal Efektif</label>
                                <div class="col-sm-10">
                                  <div class="input-group input-group-merge">
                                  <input type="date" class="form-control" name="tgl_efektif"  value="{{$akuisisi->tgl_efektif}}" id="basic-default-company" placeholder="">
                                  </div>
                                </div>
                              </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-name">Nomor Dokumen</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nomor_dokumen"  value="{{$akuisisi->nomor_dokumen}}" id="basic-default-name" placeholder="">
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-company" >Kategori Dokumen</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="kategori_dokumen"  value="{{$akuisisi->kategori_dokumen}}" id="basic-default-company"placeholder="">
                              </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company" >Versi</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="versi" value="{{$akuisisi->versi}}" id="basic-default-company"  placeholder="">
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