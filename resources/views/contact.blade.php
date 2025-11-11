@extends('master')

@section('title', 'Contact')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <h3>Contact Me</h3>
        <p>Fill out the form below. (Note: backend processing not required for this assignment.)</p>

        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" placeholder="Your name">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" placeholder="you@example.com">
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" rows="5" class="form-control" placeholder="Write your message..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary" disabled>Send (no backend)</button>
          <small class="text-muted d-block mt-2">Button disabled — backend processing not required.</small>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection
