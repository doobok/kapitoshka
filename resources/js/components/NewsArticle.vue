<template>
  <div>

    <div>
      <div v-for="item in news">

        <div class="section animated-row" data-section="slide03">
          <div class="section-inner">
              <div class="row justify-content-center">
                  <div class="col-md-8 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
            <div class="service-box">
              <img :src="'/storage/' + item.image">
                <span class="service-icon"><i class="fa fa-cloud" aria-hidden="true"></i></span>
                <h3>{{item.title}}</h3>
                <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu maximus enim tortor vitae quam. </p>
              </div>
            </div>
          </div>
        </div>
            </div>
        </div>

        <!-- <div class="item top-margin">
            <div class="portfolio-item">
                <div class="thumb">
                    <img :src="'/storage/' + item.image">
                </div>
                <div class="thumb-inner" >
                    <h4>{{item.title}}</h4>
                    <p>Please tell your friends about it. Templatemo is the best website to download free Bootstrap themes.</p>
                    <a class="" :href="'/news/' + item.slug">Читати далі...</a>
                </div>
            </div>
        </div> -->

      </div>
    </div>
    <div v-if="loading" class="item">
      <p class=""><i class="fas fa-circle-notch spin"></i></p>
    </div>
  </div>



</template>

<script>
export default{
  data(){
      return{
          news: [],
          loading: false,
          count: 0,
          lastdata: false,
      }
  },
  mounted: function () {
    console.log('Завантажено');
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
                        .get('/serv-data/news', { params: { skip: this.count } })
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
                        });

                }, 400);

            },
  },

}
</script>
