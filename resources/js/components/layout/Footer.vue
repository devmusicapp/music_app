<template>
  <p>this is Vue Component. jsdata: {{temp}}</p>
</template>

<script>
export default {
  data() {
    return {
      temp: 'layoutFooter--2'
    }
  }
}
</script>

<style lang="scss" scoped>
$blue: #2367a0;
$body-bg: #f24678;
p {
  color: $body-bg;
}
</style>