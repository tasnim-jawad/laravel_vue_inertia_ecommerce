<template>
<div class="row">
    <div class="col-md-3" v-for="product in 10">
    <div class="product-wrapper mb-2">
      <div class="product-img">
        <a href="#">
          <img src="/frontend/assets/images/product/5.jpg" alt="" class="primary" />
          <img src="/frontend/assets/images/product/6.jpg" alt="" class="secondary" />
        </a>
        <div class="product-icon c-fff home3-hover-bg">
          <ul>
            <li>
              <a href="#" data-bs-toggle="tooltip" title="Add to cart"
                ><i class="fa fa-shopping-cart"></i
              ></a>
            </li>
            <li>
              <a href="#" data-bs-toggle="tooltip" title="Wishlist"
                ><i class="fa fa-heart-o"></i
              ></a>
            </li>
            <li>
              <a href="#" data-bs-toggle="tooltip" title="Compare"
                ><i class="fa fa-comments"></i
              ></a>
            </li>
            <li>
              <a href="#" data-bs-toggle="tooltip" title="Accumsan eli"
                ><i class="fa fa-search"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="product-content home3-hover">
        <h3><a href="#">Adipiscing cursus eu</a></h3>
        <ul>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
          <li><i class="fa fa-star"></i></li>
        </ul>
        <span>&300.00</span>
      </div>
    </div>
  </div>
</div>
  
</template>

<script>
export default {};
</script>
