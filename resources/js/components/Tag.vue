Vue.component('tag-list',{
	
props:[item],
template:'<li></li>'

})


var app= new Vue({
	
	el:'#app',
	data:{
	tagList:[
		{
			tag:'x-men',
			tag:'avenger',
			tag:'guardians of the galaxy'
		}
	]
}

})


<div id="app">
	<ol>
		<tag-list v-for="list in tagList" v-bind:item="list"></tag-list>
	</ol>
</div>