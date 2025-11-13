@extends('master')

@section('title', 'Contact')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <h3>Contact Me</h3>
        <p>Fill out the form below.</p>

        @php
          $fields = [
            ['label' => 'Name', 'type' => 'text', 'id' => 'name', 'placeholder' => 'Your name'],
            ['label' => 'Email', 'type' => 'email', 'id' => 'email', 'placeholder' => 'you@example.com'],
            ['label' => 'Message', 'type' => 'textarea', 'id' => 'message', 'placeholder' => 'Write your message...', 'rows' => 5]
          ];
        @endphp

        <form>
          @foreach($fields as $field)
            <div class="mb-3">
              <label for="{{ $field['id'] }}" class="form-label">{{ $field['label'] }}</label>
              
              @if($field['type'] === 'textarea')
                <textarea id="{{ $field['id'] }}" rows="{{ $field['rows'] }}" class="form-control" placeholder="{{ $field['placeholder'] }}"></textarea>
              @else
                <input type="{{ $field['type'] }}" id="{{ $field['id'] }}" class="form-control" placeholder="{{ $field['placeholder'] }}">
              @endif
            </div>
          @endforeach

          <button type="submit" class="btn btn-primary" disabled>Send</button>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection
