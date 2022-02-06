<template>
  <nav class="navbar container is-widescreen">

    <div class="navbar-brand">
      <slot name="home"></slot>
    </div>

    <div class="navbar-menu">
      <div class="navbar-start">
        <span class="navbar-item icon">
          <i class="fab fa-facebook"></i>
        </span>
        <span class="navbar-item icon">
          <i class="fab fa-twitter"></i>
        </span>
      </div>
      <div class="navbar-end">

        <div class="navbar-item control has-icons-left has-icons-right">
          <input class="input" type="text" placeholder="〇〇〇〇">
          <span class="icon is-medium is-right">
            <i class="fas fa-search"></i>
          </span>
        </div>

        <div class="navbar-item">
          <button class="button">Button</button>
        </div>

      </div>
    </div>
  </nav>
</template>
