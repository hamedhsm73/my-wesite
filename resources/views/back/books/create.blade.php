<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ایجاد کتاب </title>
</head>
<body>
    
    <div class="main-panel">
        <div class="content-wrapper">
          <!-- Page Title Header Starts-->
          <div class="row page-title-header">
            <div class="col-12">
              <div class="page-header">
                <h4 class="page-title">کتاب جدید</h4>
              </div>
            </div>
          </div>
          <div class="row">
              
            <div class="card-body">
              <form method="POST" action="{{ route('books.store') }}">
                @csrf
    
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('عنوان کتاب') }}</label>
    
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
    
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
    
                
                <div class="form-group row">
                    <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('نام مستعار') }}</label>
    
                    <div class="col-md-6">
                        <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{old('slug') }}">
    
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                  <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('محتوای مطلب') }}</label>
    
                  <div class="col-md-6">
                      <textarea id="description" type="text" class="form-control" name="description" value="{{old('description') }}" required autocomplete="description" autofocus>
                      </textarea>
                  </div>
                </div>
    
                <div class="form-group row">
                  <label for="user_id" class="col-md-4 col-form-label text-md-right">نویسنده:{{ Auth::user()->name }}</label>
    
                  <div class="col-md-6">
                      <input id="slug" type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  </div>
                </div>
              
              <div class="form-group row">
                <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('وضعیت') }}</label>
    
                <div class="col-md-6">
                    <select id="status" type="text" class="form-control" name="status">
                      <option value="0">منتشر نشده</option>
                      <option value="1">منتشر شده</option>
                    </select>
                </div>
            </div>
    
    
            
            <div class="form-group row">
              <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('انتخاب نوع دسته بندی') }}</label>
              <div id="output"></div>
              <div class="col-md-6">
                  <select multiple class="chosen-select" name="categories[]" style="width: 400px">
    
                    @foreach ($categories as $cat_id=>$cat_name)
                    <option value="{{$cat_id}}">{{$cat_name}}</option>
                    @endforeach
                  </select>
              </div>
          </div>
    
    
                <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('ذخیره') }}
                      </button>
                      <a href="{{route('articles.index')}}" class="btn btn-warning"> انصراف</a>
                  </div>
              </div>
                    
                    
            </form>
         </div>
    
    
        </div>
    
    </div>

</body>
</html>