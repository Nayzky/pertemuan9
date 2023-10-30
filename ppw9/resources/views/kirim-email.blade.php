@extends('auth.layouts')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center" style="background-color: #6b6bff; border-bottom: none; font-size: 1.5rem; font-weight: bold; color: #ffffff; border-radius: 10px 10px 0 0; padding: 15px;">
                <h3>Kirim Email</h3>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-primary" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <form action="{{ route('kirim-email') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama" style="border: 1px solid #ced4da; border-radius: 5px; padding: 10px; margin-bottom: 10px;">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Tujuan</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Tujuan" style="border: 1px solid #ced4da; border-radius: 5px; padding: 10px; margin-bottom: 10px;">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" style="border: 1px solid #ced4da; border-radius: 5px; padding: 10px; margin-bottom: 10px;">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body Deskripsi</label>
                        <textarea name="body" class="form-control" id="body" cols="30" rows="10" style="border: 1px solid #ced4da; border-radius: 5px; padding: 10px; margin-bottom: 10px;"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="background-color: #6b6bff; border: none; border-radius: 5px; padding: 10px 20px; font-size: 1rem; font-weight: bold; transition: background-color 0.3s;">Kirim Email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
