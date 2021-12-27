@section('meta')
    <title>{{ config('app.name') }} | Dashboard</title>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush

<x-application>

    <div class="{{ $cssNs }}">

    </div>

</x-application>
