@extends('admin.dashboard.layouts.main')

@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4>Title App</h4>
                                <button type="button" class="btn btn-info text-white" data-coreui-toggle="modal"
                                    data-coreui-target="#titleModal">
                                    <svg class="icon">
                                        <use
                                            xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-pencil') }}">
                                        </use>
                                    </svg>
                                    Edit
                                </button>
                            </div>
                            <div>
                                <h6 class="mb-1">Name</h6>
                                <p class="mb-0 text-black opacity-75">{{ $title->name }}</p>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="titleModal" tabindex="-1" aria-labelledby="titleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="titleModalLabel">Edit Title App</h5>
                                        <button type="button" class="btn-close" data-coreui-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('profile-app.title.update', $title->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name', $title->name) }}" id="name"
                                                    aria-describedby="name" name="name" autocomplete="name">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info text-white">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h4>Contact Us</h4>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info text-white" data-coreui-toggle="modal"
                                    data-coreui-target="#contactModal">
                                    <svg class="icon">
                                        <use
                                            xlink:href="{{ asset('assets/admin/vendors/@coreui/icons/svg/free.svg#cil-pencil') }}">
                                        </use>
                                    </svg>
                                    Edit
                                </button>
                            </div>
                            <div>
                                <h6 class="mb-1">Location</h6>
                                <p class="mb-0 text-black opacity-75">{{ $contact->location }}</p>
                            </div>
                            <div class="mt-2">
                                <h6 class="mb-1">Email</h6>
                                <p class="mb-0 text-black opacity-75">{{ $contact->email }}</p>
                            </div>
                            <div class="mt-2">
                                <h6 class="mb-1">Phone Number</h6>
                                <p class="mb-0 text-black opacity-75">{{ $contact->phone_number }}</p>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="contactModalLabel">Edit Contact Us</h5>
                                        <button type="button" class="btn-close" data-coreui-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('profile-app.contact.update', $contact->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="location" class="form-label">Location</label>
                                                <input type="text"
                                                    class="form-control @error('location') is-invalid @enderror"
                                                    value="{{ old('location', $contact->location) }}" id="location"
                                                    aria-describedby="location" name="location"
                                                    autocomplete="street-address">
                                                @error('location')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email', $contact->email) }}" id="email"
                                                    aria-describedby="email" name="email" pattern=".+@gmail\.com"
                                                    autocomplete="email">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                                <input type="text"
                                                    class="form-control @error('phone_number') is-invalid @enderror"
                                                    value="{{ old('phone_number', $contact->phone_number) }}"
                                                    id="phoneNumber" aria-describedby="phoneNumber" name="phone_number"
                                                    pattern="[+0-9]+" autocomplete="tel"
                                                    oninput="this.value = this.value.replace(/[^+0-9]/g, '');">
                                                @error('phone_number')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info text-white">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
