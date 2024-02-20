@extends('user.layout.main')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Detail/</span>{{ $title }}</h4>

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
                        <div class="row ">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Tanggal Efektif</label>
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">:  {{$akuisisi->tgl_efektif}}</label>
                            </div>
                          </div>
                          <div class="row ">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nomor Dokumen</label>
                            <div class="col-sm-10">
                                <label class="col-sm-7 col-form-label" for="basic-default-name">:  {{$akuisisi->nomor_dokumen}}</label>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Kategori Dokumen</label>
                            <div class="col-sm-10">
                                <label class="col-sm-7 col-form-label" for="basic-default-name">:  {{$akuisisi->kategori_dokumen}}</label>
                            </div>
                          </div>
                          <div class="row">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Versi</label>
                            <div class="col-sm-10">
                                <label class="col-sm-7 col-form-label" for="basic-default-name">:  {{$akuisisi->versi}}</label>
                            </div>
                          </div>
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
                                  <th>Scan Malware</th>
                                  <th>Versi OS</th>
                                  <th>Keterangan</th>
                                </tr>
                              </thead>
                              <tbody class="table-border-bottom-0">
                                @php $no = 1; @endphp
                                @foreach ($detailakuisisi as $items)
                                <tr>
                                    <td>{{$no++}}</td>
                                    @foreach ($items->pemegang_aset as $pemegang)
                                      <td>{{$pemegang->nama_pemegang}}</td>
                                      <td>{{$pemegang->nama_perangkat}}</td>
                                    @endforeach
                                    <td>{{$items->akses_user}}</td>
                                    <td>{{$items->power_lock}}</td>
                                    <td>{{$items->sinkronisasi_waktu}}</td>
                                    <td>{{$items->antivirus}}</td>
                                    <td>{{$items->update_os}}</td>
                                    <td>{{$items->scan_malware}}</td>
                                    <td>{{$items->versi_os}}</td>
                                    <td>{{$items->keterangan}}</td>
                                </tr>
                              @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
@endsection