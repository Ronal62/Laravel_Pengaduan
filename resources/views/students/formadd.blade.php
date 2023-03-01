@extends('layout.main')

@section('content')
    <h3>
        Tambah data Students</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('students') }}'">
                <i class="fas fa-plus-cirle"></i> Kembali
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('students') }}">
                @csrf
                <div class="row mb-3">
                    <label for="txtid" class="col-sm-2 col-form-label">ID Students</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control @error('txtid') is-invalid @enderror" id="txtid"
                            name="txtid" value="{{ old('txtid') }}">
                        @error('txtid')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                @csrf
                <div class="row mb-3">
                    <label for="txtfull_name" class="col-sm-2 col-form-label">Full Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('txtfull_name') is-invalid @enderror"
                            id="txtfull_name" name="txtfull_name" value="{{ old('txtfull_name') }}">
                        @error('txtfull_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
                    <div class="col-sm-10">
                        <select name="txtgender" value="{{ old('txtgender') }}" id="txtgender"
                            class="form-select form-select-sm @error('txtgender') is-invalid @enderror">
                            <option value="" selected>---Pilih Gender----</option>
                            <option value="M" {{ old('txtgender') == 'M' ? 'selected' : '' }}>Male</option>
                            <option value="F" {{ old('txtgender') == 'F' ? 'selected' : '' }}>Female</option>
                        </select>
                        @error('txtgender')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtaddress" class="col-sm-2 col-form-label">Address
                    </label>
                    <div class="col-sm-10">
                        <textarea class="form-control @error('txtaddress') is-invalid @enderror" name="txtaddress" id="txtaddress"
                            cols="30" rows="10"></textarea>
                        @error('txtaddress')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtemail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control @error('txtemail') is-invalid @enderror" id="txtemail"
                            name="txtemail" value="{{ old('txtemail') }}">
                        @error('txtemail')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="txtphone" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control @error('txtphone') is-invalid @enderror" id="txtphone"
                            name="txtphone" value="{{ old('txtphone') }}">
                        @error('txtphone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
