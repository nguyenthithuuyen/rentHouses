@extends('master')
@section('content')
    <div class="container">
        <div class="row fullwidth-layout">
            <div class="col-md-12">
                <div class="listings-container list-layout">
                @foreach($houses as $house)
                        <div class="listing-item">
                            <a href="" class="listing-img-container">
                                <div class="listing-badges">
                                    <span> @if($house->category_id == 1) Nhà  Đất  </span>
                                    <span>@else Chung cư </span>
                                    @endif
                                </div>
                                <div class="listing-img-content">
                                    <span
                                        class="listing-price">{{number_format($house->pricePerDay,0,",",".")}}<i> VNĐ </i></span>
                                    <span class="like-icon with-tip" data-tip-content="Add to Bookmarks"></span>
                                    <span class="compare-button with-tip" data-tip-content="Add to Compare"></span>
                                </div>
                                <div>
                                    <img
                                        src=" {{ ($house->image) ? asset('storage/' . $house->image) : asset('images/blog-post-01.jpg')}}"
                                        alt="">
                                </div>
                            </a>
                            <div class="listing-content">
                                <div class="listing-title">
                                    <h4><a href="{{route('houses.showDetail', $house->id)}}">{{$house->name   }}</a>
                                    </h4>
                                    <a href=""
                                       class="listing-address ">
                                        <i class="fa fa-map-marker"></i>
                                        {{$house->address}}
                                    </a>
                                    <a href="{{route('houses.showDetail', $house->id)}}" class="details button border">Xem
                                        chi tiết</a>
                                </div>
                                <ul class="listing-details">
                                    <li>{{$house->area}} m<sup>2</sup></li>
                                    <li>{{$house->numberOfBedroom}} Phòng ngủ</li>
                                    <li>{{$house->numberOfBathroom}} Phòng tắm</li>
                                </ul>
                                <div class="listing-footer">
                                    @if (!! $user = \App\Models\User::find($house->user_id))
                                        <a href="#"><i class="fa fa-user"></i> {{ $user->name}}</a>
                                    @endif
                                    <span><i class="fa fa-calendar-o"></i> {{ $house->create_at }}</span>
                                </div>
                            </div>
                        </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
