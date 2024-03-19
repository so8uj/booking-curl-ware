{{-- Validation Messages --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Data Added Message --}}
@if (session('data_added'))
    <div class="alert alert-success">{{ session('data_added') }}</div>
@endif

{{-- Data Update Message --}}
@if (session('data_updated'))
    <div class="alert alert-success">{{ session('data_updated') }}</div>
@endif

{{-- Data Delete Message --}}
@if (session('data_deleted'))
    <div class="alert alert-danger">{{ session('data_deleted') }}</div>
@endif