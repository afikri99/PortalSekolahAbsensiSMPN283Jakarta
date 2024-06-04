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
                            <h3 class="mb-0">{{$title}}</h3>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th width=5>No</th>
                                            <th>Kelas</th>
                                            <th width=5>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($query as $item) 
                                        <tr class="text-center">
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->nama_kelas}}</td>
                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-user-cog"></i>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                        <li><a href="#" class="dropdown-item btn btn-sm bg-primary text-white"><i class="fas fa-edit"></i> Edit</a></li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li><a href="#" class="dropdown-item btn btn-sm bg-danger text-white"><i class="fas fa-trash"></i> Hapus</a></li>
                                                        </ul>
                                                    </div>
                                                </center>
                                                
                                                
                                            </td>
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
@endsection