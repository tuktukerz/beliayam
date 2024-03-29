@section('title', 'FAQ - beliayam.com')
@extends('layouts.admin.master')
@section('faq', 'active')
@section('content')
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit FAQ</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('faq.index') }}">FAQ</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit FAQ
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('faq.update', $faq->id) }}" class="form" method="post"
                                      enctype="multipart/form-data">
                                    @csrf @method('PUT')
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Question</label>
                                            <input type="text" class="form-control" placeholder="Question"
                                                   name="question" value="{{ $faq->question }}">
                                        </div>
                                        @error('question')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Answer</label>
                                            <textarea class="form-control" placeholder="Answer" name="answer"
                                                      rows="5">{{ $faq->answer }}</textarea>
                                        </div>
                                        @error('answer')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Ubah Data</button>
                                        <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset
                                        </button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
</div>

<script src="{{ asset('dist') }}/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
<script src="{{ asset('dist') }}/assets/js/pages/form-select.js"></script>

@endsection
