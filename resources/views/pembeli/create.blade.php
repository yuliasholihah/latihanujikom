@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="card-header">Tambah Data pembeli</div>
                            </center>
            
                            <div class="card-body">
                                <form action="{{route('pembeli.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">no ktp</label>
                                        <input class="form-control 
                                        @error('pembeli_no_ktp') is-invalid @enderror" type="text" 
                                        name="pembeli_no_ktp" id="" required>
                                        @error('pembeli_no_ktp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="">nama</label>
                                        <input class="form-control 
                                        @error('pembeli_nama') is-invalid @enderror" type="text" 
                                        name="pembeli_nama" id="" required>
                                        @error('pembeli_nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">alamat</label>
                                        <input class="form-control 
                                        @error('pembeli_alamat') is-invalid @enderror" type="text" 
                                        name="pembeli_alamat" id="" required>
                                        @error('pembeli_alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                     <div class="form-group">
                                        <label for="">telpon</label>
                                        <input class="form-control 
                                        @error('pembeli_telpon') is-invalid @enderror" type="text" 
                                        name="pembeli_telpon" id="" required>
                                        @error('pembeli_telpon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                     <div class="form-group">
                                        <label for="">no hp</label>
                                        <input class="form-control 
                                        @error('pembeli_hp') is-invalid @enderror" type="text" 
                                        name="pembeli_hp" id="" required>
                                        @error('pembeli_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                
                    
            
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>