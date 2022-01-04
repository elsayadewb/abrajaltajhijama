{{--{{$data}}--}}
<a class="remove-product" href="{{url('/')}}">
    back
    {{Cart::count()}}
</a>
@if(Cart::count() != "0")
<section>
    <h1>Shopping Cart</h1>

    <div class="shopping-cart">

        <div class="column-labels">
            <label class="product-image">Image</label>
            <label class="product-details">Product</label>
            <label class="product-price">Price</label>
            <label class="product-quantity">Quantity</label>
            <label class="product-removal">Remove</label>
            <label class="product-line-price">Total</label>
        </div>

        @foreach( $data as $pro)
            <div class="product">
                <div class="product-image">
                    <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
                </div>
                <div class="product-details">
                    <div class="product-title">{{$pro->name}}</div>
                    <p class="product-description"> {{$pro->description}}</p>
                </div>
                <div class="product-price">{{$pro->price}}</div>
                <div class="product-quantity">
                    <input type="number" value="2" min="1">
                </div>
                <div class="product-removal">
                    <a href="{{url('cart/remove/'.$pro->rowId)}}" class="remove-product" >
                        Remove
                    </a>
                </div>
                <div class="product-line-price">{{$pro->price * $pro->qty}}</div>
            </div>
        @endforeach

        <div class="totals">
            <div class="totals-item">
                <label>Subtotal</label>
                <div class="totals-value" id="cart-subtotal">{{Cart::total()}}</div>
            </div>
            <div class="totals-item">
                <label>Tax ({{$pro->tax}})</label>
                <div class="totals-value" id="cart-tax">{{Cart::subtotal()}}</div>
            </div>
            <div class="totals-item">
                <label>Shipping</label>
                <div class="totals-value" id="cart-shipping">15.00</div>
            </div>
            <div class="totals-item totals-item-total">
                <label>Grand Total</label>
                <div class="totals-value" id="cart-total">{{Cart::total()}}</div>
            </div>
        </div>

        <button class="checkout">Checkout</button>

    </div>
