<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-1 col-xs-1">
                <span onclick="openNav()">&#9776; </span>
            </div>
            <div class="logo_area col-sm-2 col-xs-2"><a href="#">Dashboard</a></div>
            <div class="button col-sm-8 col-xs-3"> <button>Search</button></div>
        </div>
        <div id="mySidenav" class="sidenav">
            <ul class="ul">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                <li>
                    <a class="al" href="#"><i class="fas fa-hot-tub"></i> Products <i class="fas fa-angle-down"></i></a>
                    <ul class="a">
                        <li><a href="{{ url('product/productType') }}">Product type</a></li>
                        <li><a href="{{ url('product/category') }}">Category</a></li>
                        <li><a href="{{ url('product') }}">Product</a></li>
                        <li><a href="{{ url('product/productSize') }}">Produt size</a></li>
                        <li><a href="{{ url('product/productUnit') }}">Produt unit</a></li>
                    </ul>
                </li>
                <li> <a class="bl" href="#"><i class="fas fa-ellipsis-h"></i> Purchase <i class="fas fa-angle-down"></i></a>
                    <ul class="b">
                        <li><a href="{{ url('purchase/order') }}">Order</a></li>
                        <li><a href="{{ url('purchase/orderItem') }}">Order Item</a></li>
                    </ul>
                </li>

                <li> <a class="cl" href="#"><i class="fas fa-gavel"></i> Sales <i class="fas fa-angle-down"></i></a>
                    <ul class="c">
                        <li><a href="{{ url('sale/order') }}">Order</a></li>
                        <li><a href="{{ url('sale/orderItem') }}">Order Item</a></li>
                    </ul>
                </li>

                <li> <a href="{{ url('product/stock') }}"> <i class="fas fa-trailer"></i> Stock</a></li>


               </ul>

        </div>
    </div>
</header>
