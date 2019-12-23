<template>
  <ul class="uk-nav uk-nav-default">
    <li class="uk-active"><a href="/">Головна</a></li>

    <template v-for="item in menu">
       <template v-if="item.children">
         <li class="uk-parent uk-active" :key="item.id">
           <a href="#">
             <span class="uk-active">{{item.title}}
               <i class="fas fa-angle-down uk-margin-small-left"></i>
             </span>
           </a>
             <ul class="uk-nav-sub">

               <li class="uk-active" v-for="subitem in item.children">
                 <a v-bind:href="'/' + subitem.url"><i class="fas fa-tint uk-margin-small-right"></i>{{subitem.title}}</a>
               </li>

             </ul>
         </li>
        </template>
        <template v-else>
          <li class="uk-active" :key="item.id"><a v-bind:href="'/' + item.url">{{item.title}}</a></li>
        </template>
    </template>

    <li class="uk-active"><a href="/contacts">Контакти</a></li>

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
