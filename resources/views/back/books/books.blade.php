<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body dir="rtl">

    <div class="container-fluid">
        

    <div class="main-panel">
        <div class="content-wrapper" style="text-align: right">
    
          <div class="row page-title-header">
            <div class="col-12">
              <div class="page-header">
                <h4 class="page-title">پنل مدیریت کتاب ها</h4>
              </div>
            </div>
          </div>
          @include('back.messages')
          <div class="row">
              
            <div class="card-body">
              <a href="{{route('books.create')}}" class="badge badge-success">مطلب جدید</a>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>عنوان کتاب</th>
                    <th>نام مستعار</th>
                    <th>نام نویسنده</th>
                    <th>نام مترجم</th>
                    <th>خلاصه کتاب</th>
                    <th>تعداد صفحات</th>
                    <th>دسته بندی</th>
                    <th>شابک</th>
                    <th>قیمت</th>
                    <th>تخفیف</th>
                    <th>تاریخ عرضه</th>
                    <th>بازدید</th>
                    <th>وضعیت</th>
                    <th>مدیریت</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($books as $book)
    
    
                  @switch($book->status)
                        @case(1)
                            @php
                              $url=route('update.book.status',$book->id);
                              $status='<a href="'.$url.'" class="badge badge-success">فعال</a>'
                            @endphp
                            @break
                        @case(0)
                        @php
                             $url=route('update.book.status',$article->id);
                             $status='<a href="'.$url.'" class="badge badge-warning">غیرفعال</a>'
                            
                        @endphp
                            @break
                        @default
                    @endswitch
    
                    <tr>
                      <td>{{$book->name}}</td>
                      <td>{{$book->slug}}</td>
                      @foreach ($book->writers()->pluck('name') as $writer)
                          <span>{{$writer}}</span>  
                      @endforeach  
                      @foreach ($book->translator()->pluck('name') as $translator)
                          <span>{{$translator}}</span>  
                      @endforeach
                      <td>{{$book->description}}</td>
                      <td>{{$book->page}}</td>
                      @foreach ($book->categories()->pluck('name') as $category)
                          <span>{{$category}}</span>  
                      @endforeach
                      <td>{{$book->ISBN}}</td>
                      <td>{{$book->price}}</td>
                      <td>{{$book->discount_prcg}}</td>
                      <td>{{$book->date_release}}</td>
                      <td>{{$article->hit}}</td>
                      <td>{!!$status!!}</td>
                      <td>
                        <a href="{{ route('books.edit',$book->id) }}"><label class="badge badge-success">ویرایش</label></a>
                        <a href="{{ route('delete.books',$book->id) }}" 
                          onclick="return confirm('آیا آیتم مورد نظر حذف شود؟')">
                          <label class="badge badge-danger">حدف</label>
                        </a>
                      </td>
    
                    </tr>
                  
                  @endforeach
                 
                </tbody>
              </table>
            </div>
    
    
          </div>
        
      </div>
    </div>
</body>
</html>