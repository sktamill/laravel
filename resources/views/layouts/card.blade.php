<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels"></div>
        <img src="/img/iphone_x_silver.jpg" alt="iPhone X 256GB">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }}</p>
            <p>
            <form action="{{ route('basket-add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>

                <a href="{{ route('product',[$product->category->code, $product->code]) }}" class="btn btn-default" role="button">Подробнее</a>
            </form>
            </p>
        </div>
    </div>
</div>