<template>

    <div  v-for="product in 10">
      <div class="product-wrapper bg-fff mb-30 ptb-20 box-shadow">
        <div class="product-img shop-product-img">
          <a href="#"
            ><img src="/frontend/assets/images/product/11.jpg" alt="" class="primary" /><img
              src="/frontend/assets/images/product/12.jpg"
              alt=""
              class="secondary"
          /></a>
        </div>
        <div class="product-content shop-product-content">
          <h3><a href="#">Accumsan eli</a></h3>
          <span>&amp;300.00</span>
          <ul>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
          </ul>
          <p>
            On the other hand, we denounce with righteous indignation and dislike men who
            are so beguiled and demoralized by the charms of pleasure of the moment, so
            blinded by desire, that they cannot foresee the pain and trouble that are
            bound to ensue; and equal blame belongs
          </p>
          <div class="shop-product-icon c-fff hover-bg">
            <ul>
              <li class="active">
                <a href="#" data-bs-toggle="tooltip" data-bs-original-title="Add to cart"
                  >Add to cart</a
                >
              </li>
              <li>
                <a
                  href="#"
                  data-bs-toggle="tooltip"
                  aria-label="Wishlist"
                  data-bs-original-title="Wishlist"
                  ><i class="fa fa-heart-o"></i
                ></a>
              </li>
              <li>
                <a
                  href="#"
                  data-bs-toggle="tooltip"
                  aria-label="Compare"
                  data-bs-original-title="Compare"
                  ><i class="fa fa-comments"></i
                ></a>
              </li>
              <li>
                <a
                  href="#"
                  data-bs-toggle="tooltip"
                  aria-label="Accumsan eli"
                  data-bs-original-title="Accumsan eli"
                  ><i class="fa fa-search"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

</template>

<script>
export default {};
</script>
