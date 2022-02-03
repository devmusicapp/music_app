<template>
  <p>this is Vue Component. jsdata: {{temp}}</p>
</template>

<script>
export default {
  data() {
    return {
      temp: 'layoutFooter--1'
    }
  }
}
</script>

<style lang="scss" scoped>
$blue: #2367a0;
// $body-bg: #f27846;
p {
  color: $body-bg;
}
</style>