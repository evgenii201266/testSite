<template>
    <div>
      <button @click="update" class="btn btn-default" v-if="!is_refresh">Update</button>
      <span v-if="is_refresh">Updating</span>
          <div v-if="gena">
            <div class="article-title">
              <p>Great People Quotes</p>
              <img class = "image-style" src = "https://www.chitalnya.ru/upload/740/212219897657632832.jpg">
            </div>
         </div>
        <div class="row" v-if="!is_refresh">
              <div v-for="url of urldata" :key="url.id">
                <p>{{url.quoteText}}</p>
                <strong>{{url.quoteAuthor}}</strong>
            </div>
         </div>
      </div>
</template>

<script>
export default {
  methods: {
    update: function() {
      this.gena = false;
      this.is_refresh = true;
      axios.get("/get").then(response => {
        console.log(response);
        this.urldata = response;
        this.is_refresh = false;
      });
    }
  },
  data: function() {
    return {
      gena: true,
      urldata: [],
      is_refresh: false
    };
  }
};
</script>