<template>
  <div>
    <template v-if="!loading">
      <news-tags :activtag="tag"></news-tags>
    </template>

    <div>
      <div v-for="item in news" :key="item.id">

        <div class="uk-card uk-card-small uk-margin-bottom news-article">
            <div class="uk-card-media-top">
              <a :href="'/news/' + item.slug">
                <img class="article-image" :src="'/storage/' + item.image">
              </a>
            </div>
            <div class="uk-card-body uk-padding-remove uk-margin-top">
                <h3>{{item.title}}</h3>
                <p>{{teaser(item.body)}} ...</p>
                <a class="uk-button uk-button-default uk-text-center uk-width-1-1" :href="'/news/' + item.slug">Читати далі...</a>
            </div>
        </div>

      </div>
    </div>
    <div v-if="loading" class="uk-text-center">
      <p class="uk-heading-large"><i class="fas fa-fan spin"></i></p>
    </div>
    <div v-if="news.length === 0 && lastdata" class="news-article uk-container-small uk-text-center">
      <p class="uk-h2">Не знайдено жодної новини</p>
      <p class="uk-h4">Категорія не містить публікацій, <a class="uk-text-uppercase" href="/news">перейти до усіх новин</a></p>

    </div>
  </div>



</template>

<script>
export default{
  props:['tag'],
  data(){
      return{
          news: [],
          loading: false,
          count: 0,
          lastdata: false,
      }
  },
  mounted: function () {
    this.loadData();
    document.addEventListener('scroll', e => {
                var scrollHeight = Math.max(
                      document.body.scrollHeight, document.documentElement.scrollHeight,
                      document.body.offsetHeight, document.documentElement.offsetHeight,
                      document.body.clientHeight, document.documentElement.clientHeight
                  )-400;

                if(document.documentElement.scrollTop + document.documentElement.clientHeight >= scrollHeight && !this.loading && !this.lastdata) {
                    this.loadData();
                }
            });
  },
  methods: {
    loadData() {
                this.loading = true;
                setTimeout(e => {
                    axios
                        .get('/serv-data/news', { params: { skip: this.count, tag: this.tag } })
                        .then(response => {
                            if (response.data.length != 0) {
                                this.news = [].concat(this.news, response.data);
                                if (response.data.length < 4) {
                                  this.lastdata = true;
                                }
                            } else {
                                this.lastdata = true;
                            }
                            this.count = this.count+4;
                            this.loading = false;
                        }).catch(error => {
                          console.log(error);
                        });

                }, 400);

            },
      teaser(s) {
        let s1 = s.substring(0,230);
        s1=s1.replace(/<.*?>/g, '');
        s1=s1.replace(/[^\абвгдеєжзклмнопрстуфхчшщьюяіїийц1234567890\s]/gi, '');
        // s1=s1.replace(/<.*?>/g, "");
        return s1;
      }
  },

}
</script>
