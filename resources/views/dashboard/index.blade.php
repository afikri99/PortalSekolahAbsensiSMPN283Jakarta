@extends('layouts')
@section('main')
<style>
  div.info.sign{
    vertical-align: bottom;
    text-align: right;
    margin-left: auto;
    float: right;
  }
</style>
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Selamat Datang, {{Auth::user()->fullname}}</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                  {{$title}}
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row"> <!--begin::Col-->
                        <div class="col-lg-5 col-md-6"> <!--begin::Small Box Widget 1-->
                          <a href="#" class="text-decoration-none">
                            <div class="small-box text-start btn btn-primary p-2">
                                <div class="inner">
                                    <h3>Matematika</h3>
                                    <div class="info d-inline-flex">
                                      <table>
                                        <tr>
                                          <td><i class="fas fa-chalkboard-teacher"></i></td>
                                          <td>VII-A</td>
                                        </tr>
                                        <tr>
                                          <td><i class="fas fa-calendar"></i></td><td>Senin</td>
                                        </tr>
                                        <tr>
                                          <td><i class="fas fa-clock"></i></td><td>08.00 - 09.30</td>
                                        </tr>
                                      </table>
                                    </div>
                                    <div class="info d-inline-flex sign">
                                      <span class="display-3"><i class="fas fa-sign-in-alt"></i></span>
                                    </div>
                                </div> 
                                <div class="inner" style="font-size:14px">
                                  Kehadiran: 0/32 | Sakit: 0 | Izin: 0 | Tanpa Keterangan: 0
                                </div>
                            </div> <!--end::Small Box Widget 1-->
                          </a>
                        </div> <!--end::Col-->
                    </div> <!--end::Row--> <!--begin::Row-->
                    
                    
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
@endsection