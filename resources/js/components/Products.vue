<template>
<div class="vld-parent">

	<loading :active.sync="isLoading" 
        :can-cancel="true" 
        :on-cancel="onCancel"
        :is-full-page="fullPage"></loading>
        

	<div class="filter-container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="submenu">
						<ul>

							<li v-for="cat in category"><a :href="'/readymade-products/'+cat.slug">{{ cat.name }}</a></li>
							<li>{{product.total}} products found</li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-6 text-right">
					<div class="filter-section">
						<ul>
							<dropdown  v-on:childToParent="onChildClick"></dropdown>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div v-for="pro in product.data" class="col-lg-3">
				<a :href="'/products/'+url+'/'+pro.slug" class="single-product-box">
					<span class="tiker">New</span>
					<div class="single-product-img">
						<div class="single-image">
                            <img :src="'/storage/'+pro.image" alt="Product image">
                        </div>
                        <div class="single-image-hover">
                            
                        </div>
					</div>
					<div class="product-info">
						<h3>{{pro.title}}</h3>
						<div class="product-tag">
							<span class="orginal-price"><del>{{pro.sale_price}}</del></span>
							<span class="sales-price">{{discountPrice(pro.sale_price)}}</span>
							<span class="discounttg">10% OFF</span>
						</div>
					</div>
				</a>
			</div>
			

		</div>
		<pagination :data="product" @pagination-change-page="getResults"></pagination>
	</div>
</div>
</template>
<script>

	import dropdown from './dropdown.vue';

	// Import component
    import Loading from 'vue-loading-overlay';
    // Import stylesheet
    import 'vue-loading-overlay/dist/vue-loading.css';

	export default {

		components: {
	        dropdown,
	        Loading
	    },
		
		name: 'products',
		props: ['url','categories'],
		data() {
		    return {
		        category: JSON.parse(this.categories),
		        product: {},

		        fromChild: '',

				filterdata : this.getfilter,

				isLoading: false,
                fullPage: true

		    }
		},
		mounted () {
		    //this.product = JSON.parse(this.products)

	        // Do something useful with the data in the template
	        //console.log(this.products)

			
	    },
	    created(){
	    	//console.log(window.location.pathname.split('/')[1])
	    	this.getResults();
		},
		computed: {
	    	getfilter: function(){

				let filter = this.fromChild

				let result = []

				if(typeof filter.season == 'number'){
					result.push(filter.season)
				}
				if(typeof filter.fabric == 'number'){
					result.push(filter.fabric)
				}
				if(typeof filter.color == 'number'){
					result.push(filter.color)
				}
				if(typeof filter.pattern == 'number'){
					result.push(filter.pattern)
				}

				return [result]
			},


	    },
		methods: {
			onChildClick (value,page) {
				this.isLoading = true;
                // simulate AJAX
                setTimeout(() => {
                  this.isLoading = false
                },500)


		      	this.fromChild = value
		      	if (typeof page === 'undefined') {
                    page = 1;
                }
                if (window.location.pathname.split('/')[1] == "readymade-products") {
			      	const uri = `/getreadymadefilterproduct/${this.url}?page=${page}`;
				    this.$http.post(uri, this.getfilter).then((response) => {  
			            // Display a warning toast, with no title
			              //console.log(response.data); 
			              this.product = response.data;                  
			        });
			    }else{
			    	const uri = `/getvirtualfilterproduct/${this.url}?page=${page}`;
				    this.$http.post(uri, this.getfilter).then((response) => {  
			            // Display a warning toast, with no title
			              //console.log(response.data); 
			              this.product = response.data;                  
			        });
			    }
		    },
		    getResults(page){
	    		if (typeof page === 'undefined') {
                    page = 1;
                }

                this.isLoading = true;
                // simulate AJAX
                setTimeout(() => {
                  this.isLoading = false
                },1000)

                if (window.location.pathname.split('/')[1] == "readymade-products") {
		    		const uri = `/getreadymadeproducts/${this.url}?page=${page}`;
				    this.$http.get(uri).then((response) => {
				    	//console.log(response.data);
				        this.product = response.data;
				    });
		    	}else{
		    		const uri = `/getvirtualproducts/${this.url}?page=${page}`;
				    this.$http.get(uri).then((response) => {
				        this.product = response.data;
				    });
		    	}
	    	},
	    	discountPrice(sale_price){
	    		
	    	}
	    	
        
	    	
		}
	    
	}
</script>
<style>
	
</style>