
@extends("layout.header")

@section('container')
    <div class="container my-4">
        <div class="row">
            <!-- bagian artikel -->
            <div class="col-md-8 col-12">
                <div class="d-flex flex-wrap gap-3">
                    @forelse ($artikel as $data)
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/' . $data->img) }}" class="card-img-top" alt="{{ $data->judul }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->judul }}</h5>
                                <p class="card-text">{{ $data->isi }}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    @empty
                        <p>Belum ada artikel yang tersedia.</p>
                    @endforelse
                </div>
            </div>

            <!-- bagian sidebar -->
            <div class="col-md-4 col-12 border-start border-3 border-secondary">
                <div class="pt-3">
                    @forelse ($artikel as $data)
                        <div class="card-body">
                            <h5 class="card-title text-center">
                                - {{ $data->judul }}
                            </h5>
                        </div>
                        
                            <hr class="my-4">
                        
                    @empty
                        <p class="text-center">Belum ada artikel yang tersedia.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