</section>
@else
empty
 @endif
{{--@if(Cart::count() !== "0")--}}
<style>
    /*
  I wanted to go with a mobile first approach, but it actually lead to more verbose CSS in this case, so I've gone web first. Can't always force things...

  Side note: I know that this style of nesting in SASS doesn't result in the most performance efficient CSS code... but on the OCD/organizational side, I like it. So for CodePen purposes, CSS selector performance be damned.
  */
    /* Global settings */
    /* Global "table" column settings */
    .product-image {
        float: left;
        width: 20%;
    }

    .product-details {
        float: left;
        width: 37%;
    }

    .product-price {
        float: left;
        width: 12%;
    }

    .product-quantity {
        float: left;
        width: 10%;
    }

    .product-removal {
        float: left;
        width: 9%;
    }

    .product-line-price {
        float: left;
        width: 12%;
        text-align: right;
    }

    /* This is used as the traditional .clearfix class */
    .group:before, .shopping-cart:before, .column-labels:before, .product:before, .totals-item:before,
    .group:after,
    .shopping-cart:after,
    .column-labels:after,
    .product:after,
    .totals-item:after {
        content: '';
        display: table;
    }

    .group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
        clear: both;
    }

    .group, .shopping-cart, .column-labels, .product, .totals-item {
        zoom: 1;
    }

    /* Apply clearfix in a few places */
    /* Apply dollar signs */
    .product .product-price:before, .product .product-line-price:before, .totals-value:before {
        content: '$';
    }

    /* Body/Header stuff */
    body {
        padding: 0px 30px 30px 20px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 100;
    }

    h1 {
        font-weight: 100;
    }

    label {
        color: #aaa;
    }

    .shopping-cart {
        margin-top: -45px;
    }

    /* Column headers */
    .column-labels label {
        padding-bottom: 15px;
        margin-bottom: 15px;
        border-bottom: 1px solid #eee;
    }
    .column-labels .product-image, .column-labels .product-details, .column-labels .product-removal {
        text-indent: -9999px;
    }

    /* Product entries */
    .product {
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 1px solid #eee;
    }
    .product .product-image {
        text-align: center;
    }
    .product .product-image img {
        width: 100px;
    }
    .product .product-details .product-title {
        margin-right: 20px;
        font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
    }
    .product .product-details .product-description {
        margin: 5px 20px 5px 0;
        line-height: 1.4em;
    }
    .product .product-quantity input {
        width: 40px;
    }
    .product .remove-product {
        border: 0;
        padding: 4px 8px;
        background-color: #c66;
        color: #fff;
        font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
        font-size: 12px;
        border-radius: 3px;
    }
    .product .remove-product:hover {
        background-color: #a44;
    }

    /* Totals section */
    .totals .totals-item {
        float: right;
        clear: both;
        width: 100%;
        margin-bottom: 10px;
    }
    .totals .totals-item label {
        float: left;
        clear: both;
        width: 79%;
        text-align: right;
    }
    .totals .totals-item .totals-value {
        float: right;
        width: 21%;
        text-align: right;
    }
    .totals .totals-item-total {
        font-family: "HelveticaNeue-Medium", "Helvetica Neue Medium";
    }

    .checkout {
        float: right;
        border: 0;
        margin-top: 20px;
        padding: 6px 25px;
        background-color: #6b6;
        color: #fff;
        font-size: 25px;
        border-radius: 3px;
    }

    .checkout:hover {
        background-color: #494;
    }

    /* Make adjustments for tablet */
    @media screen and (max-width: 650px) {
        .shopping-cart {
            margin: 0;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .column-labels {
            display: none;
        }

        .product-image {
            float: right;
            width: auto;
        }
        .product-image img {
            margin: 0 0 10px 10px;
        }

        .product-details {
            float: none;
            margin-bottom: 10px;
            width: auto;
        }

        .product-price {
            clear: both;
            width: 70px;
        }

        .product-quantity {
            width: 100px;
        }
        .product-quantity input {
            margin-left: 20px;
        }

        .product-quantity:before {
            content: 'x';
        }

        .product-removal {
            width: auto;
        }

        .product-line-price {
            float: right;
            width: 70px;
        }
    }
    /* Make more adjustments for phone */
    @media screen and (max-width: 350px) {
        .product-removal {
            float: right;
        }

        .product-line-price {
            float: right;
            clear: left;
            width: auto;
            margin-top: 10px;
        }

        .product .product-line-price:before {
            content: 'Item Total: $';
        }

        .totals .totals-item label {
            width: 60%;
        }
        .totals .totals-item .totals-value {
            width: 40%;
        }
    }
</style>
@push('js')
    <script>
        /* Set rates + misc */
        var taxRate = 0.05;
        var shippingRate = 15.00;
        var fadeTime = 300;


        /* Assign actions */
        $('.product-quantity input').change( function() {
            updateQuantity(this);
        });

        $('.product-removal button').click( function() {
            removeItem(this);
        });


        /* Recalculate cart */
        function recalculateCart()
        {
            var subtotal = 0;

            /* Sum up row totals */
            $('.product').each(function () {
                subtotal += parseFloat($(this).children('.product-line-price').text());
            });

            /* Calculate totals */
            var tax = subtotal * taxRate;
            var shipping = (subtotal > 0 ? shippingRate : 0);
            var total = subtotal + tax + shipping;

            /* Update totals display */
            $('.totals-value').fadeOut(fadeTime, function() {
                $('#cart-subtotal').html(subtotal.toFixed(2));
                $('#cart-tax').html(tax.toFixed(2));
                $('#cart-shipping').html(shipping.toFixed(2));
                $('#cart-total').html(total.toFixed(2));
                if(total == 0){
                    $('.checkout').fadeOut(fadeTime);
                }else{
                    $('.checkout').fadeIn(fadeTime);
                }
                $('.totals-value').fadeIn(fadeTime);
            });
        }


        /* Update quantity */
        function updateQuantity(quantityInput)
        {
            /* Calculate line price */
            var productRow = $(quantityInput).parent().parent();
            var price = parseFloat(productRow.children('.product-price').text());
            var quantity = $(quantityInput).val();
            var linePrice = price * quantity;

            /* Update line price display and recalc cart totals */
            productRow.children('.product-line-price').each(function () {
                $(this).fadeOut(fadeTime, function() {
                    $(this).text(linePrice.toFixed(2));
                    recalculateCart();
                    $(this).fadeIn(fadeTime);
                });
            });
        }


        /* Remove item from cart */
        function removeItem(removeButton)
        {
            /* Remove row from DOM and recalc cart total */
            var productRow = $(removeButton).parent().parent();
            productRow.slideUp(fadeTime, function() {
                productRow.remove();
                recalculateCart();
            });
        }
    </script>
@endpush