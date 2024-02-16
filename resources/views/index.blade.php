@extends('layout.main_layout')

@section('main_content')

    <!-- ***** Main Banner Area Start ***** -->
    <br>
    <br>
    <br>
    <div class="row d-flex justify-content-center m-5">
        <div class="col-10">
            <h2 class="d-flex justify-content-center fw-bold pb-5 " >Pusat Formulir Kominfo</h2>
            <div class="card  d-flex flex-row no-block justify-content-center">
                <div class="col-4 p-5">
                        <a href="/login"><img src="/images/dashboard-logo.png" class="img-fluid" alt=""></a>
                        <p class="text-center mt-4 fw-bold fs-4">Dashboard</p>
                </div>
                <div class="col-4 p-5 ">
                        <a href="/login"><img src="/images/rfc-logo.png" class="img-fluid" alt=""></a>
                        <p class="text-center mt-4 fw-bold fs-4">Request Of Change</p>
                </div>
                <div class="col-4 p-5 ">
                        <a href="/login"><img src="/images/backup.png" class="img-fluid" alt=""></a>
                        <p class="text-center mt-4 fw-bold fs-4">BackUp</p>
                </div>
            </div>
            <div class="card  d-flex flex-row no-block justify-content-center">
                <div class="col-4 p-5">
                        <a href="/login"><img src="/images/monitoring-logo.png" class="img-fluid" alt=""></a>
                        <p class="text-center mt-4 fw-bold fs-4">Monitoring</p>
                </div>
                <div class="col-4 p-5">
                    <a href="/login"><img src="/images/restore.png" class="img-fluid" alt=""></a>
                    <p class="text-center mt-4 fw-bold fs-4">Restore Database</p>
                </div>
                <div class="col-4 p-5">
                    <a href="https://api.whatsapp.com/send?phone=6281329300029&text&type=phone_number&app_absent=0"><img src="/images/contact-logo.png" class="img-fluid" alt=""></a>
                    <p class="text-center mt-4 fw-bold fs-4">Contact & Help</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ***** Main Banner Area End ***** -->


    
    @endsection    
   