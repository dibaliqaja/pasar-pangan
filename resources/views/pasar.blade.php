@extends('_home')
@section('content')

    <div class="row">
        <div class="col md-12">
            <div class="text-gray-600 dark:text-gray-400 text-sm">
                <p>Note:<br/>
                    Program menggunakan perulangan dan jumlah perulangan di input manual pada halaman view dengan kondisi sebagai dibawah ini  :<br/>
                    A. Jika bilangan tersebut kelipatan 3 maka program akan mencetak "Pasar 20"<br/>
                    B. Jika bilangan merupakan kelipatan bilangan 5 maka akan mencetak "Belanja Pangan"<br/>
                    C. Jika bilangan merupakan kelipatan bilangan 3 dan 5 maka akan mencetak "Pasar 20 Belanja Pangan"<br/>
                    D. Jika program sudah mencetak kata "Pasar 20 Belanja Pangan" sebanyak 2 kali maka untuk bilangan kelipatan 3 akan mencetak "Belanja pangan" dan bilangan kelipatan 5 akan mencetak "Pasar 20"<br/>
                    E. Hasil limit akan berhenti ketika kata "Pasar 20 Belanja Pangan" telah tercetak sebanyak 5 kali.
                </p>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <form action="#" class="flex-sm">
            <div class="card">
                <div class="card-body">
                    <h3>PERULANGAN PASAR PANGAN</h3>
                    <hr>
                    <div class="form-group">
                        <label class="font-weight-bold">MASUKKAN LIMIT PERULANGAN</label>
                        <input class="form-control @error('number') is-invalid @enderror" type="number" min="1" name="number" id="number" placeholder="1" value="{{ Request::get('number') }}">
                        
                        @error('number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
                <button class="btn btn-md btn-primary btn-block p-3">SUBMIT</button>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Hasil</h5>
                    <ul class="list-group pl-4">
                        @foreach ($result as $value)
                            <li>{{ $value }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection