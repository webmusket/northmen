<template>
	<div>
		<div class="row">
			<div class="col-lg-2">
				
			</div>
			<div class="col-lg-2">
				<select @change="onChange($event)" v-model="filter.color">
				  <option disabled value="color">Color</option>
				  <option v-for = 'color in filterabledata[0]' :value="color.id">{{color.name}}</option>
				</select>
			</div>
			<div class="col-lg-2">
				<select @change="onChange($event)" v-model="filter.pattern">
				  <option disabled value="pattern">Pattern</option>
				  
				  <option v-for = 'pattern in filterabledata[1]' :value="pattern.id">{{pattern.name}}</option>
				</select>
			</div>
			<div class="col-lg-2">
				<select @change="onChange($event)" v-model="filter.fabric">
				  <option disabled value="fabric">Fabric</option>
				  <option v-for = 'fabric in filterabledata[2]' :value="fabric.id">{{fabric.name}}</option>
				</select>
			</div>
			<div class="col-lg-2">
				<select @change="onChange($event)" v-model="filter.season">
				  <option disabled value="season">Season</option>
				  <option v-for = 'season in filterabledata[3]' :value="season.id">{{season.name}}</option>
				</select>
			</div>
			<div class="col-lg-2">
				<button @click="onbuttonClick($event)">Clear All filter</button>
			</div>
		</div>		
	</div>
</template>

<script>
	export default {
		
		name: 'dropdown',

		//props: ['products'],

		data() {
		    return {
		        filter: {
		        	season: "season",
		        	fabric: 'fabric',
		        	color: 'color',
		        	pattern: 'pattern'
		        },
		        filterabledata: []
		    }
		},
		mounted () {
	        // Do something useful with the data in the template
	        //console.log(this.products)

	    },
	    created(){
		    
		    const uri = `/getfilterid`;
	        this.$http.get(uri).then((response) => {
	            this.filterabledata = response.data

	        });

		},
	    methods: {
	        onChange(event) {
	            this.$emit('childToParent', this.filter)
	        },
	        onbuttonClick(){
	        	this.filter.season =  "season"
	        	this.filter.fabric = 'fabric'
		        this.filter.color = 'color'
		        this.filter.pattern = 'pattern'

		        this.onChange()
	        }
	    }
	    
	}
</script>

<style>
	
</style>