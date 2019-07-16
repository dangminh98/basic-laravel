@extends('master')

@section('title', 'Products')

@section('content')

    {{-- main title  --}}
    <div class="main-title">
        <h1> Products </h1>
        <p> Home / Products</p>
    </div>
    {{-- end main title --}}

    {{-- show products --}}
    <div class="main-content">
        <div class="product-action">
            <p>Showing all result</p>
            <form action="">
                <select name="" id="">
                    <option value=""> Default</option>
                    <option value=""> Sort by price: Low to high</option>
                    <option value=""> Sort by price: High to low</option>
                </select>
            </form>
        </div>
        <div class="show-all-product">
            {{--<pre>{!! var_dump($allProd); die;!!}</pre>--}}
            @foreach($products as $i => $row)
                <div class="items">
                    <div class="item-image">
                        <img src="{!! asset($row['image']) !!}" alt="">
                        <div class="showDetail">
                            <div class="wrapper-show"><a href=""> <i
                                            class="fa fa-cart-plus"></i> </a></div>
                            <div class="wrapper-show"><a href=""> <i
                                            class="fa fa-eye"></i> </a></div>
                            <div class="wrapper-show"><a href=""> <i
                                            class="fa fa-heart"></i> </a></div>
                        </div>
                    </div>
                    <div class="detail">
                        <a href="#"> {!! $row['name'] !!} </a> <br>
                        @if(isset($row['sale']))
                            <strike> <label>{!! number_format($row['price']) !!} VND</label></strike> <br>
                            <label>{!! number_format($row['sale']) !!} VND</label>
                        @else
                            <label>{!! number_format($row['price']) !!} VND</label>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- end show products --}}

    {{-- pagination --}}
    <div class="pagination">
        <ul>
            <a href="">
                <li><i class="fa fa-angle-double-left"></i> Previous</li>
            </a>
            <a href="">
                <li>1</li>
            </a>
            <a href="">
                <li>2</li>
            </a>
            <a href="">
                <li>3</li>
            </a>
            <a href="">
                <li>Next <i class="fa fa-angle-double-right"></i></li>
            </a>
        </ul>
    </div>
    {{-- code pagination end here --}}
@endsection