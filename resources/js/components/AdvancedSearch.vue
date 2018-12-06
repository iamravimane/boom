<template>

  <div class="container">
      <div class="clearfix">&nbsp;</div>

  <div class="row">
    <div class="col-md-3 col-xs-12">

       <div class="form-group">
             <input type="text" class="form-control" required="" v-model="query" v-on:keyup="searching" placeholder="Enter Your Keywords">
            </div>
    <h2 class="bc-head">browse <span>categories</span></h2>
    <ul class="categ-list">
        <div class="form-check" v-for="cat in category" :key="cat">
                     <input type="checkbox" class="form-check-input" v-on:change="searching" v-bind:value="cat" v-model="selectedCat">
                     <label class="form-check-label" for="exampleCheck1">{{cat}}</label>
                  </div>
    </ul>

    <div>
      <h2 class="bc-head">Price <span>Range</span></h2>
          <div class="form-group">
                  <div class="radio">
                  <label style="font-weight: 700;" class="form-check-label"><input  type="radio" name="price" value="0010" v-model="selectedRange" v-on:change="searching">Up to $1000</label>
                  </div>
                  <div class="radio">
                  <label style="font-weight: 700;"><input type="radio" name="price" value="1020" v-model="selectedRange" v-on:change="searching">$1000-$2000</label>
                  </div>
                  <div class="radio">
                  <label style="font-weight: 700;"><input type="radio" name="price" value="2030" v-model="selectedRange" v-on:change="searching">$2000-$3000</label>
                  </div>
                  <div class="radio">
                  <label style="font-weight: 700;"><input type="radio" name="price" value="3040" v-model="selectedRange" v-on:change="searching">$3000-$4000</label>
                  </div>
                  <div class="radio">
                  <label style="font-weight: 700;"><input type="radio" name="price" value="4050" v-model="selectedRange" v-on:change="searching">$4000-$5000</label>
                  </div>
                  <div class="radio">
                  <label style="font-weight: 700;"><input type="radio" name="price" value="5000" v-model="selectedRange" v-on:change="searching">Above $5000</label>
                  </div>
                  </div>
              </div>
    </div>
  <div class="col-sm-9 col-md-9">
    <p class="pop-heading"><span>{{heading}}</span> </p> 
     
    <div class="reports-border"></div>
  

  <div class="post-list" id="postList">
     
    <div class="col-sm-12 col-md-12" v-for="reports in results" :key="reports.rep_id">
    <div class="pop-report-image">
              <img class="img-responsive" src="https://www.bigmarketresearch.com/rd_images/29/Company-profile-min.jpg">
            </div>
    <p class="pop-reports-heading"><a href="https://www.bigmarketresearch.com/dusolo-fertilizers-inc-dsf-financial-and-strategic-swot-analysis-review-market">{{reports.rep_title}}</a></p>
      <p class="pop-reports-desc">{{reports.rep_descrip.substring(0, 200)+'...'}}</p>
    <p class="pop-reports-date">${{reports.rep_price}}&nbsp;&nbsp; | {{ monthNames[reports.rep_pub_month-1]}}&nbsp; {{reports.rep_pub_year}} &nbsp;&nbsp; | &nbsp;&nbsp;{{reports.publisher_name.substring(0, 3)+reports.rep_id }} |  <a href="https://www.bigmarketresearch.com/dusolo-fertilizers-inc-dsf-financial-and-strategic-swot-analysis-review-market"> View Details &gt;&gt; </a> </p>
    </div>
  
  
                          </div>
      
    </div>
      
    


    
  </div>
  
</div>

</template>
<script>
var catgories = [
  "Pharmaceuticals",
  "Medical Devices",
  "Healthcare",
  "Diagnostic and Biotech",
  "Consumer Goods",
  "Materials and Chemicals",
  "Construction & Manufacturing",
  "Food and Beverages",
  "Energy and Power",
  "Semiconductor and Electronics",
  "Automotive and Transportation",
  "ICT & Media",
  "Aerospace & Defence",
  "BFSI",
  "Tourism and Lifestyle",
  "Environment and Gas",
  "Others",
  "Packaging",
  "Glass",
  "Optical Goods",
  "Clothing and Textiles",
  "Retail",
  "Machines",
  "Company Profiles",
  "Agriculture"
];
export default {
  data() {
    return {
      query: "",
      results: [],
      monthNames: [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"
      ],
      category: catgories,
      selectedCat: [],
      selectedRange: '',
      priceRange:{
        min:0,
        max:0
      },
      searchByCat:'',
      heading:''

    };
  },
  methods: {
    searching() {

      if (this.selectedRange.substr(0, 1)==0) {
          this.priceRange.min=1;
          this.priceRange.max=parseInt(this.selectedRange.substr(2, 1)+'000');
          
        } else if (this.selectedRange.substr(2, 1)==0) {
          this.priceRange.min=parseInt(this.selectedRange.substr(0, 1)+'000');
          this.priceRange.max=15000;
        } else {
          this.priceRange.min=parseInt(this.selectedRange.substr(0, 1)+'000');
          this.priceRange.max=parseInt(this.selectedRange.substr(2, 1)+'000');
        }

        var search='';

        var filterResults = [];
        var selected = this.selectedCat;
        for (let index = 0; index < selected.length; index++) {
          if(index==selected.length-1){
            search=search+selected[index];
          }else{
            search=search+selected[index]+',';
          }
        }
        this.searchByCat=search;
      
        if (this.selectedCat.length > 0 && this.selectedRange=='') {
          this.searchByCategory();
        }else if(this.selectedCat.length == 0 && this.selectedRange!=''){
          this.searchByPrice();
        }else if(this.selectedCat.length > 0 && this.selectedRange!=''){
          this.searchByPriceCat();
        }else{
          this.searchByQuery();
        }

        this.heading = 'Search Results';
    },
    searchByQuery() {
        axios
          .get("/advanced-search/search?query=" + this.query)
          .then(response => {
            this.results = response.data;
          });
    },

    searchByCategory() {
      
      axios
          .get("/advanced-search/catgorysearch?query=" + this.query+"&category="+this.searchByCat)
          .then(response => {
            this.results = response.data;
          });
    },
    searchByPriceCat(){
        axios
          .get("/advanced-search/pricesearch?query=" + this.query+"&category="+this.searchByCat+"&min="+this.priceRange.min+"&max="+this.priceRange.max)
          .then(response => {
            this.results = response.data;
          });
    },
    searchByPrice(){
        axios
          .get("/advanced-search/onlypricesearch?query=" + this.query+"&min="+this.priceRange.min+"&max="+this.priceRange.max)
          .then(response => {
            this.results = response.data;
          });
      
    }
    
  },
  beforeMount() {
    axios.get("/advanced-search/latest").then(response => {
      this.heading = 'Latest Reports';
      this.results = response.data;
    });
  }
};
</script>

<style scoped>
.category {
  max-height: 200px;
  overflow-y: scroll;
}
</style>
