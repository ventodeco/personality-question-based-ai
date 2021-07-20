@extends('layouts.default')

@section('content')
<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
        <form action="{{ route('graduation.predict') }}" method="post">
            @csrf
            <div class="row my-3">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nilai Semester 1</label>
                    <input value="{{ $graduation ? $graduation->semester_1 : 0 }}" name="semester_1" type="number" min="0" max="4" class="form-control" placeholder="Masukkan Nilai" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nilai Semester 2</label>
                    <input value="{{ $graduation ? $graduation->semester_2 : 0 }}" name="semester_2" type="number" class="form-control" placeholder="Masukkan Nilai" required>
                </div>
            </div>

            <div class="row my-3">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nilai Semester 3</label>
                    <input value="{{ $graduation ? $graduation->semester_3 : 0 }}" name="semester_3" type="number" class="form-control" placeholder="Masukkan Nilai" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nilai Semester 4</label>
                    <input value="{{ $graduation ? $graduation->semester_4 : 0 }}" name="semester_4" type="number" class="form-control" placeholder="Masukkan Nilai" required>
                </div>
            </div>

            <div class="row my-3">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nilai Semester 5</label>
                    <input value="{{ $graduation ? $graduation->semester_5 : 0 }}" name="semester_5" type="number" class="form-control" placeholder="Masukkan Nilai" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nilai Semester 6</label>
                    <input value="{{ $graduation ? $graduation->semester_6 : 0 }}" name="semester_6" type="number" class="form-control" placeholder="Masukkan Nilai" required>
                </div>
            </div>

            <div class="row my-3">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nilai Semester 7</label>
                    <input value="{{ $graduation ? $graduation->semester_7 : 0 }}" name="semester_7" type="number" class="form-control" placeholder="Masukkan Nilai" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nilai Semester 8</label>
                    <input value="{{ $graduation ? $graduation->semester_8 : 0 }}" name="semester_8" type="number" class="form-control" placeholder="Masukkan Nilai" required>
                </div>
                @if ($graduation)
                    <input value="{{ $graduation->id }}"name="graduation_id" type="text" hidden>
                @endif
                <input type="text" name="type" value="eight" hidden>
            </div>
            <button type="submit" class="btn btn-primary">Prediksi</button>
        </form>
    </div>
</section>
@endsection