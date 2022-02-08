<template>
  <header class="container is-widescreen">

    <div class="navbar-brand">
      <slot name="home"></slot>
      <button role="button" class="navbar-burger" v-on:click="toggleMenu" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </button>
    </div>

    <div class="navbar-menu" ref="gmenu">

      <div class="navbar-start">
        <div class="box-sns">
          <span class="navbar-item icon">
            <a href=""><i class="fab fa-facebook"></i></a>
          </span>
          <span class="navbar-item icon">
            <a href=""><i class="fab fa-twitter"></i></a>
          </span>
        </div>
      </div>

      <div class="navbar-end">
        <slot name="search"></slot>
        <slot name="user"></slot>
      </div>

    </div>
  </header>
</template>

<script>
export default {
  methods: {
    toggleMenu() {
      this.$refs.gmenu.classList.toggle('is-active')
    }
  }
}
</script>

<style lang="scss" scoped>

.box-sns {
  display: flex;
  align-items: center;
  .icon {
    margin-right: 0.33em;
    font-size: 1.6em;
  }
}

.navbar-menu {
  &.is-active {
    display: block;
    background: white;
  }
}

</style>