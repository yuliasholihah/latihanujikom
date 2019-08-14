@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="card-header">Tambah Data Motor</div>
                            </center>
            
                            <div class="card-body">
                                <form action="{{route('motor.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">motor kode</label>
                                        <input class="form-control 
                                        @error('motor_kode') is-invalid @enderror" type="text" 
                                        name="motor_kode" id="" required>
                                        @error('motor_kode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="">merk</label>
                                        <input class="form-control 
                                        @error('motor_merk') is-invalid @enderror" type="text" 
                                        name="motor_merk" id="" required>
                                        @error('motor_merk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">type</label>
                                        <input class="form-control 
                                        @error('motor_type') is-invalid @enderror" type="text" 
                                        name="motor_type" id="" required>
                                        @error('motor_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                     <div class="form-group">
                                        <label for="">warna</label>
                                        <input class="form-control 
                                        @error('motor_warna_pilihan') is-invalid @enderror" type="text" 
                                        name="motor_warna_pilihan" id="" required>
                                        @error('motor_warna_pilihan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                     <div class="form-group">
                                        <label for="">harga</label>
                                        <input class="form-control 
                                        @error('motor_harga') is-invalid @enderror" type="text" 
                                        name="motor_harga" id="" required>
                                        @error('motor_harga')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input class="form-control 
                                        @error('foto') is-invalid @enderror" type="file" 
                                        name="foto" id="" required>
                                        @error('foto')
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