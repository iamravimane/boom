<template>

<div id="search-bar">
<div class="container">
<div class="row">
<div class="col-md-12">
    <div class="row" id="seacrch-container">
    <form class="form-horizontal" name="frm_search" method="get" action="https://www.bigmarketresearch.com/report-search">
    <!--<input type="search" class="form-control" size="100" placeholder="Email Address" required>-->
        <div class=" col-md-10">
        <div class="input-group">
            <span class="input-group-addon search_keyword"><img src="https://www.bigmarketresearch.com/assets/images/se.png" alt="search"></span>
          <input type="text" placeholder="Search your research studies" name="course" id="search" size="90" class="form-controls" required="" v-model="query" v-on:keyup="autoComplete">

            <span class="input-group-btn">
                <button type="submit" class="btn btn-warning search-now">
                <i class="glyphicon glyphicon-search"></i><span>SEARCH</span></button>
            </span>
              <ul class="search-result" v-show="cardBody"><p class="search-head">Reports</p>
            <li v-for="reports in results" :key="reports.rep_id">
           <a href="https://www.bigmarketresearch.com/surgical-equipment-market">
            {{ reports.rep_title }}
           <span class="caname"></span></a>
            </li>

            <button type="button" onclick="window.location.href = 'https://www.bigmarketresearch.com/advanced-search'" class="btn btn-warning advance-btn">ADVANCE SEARCH</button>

            </ul>
        </div>


        </div>
       <!--  <div class="col-md-2">
        <button type="button" class="btn btn-warning advance-btn" onclick="window.location.href = 'https://www.bigmarketresearch.com/advanced-search'">
        ADVANCE SEARCH</button> 
        </div> -->
    </form>


  


    </div>
</div>
</div>
</div>
</div>


</template>
<style type="text/css">
  
  .search-result{
      position: absolute;
      width: 946px;
      top: 169px; 
      left: 89.5px; 
      z-index: 999; 
      display: block;
      background-color: #beb6c5;
      top:38px;
      left:0;
      list-style:none;
      padding-bottom: 10px;

  }
</style>
<script>

export default {
  data() {
    return {
      cardBody: false,
      query: "",
      results: []
    };
  },
  methods: {
    autoComplete() {
      if (this.query.length > 2) {

        axios.get("/home/search?query=" + this.query).then(response => {
          console.log(response.data);
          this.cardBody = true;
          this.results = response.data;
        });
      } else {
        this.cardBody = false;
      }
    }
    //  showDetails(id){
    //      location.href=' http://127.0.0.1:8000/reports/'+id;
    //  }
  }
};
</script>