@extends('admin.layouts.app')

@push('breadcrumb')
<!-- BOF Breadcrumb -->
<div class="row">
    <div class="col">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="ti-home"></i> Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">Forms</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">CKEditor</a></li>
            <li class="breadcrumb-item active">Inline</li>
        </ol>
    </div>
</div>
<!-- EOF Breadcrumb -->
@endpush

@section('content')
<!-- BOF MAIN-BODY -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-body">
                <p>CKEditor 5 provides every type of WYSIWYG editing solution imaginable. From editors similar to Google
                    Docs and Medium,
                    to Slack or Twitter like applications, all is possible within a single editing framework.</p>
                Visit the official CKEditor 5 to learn more: <a href="https://ckeditor.com/ckeditor-5/" class="card-link"
                                                                target="_blank">https://ckeditor.com/ckeditor-5/</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption">
                    <i class="ti-pencil-alt"></i> Inline Editor Embeded Video
                </div>
            </div>
            <div class="card-body">
                <div name="editor-1" id="editor-1">
                    <h2>Behind the word mountains</h2>
                    <p>Far from the countries Vokalia and Consonantia, there live the blind texts.
                        Separated they live in Bookmarksgrove right at the coast.</p>
                    <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful
                        Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of
                        blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <figure class="media">
                        <oembed url="https://youtu.be/cIk-Kxw_7Kc"></oembed>
                    </figure>
                    <p>Excerpt of Hans Zimmer's "Inception" Suite performed in Vienna on Oct 23 2012 with "Time" and "Dream is Collapsing" at
                        film music concert "Hollywood in Vienna".</p>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="button" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption">
                    <i class="ti-pencil-alt"></i> Inline Editor with Images
                </div>
            </div>
            <div class="card-body">
                <div name="editor-2" id="editor-2">
                    <h2>Photos for everyone</h2>
                    <p>Visit <a href="https://unsplash.com" target="_blank">https://unsplash.com</a> for some awesome images. Don't forget to credit the photographers!</p>
                    <p><a href="https://unsplash.com/photos/I33riCqIWUA" target="_blank">Photo by Patrick Baum</a></p>
                    <figure class="image"><img src="{{ asset('dashboard/assets/img/demo/photo-1484942835385-dcb3923c11e1.jpg') }}" alt="BoolFalse Demo" /></figure>
                    <p>All photos published on Unsplash can be used for free. You can use them for commercial and noncommercial purposes. You
                        do not need to ask permission from or provide credit to the photographer or Unsplash, although it is appreciated when
                        possible.</p>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="button" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header">
                <div class="caption">
                    <i class="ti-pencil-alt"></i> Classic Editor Large
                </div>
            </div>
            <div class="card-body">
                <div name="editor-3" id="editor-3">
                    <h1>Destination of the Month</h1>
                    <h4>Valletta, Malta</h4>
                    <figure class="image ck-widget ck-widget_with-resizer image-style-side" contenteditable="false"><img src="{{ asset('dashboard/assets/img/demo/photo-1527155431803-74e5f93c7111.jpg') }}" alt="BoolFalse demo">
                        <div class="ck ck-reset_all ck-widget__resizer" style="display: none;">
                            <div class="ck-widget__resizer__handle ck-widget__resizer__handle-top-left"></div>
                            <div class="ck-widget__resizer__handle ck-widget__resizer__handle-top-right"></div>
                            <div class="ck-widget__resizer__handle ck-widget__resizer__handle-bottom-right"></div>
                            <div class="ck-widget__resizer__handle ck-widget__resizer__handle-bottom-left"></div>
                            <div class="ck ck-size-view" style="display: none;"></div>
                        </div>
                        <figcaption class="ck-editor__editable ck-editor__nested-editable" data-placeholder="Enter image caption"
                                    contenteditable="true">Photo by <a href="https://unsplash.com/photos/9cYiqVDeXDc" target="_blank">Ferenc Horvath</a></figcaption>
                    </figure>
                    <p>The capital city of <a href="https://en.wikipedia.org/wiki/Malta">Malta</a> is the top destination this summer. It’s
                        home to a cutting-edge contemporary architecture, baroque masterpieces, delicious local cuisine and at least 8
                        months of sun. It’s also a top destination for filmmakers, so you can take a tour through locations familiar to you
                        from Game of Thrones, Gladiator, Troy and many more.</p>

                    <h4>Photos for everyone</h4>
                    <p>All photos published on Unsplash can be used for free. You can use them for commercial and noncommercial purposes. You
                        do not need to ask permission from or provide credit to the photographer or Unsplash, although it is appreciated when
                        possible.</p>
                    <p>Visit <a href="https://unsplash.com" target="_blank">https://unsplash.com</a> for some awesome images. Don't forget
                        to credit the photographers!</p>
                </div>
            </div>
            <div class="card-footer text-center">
                <button type="button" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- EOF MAIN-BODY -->
@endsection
