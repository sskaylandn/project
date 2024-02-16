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
            <small class="text-muted float-end">Tabel Backup Admin</small>
          </div>
          <div class="card-body">
            <form action="{{ url('backup-update', $backup->id_backup)}}" method="post">
              @csrf
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="inputGroupSelect01">Pilih Periode </label>
                <div class="col-sm-10  mb-3">
                    <select class="form-select" name="periode" id="inputGroupSelect01">
                      <option value=" ">{{ $backup->periode }}</option>
                      <option value="Tahun 2023 - 2024">Tahun 2023 - 2024</option>
                      <option value="Tahun 2024 - 2025">Tahun 2024 - 2025</option>
                      <option value="Tahun 2025 - 2026">Tahun 2025 - 2026</option>
                      <option value="Tahun 2026 - 2027">Tahun 2026 - 2027</option>
                    </select>
                </div>
             </div>
              <div class="row mb-4">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tanggal" id="basic-default-name" value="{{ $backup->tanggal }}" />
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="inputGroupSelect01">Pilih Objek Back Up</label>
                <div class="col-sm-10  mb-3">
                    <select class="form-select" name="objek" id="inputGroupSelect01">
                      <option value="{{ $backup->objek }}">{{ $backup->objek }}</option>
                      <option value="Objek A">Objek A</option>
                      <option value="Objek B">Objek B</option>
                      <option value="Objek C">Objek C</option>
                      <option value="Objek D">Objek D</option>
                      <option value="Objek E">Objek E</option>
                    </select>
                </div>  
             </div>
              <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-default-name">Penanggung Jawab</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pj" id="basic-default-name" value="{{ $backup->pj }}" />
                  </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Keterangan</label>
                <div class="col-sm-10">
                  <textarea
                    id="basic-default-message"
                    class="form-control" name="keterangan"
                    aria-label="Hi, Do you have a moment to talk Joe?"
                    aria-describedby="basic-icon-default-message2">{{ $backup->keterangan }}</textarea>
                </div>
              </div>
              <div class="row mt-3">
                <div class="">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection