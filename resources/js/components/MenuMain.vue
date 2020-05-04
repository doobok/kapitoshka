<template>
  <ul class="uk-navbar-nav uk-visible@l">
    <li class="uk-visible@l"><a href="/"><span class="uk-button-text uk-button-small uk-margin-small"><i class="fas fa-home"></i></span></a></li>

    <template v-for="item in menu">
       <template v-if="item.children">
         <li class="uk-visible@l" :key="item.id">
           <a href="#">
             <span class="uk-button-text uk-text-uppercase uk-text-bold uk-margin-small">{{item.title}}
               <i class="fas fa-sort-down"></i>
             </span>
           </a>
           <div class="uk-navbar-dropdown" style="width: 330px;" uk-dropdown="offset: -10">
             <ul class="uk-nav uk-navbar-dropdown-nav">

               <li class="sub-menu-item" v-for="subitem in item.children">
                 <a class="uk-text-uppercase uk-text-truncate sub-menu-item-elm" v-bind:href="'/' + subitem.url"><i class="fas fa-tint uk-margin-small-right"></i>{{subitem.title}}</a>
               </li>

             </ul>
           </div>
         </li>
        </template>
        <template v-else>
          <li class="uk-visible@l" :key="item.id"><a v-bind:href="'/' + item.url"><span class="uk-button-text uk-text-uppercase uk-text-bold uk-margin-small">{{item.title}}</span></a></li>
        </template>
    </template>

    <li class="uk-visible@l"><a href="/contacts"><span class="uk-button-text uk-button-small uk-margin-small"><i class="fas fa-id-card-alt"></i></span></a></li>

  </ul>
</template>

<script>
export default{
  data(){
      return{
          items: []
      }
  },
  mounted: function () {
      axios
          .get('/serv-data/menu')
          .then(response => {
              this.items = response.data;
          });
  },
  computed: {
    menu () {
      let selected = [];
      this.items.forEach(function(item, i, arr) {
        let elm = arr.filter(e => e.parent_id === item.id);

        if (elm.length === 0 && item.parent_id === null) {
          // console.log('is not parent');
          selected.push(item);
        } else if (item.parent_id === null) {
          // console.log('is parent with childs');
          selected.push({
            title: item.title,
            children: elm
          });
        } else{
        }

      });
      return selected;
    }
  }
}
</script>
