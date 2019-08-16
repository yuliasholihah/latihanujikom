@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Beli Kridit </h5><br>
                <center>
                        <a href="{{ route('beli kridit.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>kode</th>
                                <th>no ktp pembeli</th>
                                <th>kode paket</th>
                                <th>kode motor</th>
                                <th>fotocopy ktp</th>
                                <th>fotocopy kk</th>
                                <th>fotocopy strip gaji</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($belikridit as $data)
                            <tr>
                                <td>{{$data->kridit_kode}}</td>
                               <td>@foreach ($data->pembeli as $pembeli)
                                    {{ $pembeli->pembeli_no_ktp }}
                                 @endforeach</td>
                                 <td>@foreach ($data->belikridit as $belikridit)
                                    {{ $belikridit->belikridit }}
                                 @endforeach</td>
                                 <td>@foreach ($data->motor as $motor)
                                    {{ $motor->motor_kode }}
                                 @endforeach</td>
                                <td>{{$data->kridit_tanggal}}</td>
                                <td>{{$data->fotocopy_ktp}}</td>
                                <td>{{$data->fotocopy_kk}}</td>
                                <td>{{$data->fotocopy_strip_gaji}}</td>
                                
									<a href="{{route('beli kridit.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
									</a>
                                </td>
                                <td>
                                    <a href="{{route('beli kridit.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
                                </td>
                                <td>
									<form action="{{route('beli kridit.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                                    </form>
								</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection