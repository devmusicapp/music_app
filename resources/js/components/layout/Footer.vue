<template>
  <p>this is Vue Component. jsdata: {{temp}}</p>
</template>

<script>
export default {
  data() {
    return {
      temp: 'layoutFooter--5'
    }
  }
}
</script>

<style lang="scss" scoped>
$blue: #2367a0;
p {
  color: $blue;
}
</style>