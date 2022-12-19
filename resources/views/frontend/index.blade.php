@extends('layouts.app')

@section('title',"Programmer's guide")

@section('meta_description',"Programmer's guide")

@section('meta_keyword',"Programmer's guide")

@section('content')



<div class="bg-danger py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel category-carousel owl-theme">
                    @foreach($all_categories as $all_cate_item)
                    <div class="item">
                        <a href="{{ url('tutorial/'.$all_cate_item->slug) }}" class="text-decoration-none">
                        <div class="card">
                            <img src="{{ asset('uploads/category/'.$all_cate_item->image) }}" alt="Image">
                            <div class="card-body text-center">
                                <h5 class="text-dark">{{$all_cate_item->name}}</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>


<div class="py-1 bg-gray">
    <div class="container">
        <div class="border text-center p-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKqkZTGiXD5nXb5XETF218j4w_11r5ON-Vt8_DhzNM-NKo-h3hUgfWlnBE4PhdvZnQJxY&usqp=CAU">
{{--            <h3>Advertise here</h3>--}}
        </div>
    </div>
</div>


    <div class="py-5">
    <div class="container">
        <div class="col-md-12">
            <h4>Programmer's guide</h4>
            <div class="underline"></div>
            <p>
                Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

                Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
            </p>
        </div>
    </div>
</div>


<div class="py-5 bg-gray">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <h4>All Category list</h4>
            <div class="underline"></div>
        </div>
            @foreach($all_categories as $all_cateitem)
                <div class="col-md-3">
                    <div class="card card-body mb-3">
                        <a href="{{ url('tutorial/'.$all_cateitem->slug) }}" class="text-decoration-none">
                            <h5 class="text-dark mb-0">{{$all_cateitem->name}}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Latest Posts</h4>
                <div class="underline"></div>
            </div>
            <div class="col-md-8">
                @foreach($latest_posts as $latest_post_item)
                        <div class="card card-body bg-gray shadow mb-3">
                            <a href="{{ url('tutorial/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug) }}" class="text-decoration-none">
                                <h5 class="text-dark mb-0">{{$latest_post_item->name}}</h5>
                            </a>
                            <h6>Posted On: {{$latest_post_item->created_at->format('d-m-Y')}}</h6>
                        </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="border text-center p-3">
{{--                    <h3>Advertise here</h3>--}}
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXq4dI57HI05cUv_rJxwlYlDv-fm1jSTerUptD0Xa_pkUN4kq6qPAHjSrQY1vfRvVzILk&usqp=CAU">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
