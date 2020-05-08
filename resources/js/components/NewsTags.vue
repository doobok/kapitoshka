<template>
  <p uk-margin>
    <template v-for="(tag, index) in sortedTags">
      <span v-if="index === 5" class="uk-button uk-button-default uk-button-small uk-margin-small-right" title="Показати усі"
        @click="showmore = !showmore">
        <i class="fas fa-ellipsis-h"></i></span>

      <a v-if="index < 5 || showmore" :key="tag.id" class="uk-button uk-button-default uk-button-small uk-margin-small-right"
      v-bind:class="{ 'uk-button-primary': tag.slug === activtag }"
      v-bind:href="'/news?tag=' + tag.slug">
      {{tag.title}}</a>
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
  computed: {
     sortedTags: function() {
       function compare(a, b) {
         if (a.count < b.count)
           return 1;
         if (a.count > b.count)
           return -1;
         return 0;
       }

       return this.tags.sort(compare);
     }
   }
}
</script>
