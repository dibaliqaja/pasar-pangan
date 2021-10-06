@extends('_home')
@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>ASAL</h3>
                    <hr>
                    <div class="form-group">
                        <label class="font-weight-bold">PROVINSI ASAL</label>
                        <input type="text" readonly value="DI Yogyakarta" class="form-control provinsi-asal" name="province_origin">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">KOTA / KABUPATEN ASAL</label>
                        <input type="text" readonly value="Yogyakarta" class="form-control kota-asal" name="city_origin">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">BERAT PRODUK (GRAM)</label>
                        <input type="number" class="form-control" name="weight" id="weight" value="100" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3>TUJUAN</h3>
                    <hr>
                    <div class="form-group">
                        <label class="font-weight-bold">PROVINSI TUJUAN</label>
                        <select class="form-control provinsi-tujuan" name="province_destination">
                            <option value="">-- pilih provinsi tujuan --</option>
                            @foreach ($provinces as $province => $value)
                                <option value="{{ $province  }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">KOTA / KABUPATEN TUJUAN</label>
                        <select class="form-control kota-tujuan" name="city_destination">
                            <option value="">-- pilih kota tujuan --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold">KURIR</label>
                        <select class="form-control kurir" name="courier">
                            <option value="">-- pilih kurir --</option>
                            <option value="jne">JNE</option>
                            <option value="pos">POS</option>
                            <option value="tiki">TIKI</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <button class="btn btn-md btn-primary btn-block btn-check p-3">CEK ONGKOS KIRIM</button>
        </div>
    </div>

    <div class="mt-5 d-flex justify-content-center">
        <img src="{{ asset('load.gif') }}" alt="load" width="60px" class="loader" style="display: none">                            
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card d-none ongkir">
                <div class="card-body">
                    <ul class="list-group" id="ongkir"></ul>
                </div>
            </div>
        </div>
    </div>

@endsection