@push('scripts')
<script>
form = new components.demoForm({ 
    id: '{{ $id }}',
});
</script>
@endpush

<form id="{{ $id }}" action="{{ route('save') }}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="number">Number</label>
        <input type="text" class="form-control" name="number" value="{{ old('number') }}" maxlength="400" placeholder="Type a number here">
        @error('number', 'number')
            <x-alert-message type='danger' :message="$message" />
        @enderror
        <div id="{{ $id }}-submit-errors" class="mt-2"></div>
    </div>
    @if(session('success'))
        <x-alert-message type='success' :message="session('success')" />
    @endif
    <div class="form-group">
        <button type="submit" class="btn btn-primary" >Submit</button><i class="fa fa-save"></i>
    </div>	
</form>