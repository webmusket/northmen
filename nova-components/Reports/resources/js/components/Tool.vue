<template>
    <div>
        <heading class="mb-6">Reports</heading>
        <form @submit.prevent="formSubmit">
            <card class="flex flex-wrap py-8 mb-8">
            
                <div class="w-1/4">
                    <p class="text-sm uppercase mb-2 text-80">Select from sales,purchase</p>

                    <div>
                        <select v-model="type" class="custom-select custom-select-lg mb-3">
                          <option selected>Open this select menu</option>
                          <option value="sales">Sales</option>
                          <option value="order">Order</option>
                          <option value="purchase">Purchase</option>
                        </select>
                        
                    </div>
                </div>


                <div class="w-1/4">
                    <p class="text-sm uppercase mb-2 text-80">From</p>

                    <div>
                        <input type="date" name="" v-model="from">
                        
                    </div>
                </div>


                <div class="w-1/4">
                    <p class="text-sm uppercase mb-2 text-80">To</p>

                    <div> 
                        <input type="date" name="" v-model="to"> 
                          
                    </div>
                </div>

                <div class="w-1/4">
                    <p class="text-sm uppercase mb-2 text-80">Category</p>

                    <div>
                        <select v-model="category" class="custom-select custom-select-lg mb-3">
                          <option selected>Open this select menu</option>
                          <option value="suits">Suits</option>
                          <option value="shirts">Shirts</option>
                          <option value="pants">Pants</option>
                        </select>
                        
                    </div>
                </div>
                <div class="w-1/4">
                    <p class="text-sm uppercase mb-2 text-80">Time wise report</p>

                    <div>
                        <select v-model="duration" class="custom-select custom-select-lg mb-3">
                          <option selected>Open this select menu</option>
                          <option value="day">Today</option>
                          <option value="month">Month</option>
                          <option value="year">Year</option>
                        </select>
                        
                    </div>
                </div>
                <div class="w-1/4">
                    <p></p>
                    <div>
                        <button type="submit" class="btn btn-primary btn-default">GO</button> 
                        
                    </div>
                </div>
           
            </card>
        </form>      
        <card class="flex flex-wrap py-8 mb-8">
            <table
                    class="table w-full"
                    cellpadding="0"
                    cellspacing="0"
                    data-testid="resource-table"
            >
                <thead>
                <tr>
                    <th class="text-left">
                      <span class="inline-flex items-center">
                         Charge ID
                      </span>
                    </th>
                    <th class="text-left">
                      <span class="inline-flex items-center">
                         Amount
                      </span>
                    </th>
                    <th class="text-left">
                      <span class="inline-flex items-center">
                         Created
                      </span>
                    </th>
                    <th class="text-left">
                      <span class="inline-flex items-center">
                         Status
                      </span>
                    </th>
                    <th><!-- View --></th>
                </tr>
                </thead>

                <tbody>

                    <div v-for="(order, index) in output" :key="index"  >
                        <p>{{order.name}}</p>
                    </div>

                </tbody>
            </table>
        </card>

        
    </div>
</template>

<script>

export default {
    data() {
        return {
            type: '',
            from: '',
            to: '',
            category:'',
            duration:'',
            output: ''
        }
    },


    methods:{
        formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('/formSubmit', {
                    type: this.type,
                    from: this.from,
                    to: this.to,
                    category: this.category,
                    duration: this.duration,
                })
                .then(function (response) {
                    console.log(response.data);
                    currentObj.output = response.data;

                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            }
    }

}  
</script>

<style>
/* Scoped Styles */


</style>
