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
                <small class="text-muted float-end">tabel RFC User</small>
            </div>
            <div class="card-body">
                <form action="{{ url('user/submit-rfc')}}" method="post">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Request of Change</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_req" id="basic-default-name" placeholder="" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Diminta Oleh</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="pengaju" id="basic-default-name" value="{{ auth()->user()->username }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Detail Perubahan</label>
                    <div class="col-sm-10  mb-3">
                        <textarea
                            id="basic-default-message"
                            class="form-control" name="detail"
                            aria-label="Hi, Do you have a moment to talk Joe?"
                            aria-describedby="basic-icon-default-message2"></textarea>
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
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Mulai Perubahan</label>
                    <div class="col-sm-10 mb-3">
                        <input type="date" class="form-control" name="tgl_perubahan" id="basic-default-name" placeholder="" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Selesai Perubahan</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tgl_selesai" id="basic-default-name" placeholder="" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Bidang/Bagian/Layanan yang terdampak</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="bidang" id="basic-default-name" placeholder="" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Keterangan</label>
                    <div class="col-sm-10">
                        <textarea
                        id="basic-default-message"
                        class="form-control" name="keterangan"
                        aria-label="Hi, Do you have a moment to talk Joe?"
                        aria-describedby="basic-icon-default-message2"></textarea>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
        
    <!-- / Content -->
@endsection