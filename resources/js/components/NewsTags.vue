<template>
  <p uk-margin>
    <template v-for="(tag, index) in tags">
      <span v-if="index === 5" class="uk-button uk-button-default uk-button-small uk-margin-small-right" title="Показати усі"
        @click="showmore = !showmore">
        <i class="fas fa-ellipsis-h"></i></span>

      <a v-if="index < 5 || showmore" :key="tag.id" class="uk-button uk-button-default uk-button-small uk-margin-small-right"
      v-bind:class="{ 'uk-button-primary': tag.slug === activtag }"
      v-bind:href="'/news?tag=' + tag.slug">
      {{tag.title}} {{tag.count}}</a>
    </template>
  </p>
</template>

<script>
export default{
  props:['activtag'],
  data(){
      return{
          tags: [],
          showmore: false,
      }
  },
  mounted: function () {
    axios
        .get('/serv-data/tags')
        .then(response => {
            this.tags = response.data;
            // console.log(response.data);
        });
  },
  methods: {
  },
}
</script>
