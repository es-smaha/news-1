@extends("layout")
@section("content")

<div class="container-fluid">
    <div class="row">
        <div class="col-8 mt-4 ">
            <form action="{{ url('/insertpost') }}" method="POST">
                @csrf 
            <input type="hidden" name="userid" value="{{ Auth::user()->id }}"> <!-- session for the reason that only users can post -->
                <div class="form-group row">
                    <label for="title" class="col-2">title Post</label>
                    <div class="col-10">
                        <input type="text" id="title" name="title" value="{{ old('title') }}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-2">Content Post</label>
                    <div class="col-10">
                        <input type="text" id="content" name="content" value="{{ old('content') }}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-2">Category Post</label>
                        <div class="col-10">
                            <select name="catid" class="form-control">
                            <option value="">choosen...</option> 

                                @foreach($categories as $category )
                                    <option value="{{ $category->cat_id }}">{{ $category->cat_name }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                <input type="submit" class="btn btn-dark mt-3" value="post" >
            </form>
        </div>
        <div class="col-12">
            @foreach($errors->all() as $err)
                <div class="alert alert-danger mt-4"> 
                    {{ $err }}
                </div>    
            @endforeach        
        </div>
    </div>
</div>

        
        @endsection