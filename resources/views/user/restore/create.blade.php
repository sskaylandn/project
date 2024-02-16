@extends('user.layout.main')

@section('main_content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span>  {{ $title }}</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0"></h5>
            <small class="text-muted float-end">Formulir Restore User</small>
          </div>
          <div class="card-body">
            <form action="{{ url('user/submit-restore') }}" method="post">
            @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="inputGroupSelect01">Periode Backup</label>
                <div class="col-sm-10  mb-3">
                    <select class="form-select" name="periode" id="inputGroupSelect01">
                      <option selected>Pilih Periode ...</option>
                      @foreach ($data_backup as $item)
                      <option value="{{ $item->periode }}">{{ $item->periode }}</option>
                      @endforeach
                    </select>
                </div>
              </div>  
              
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Restore Test</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tanggal" id="basic-default-name" placeholder="" />
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="inputGroupSelect01">Objek Backup yang di Restore</label>
                <div class="col-sm-10  mb-3">
                    <select class="form-select" name="objek" id="inputGroupSelect01">
                      <option selected>Pilih Objek ...</option>
                      @foreach ($data_backup as $item)
                      <option value="{{ $item->objek }}">{{ $item->objek }}</option>
                      @endforeach
                    </select>
                </div>
              </div> 
              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Status Restore</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" id="basic-default-name" placeholder="" />
                  </div>
              </div>
              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Penanggung Jawab</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pj" id="basic-default-name" placeholder="Masuka Nama Penanggung Jawab" />
                  </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Keterangan</label>
                <div class="col-sm-10">
                  <textarea
                    id="basic-default-message"
                    class="form-control"
                    aria-label="Hi, Do you have a moment to talk Joe?"
                    name="keterangan"
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
    </div>

@endsection