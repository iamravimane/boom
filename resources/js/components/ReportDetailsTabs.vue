 <template>
 <div>
    <tabs :options="{ useUrlFragment: false }" @clicked="tabClicked" @changed="tabChanged">
        <tab name="Report Description" id="reportdescription">
            {{report_Description.rep_descrip}}
        </tab>
        <tab name="Table Of Contents" id="reporttoc">
            {{toc.rep_table_of_contents}}
        </tab>
        <tab name="Request Sample">
            This is the content of the second tab
        </tab>
        <tab name="Request Customization">
            This is the content of the second tab
        </tab>
        
    </tabs>
</div>
</template>

<style>
  
  .tabs-component-tabs>li{
    float: left;
    position: relative;
    display: block;
  }

  .tabs-component-tabs >li.is-active > a{
    color: #1665b0;
    background-color: #fff;
    box-shadow: inset 0px -4px 0px #f8be36;
    border-radius: 0px;
    outline: none;
  }
.tabs-component-tabs >li > a{
      padding: 4px 30px;
}

#reportdescription{
  white-space: pre-wrap; 
  word-wrap: break-word;
  font-family: inherit;
}
#reporttoc{
   white-space: pre-wrap; 
  word-wrap: break-word;
  font-family: inherit;
}
</style>


<script>


export default {
    props: ['id'],

  data() {
    return {
      cardBody: false,
      report_Description: "",
      toc:"",
      
    };
  },

  
    methods: {
        
        tabClicked (selectedTab) {
            //console.log('Current tab re-clicked:' + selectedTab.tab.name);


        },
        tabChanged (selectedTab) {
            console.log('Tab changed to:' + selectedTab.tab.name);

            if(selectedTab.tab.name==='Table Of Contents'){

              this.getReportToc();
             // alert();
            }
        },


        getReportDescription()
        {
          axios.get("/reportdetails/reportDescription/",
            { params:
               {
                ID: this.id
              }
            }).then(response => {
          this.report_Description=response.data;
         
        });
        },

         getReportToc()
        {
          axios.get("/reportdetails/reportToc/",
            { params:
               {
                ID: this.id
              }
            }).then(response => {
          this.toc=response.data;
         
        });
        }


      
    },

    mounted:function(){
             this.getReportDescription();

    }
}
</script>