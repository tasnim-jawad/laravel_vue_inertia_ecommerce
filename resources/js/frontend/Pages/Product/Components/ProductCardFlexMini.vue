<template>
  <div v-for="product in 10">
    <div class="product-wrapper single-featured bb mb-10">
      <div class="product-img floatleft">
        <a href="#"
          ><img src="/frontend/assets/images/product/1.jpg" alt="" class="primary" /><img
            src="/frontend/assets/images/product/2.jpg"
            alt=""
            class="secondary"
        /></a>
      </div>
      <div class="product-content floatright">
        <h3><a href="#">Duis convallis</a></h3>
        <span>&amp;300.00</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
