<div class="cart-section animated bounce">
    <a href="{{route('cart')}}">
        <div class="add-to-cart">
            <i class="fa fa-heart"></i>
            <i class="added-count">{{ $copies->count() }}</i>
        </div>
    </a>
</div>