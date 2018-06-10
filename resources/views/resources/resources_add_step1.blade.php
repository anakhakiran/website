@extends('layouts.main')

@section('content')
<section class="ddl-forms">
    <header>
        <h1>Add a new Resource - Step 1</h1>
    </header>
    <div class="content-body">
        <form method="POST" action="{{ route('step1') }}">
        @csrf
        <div class="form-item">
            <label for="title"> 
                <strong>Title</strong>
                <span class="form-required" title="This field is required.">*</span>
            </label>
            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="title" name="title" size="40" maxlength="40" type="text" value="{{ @$resource['title'] }}" required autofocus>
            @if ($errors->has('title'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('title') }}</strong>
                </span><br>
            @endif
        </div>
        <div class="form-item">
            <label for="author"> 
                <strong>Author</strong>
                <span class="form-required" title="This field is required.">*</span>
            </label>
            <input class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" id="author" name="author" size="40" maxlength="40" type="text" value="{{ @$resource['author'] }}" required>
            @if ($errors->has('author'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('author') }}</strong>
                </span><br>
            @endif
        </div>
        <div class="form-item">
            <label for="publisher"> 
                <strong>Publisher</strong>
                <span class="form-required" title="This field is required.">*</span>
            </label>
            <input class="form-control{{ $errors->has('publisher') ? ' is-invalid' : '' }}" id="publisher" name="publisher" size="40" maxlength="40" type="text" value="{{ @$resource['publisher'] }}" required>
            @if ($errors->has('publisher'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('publisher') }}</strong>
                </span><br>
            @endif
        </div>
        <div class="form-item">
            <label for="translator"> 
                <strong>Translator</strong>
                <span class="form-required" title="This field is required.">*</span>
            </label>
            <input class="form-control{{ $errors->has('translator') ? ' is-invalid' : '' }}" id="translator" name="translator" size="40" maxlength="40" type="text" value="{{ @$resource['translator'] }}" required>
            @if ($errors->has('translator'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('translator') }}</strong>
                </span><br>
            @endif
        </div>
        <div class="form-item">
            <label for="language"> 
                <strong>Language</strong>
                <span class="form-required" title="This field is required.">*</span>
            </label>
            <select class="form-control{{ $errors->has('language') ? ' is-invalid' : '' }}" name="language" id="language" required>
                <option value="">- None -</option>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <option value="{{ $properties['native'] }}" {{ @$resource['language'] == $properties['native'] ? "selected" : "" }}>{{ $properties['native'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-item">
            <label for="abstract"> 
                <strong>Abstract</strong>
                <span class="form-required" title="This field is required.">*</span>
            </label>
            <textarea class="form-control{{ $errors->has('abstract') ? ' is-invalid' : '' }}" id="editor" name="abstract" style="height: 200px">{{ @$resource['abstract'] }}</textarea>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            @if ($errors->has('abstract'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('abstract') }}</strong>
                </span><br>
            @endif
        </div>
        <div class="left-side">
            <input class="form-control normalButton" type="submit" value="Next">
        </div>
        </form>
    </div>
</section>
@endsection