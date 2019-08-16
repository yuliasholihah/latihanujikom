@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Beli Cash </h5><br>
                <center>
                        <a href="{{ route('beli cash.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>kode</th>
                                <th>no ktp pembeli</th>
                                <th>kode motor</th>
                                <th>tanggal</th>
                                <th>bayar</th>
                                
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($belicash as $data)
                            <td>{{$data->cash_kode}}</td>
                            <tr>
                               <td>@foreach ($data->pembeli as $pembeli)
                                    {{ $pembeli->pembeli_no_ktp }}
                                 @endforeach</td>
                                  <td>@foreach ($data->motor as $motor)
                                    {{ $motor->motor_kode }}
                                 @endforeach</td>
                                <td>{{$data->cash_tanggal}}</td>
                                <td>{{$data->cash_bayar}}</td>
                            
                                
									<a href="{{route('belicash.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
									</a>
                                </td>
                                <td>
                                    <a href="{{route('belicash.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
                                </td>
                                <td>
									<form action="{{route('belicash.destroy', $data->id)}}" method="post">
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