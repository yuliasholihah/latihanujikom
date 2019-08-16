@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Bayar Cicilan </h5><br>
                <center>
                        <a href="{{ route('bayar cicilan.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>kode</th>
                                <th>kode kridit</th>
                                <th>tgl cicilan</th>
                                <th>jumlah cicilan</th>
                                <th>cicilan ke</th>
                                <th>sisa cicilan</th>
                                <th>sisa cicilan harga</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($bayarcicilan as $data)
                            <td>{{$data->cicilan_kode}}</td>
                            <tr>
                               
                               <td>@foreach ($data->pembeli as $pembeli)
                                    {{ $pembeli->pembeli_no_ktp }}
                                 @endforeach</td>
                                <td>{{$data->cicilan_tanggal}}</td>
                                <td>{{$data->cicilan_jumlah}}</td>
                                <td>{{$data->cicilan_ke}}</td>
                                <td>{{$data->cicilan_sisa_ke}}</td>
                                <td>{{$data->cicilan_sisa_harga}}</td>
                                
									<a href="{{route('bayarcicilan.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
									</a>
                                </td>
                                <td>
                                    <a href="{{route('bayarcicilan.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
                                </td>
                                <td>
									<form action="{{route('bayarcicilan.destroy', $data->id)}}" method="post">
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