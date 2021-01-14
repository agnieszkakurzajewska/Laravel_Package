<div class="container" id="product">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4>Display reviews</h4>
                    <div v-for="product in products">
                        <strong>@{{ product.name }}</strong>
                        <p>@{{ product.amount }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
