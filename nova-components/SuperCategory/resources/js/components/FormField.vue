<template>

    <default-field :field="field" :errors="errors">

        <template slot="field">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

               <div id="scrollcheck">
                <div id="latestcategory">
                  
                </div>
                <div id='child'
                    v-for="cat in catnames"
                    :key="cat[0]"
                    class="flex mb-2"
                >
                <span v-if="cat[2] == 1" style="margin-left: 20px;"></span>
                <span v-if="cat[2] == 2" style="margin-left: 40px;"></span>
                <span v-if="cat[2] == 3" style="margin-left: 60px;"></span>
                <span v-if="cat[2] == 4" style="margin-left: 80px;"></span>
                    <checkbox
                        :value="cat[0]"
                        :checked="isChecked(cat[0])"
                        @input="toggleOption(cat[0])"
                        class="pr-2"
                    />
                    <label
                        :for="category"
                        v-text="cat[1]"
                        @click="toggleOption(cat[0])"
                        class="w-full"
                    ></label>
                </div>
              </div> 
              {{last}}
            <p v-if="hasError" class="my-2 text-danger">
                {{ firstError }}
            </p>

              <button class="btn btn-primary" style="height: 40px; margin-top: 10px;" id="showadd"> add new category</button>

              <form style=" margin-top: 10px;" @submit.prevent="updatecategory">
                <div id="addcat">
                      <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" v-model="addcategory.name" placeholder="Add category">
                      
                    </div>


                    <select  class="form-control" v-model='addcategory.parent'>
                        <option v-model="parent" value="0" selected>------Parent Category------</option>
                        <option v-for='cat in catnames' v-model='parent' :value='cat[0]'> {{cat[1]}} </option>
                    </select>
                    {{names}}
                   
                    <br>
                    <button type="submit"  class="btn btn-secondary">Add CAtegory</button>
                </div>  
              </form>      
          </div>

        </template>

    </default-field>

</template>

<script>

  Vue.config.devtools = true;

function  main(category){
  let parent = []
  let child = []
  let parenttemp = []
  let childtemp = []
/*
  parent = category.filter(elem => elem.parent == 0)
  child = category.filter(elem=>elem.parent != 0 )
*/
  for(let i in category){
    //check the category is parent or child
    if(category[i].parent == 0){
      category[i].sub = []
      parent.push(category[i])
    }else{
      category[i].sub = []
      //first inser into child
      child.push(category[i])
    }
  }
//check child has any value
  if(child.length == 0){
    return parent
  }
/*
  for(let i in parent){
    parent[i].sub = []
    child[i].sub = []
    parent[i].sub.push(child.filter( elem => elem.parent == parent[i].id))
    parenttemp.push(child.filter( elem => elem.parent == parent[i].id))
  }
*/

  for(let i in parent){
    for(let j in child){
      //check child parent and parent id is equal
      if(parent[i].id == child[j].parent){
        //insert into sub array the specific child value
        parent[i].sub.push(child[j])
        //first insert into parenttemp
        parenttemp.push(child[j])
      }
    }
  }

  //return parenttemp.map(elem => elem.id)
  //return child.map( elem => elem.id )
//second change in child
  child = child.filter( function( el ) {
    return parenttemp.indexOf( el ) < 0;
  });

  if(child.length == 0){
    return parent
  }

  sub(parenttemp,child)
  return parent
  
}
function sub(parenttemp,child){
    if(child.length == 0){
    return parent
  }

  for(let i in parenttemp){
    for(let j in child){
      if(parenttemp[i].id == child[j].parent){
        parenttemp[i].sub.push(child[j])
        parenttemp.push(child[j])
      }
    }
  }
  //return parenttemp.map(elem => elem.id)
  //return child.map( elem => elem.id )

  child = child.filter( function( el ) {
    return parenttemp.indexOf( el ) < 0;
  });
  
}





import $ from 'jquery'

import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field'],

    data() {
        return {
           // checked: "checked",
           //addcategory.parent: 0
            value: [],
            getcat: [],
            all:[],
            categories:[],
            dropdown:[],
            addcategory:{
                name: "",
                parent:0,
            },

           
        }
    },
    created(){
        const uri = `/getcategories`;
        Nova.request().get(uri).then((response) => {
            this.categories = main(response.data)
        });
    },

    mounted(){
      
       $('#addcat').hide();

       $('#showadd').click(function(e){
            e.preventDefault();
            $('#addcat').show();
            $(this).hide()
       })

       

    },

    computed: {
      catnames : function(){
            let last = this.last
            let category = this.categories
            let names = []
            let checkbox = []
            let remain = []
            let del = '-'
            let space = "     "
            let count = 0;

            category.map(elem => {
              names.push([elem.id,del.repeat(count)+elem.name,count])
              //checkbox.push([elem.id,space.repeat(count)+elem.name])
              if(elem.sub.length > 0){
                //remain.push(names.length)
                subname(elem,count) 
                remain.push(names.length)
              }else{
                return names
              }
              
            })

            function subname(elem,count){
              count++
              if(elem.sub.length < 0){
                return names
              } 
              //count++ 
              elem.sub.map(elem => {
                names.push([elem.id,del.repeat(count)+elem.name,count])
                //checkbox.push([elem.id,space.repeat(count)+elem.name])
                subname(elem,count)
              })
            }
            //return remain

            
              return names
            
       
      }
    },
      
    watch:{

    },


    

    methods: {

        isChecked(option) {
          //check a checkbox is checked or not
          return this.value ? this.value.includes(option) : false
        },

        toggleOption(option) {
          if (this.isChecked(option)) {

            this.$set(this, 'value', this.value.filter(item => item != option))
                return

          }
          
          return this.value.push(option)
          
        },
        setInitialValue() {
          if (typeof this.field.value == 'string') {
            this.value = this.field.value.split(',').map(elem => { return Number(elem)}) || []
          }else{
            this.value = this.field.value || []
          }
        },
        /*
         * Set the initial, internal value for the field.
         */
        // setInitialValue() {
        //   if (typeof this.value == 'string') {
        //     this.value = this.value ?? this.field.value.split(',').map(elem => { return Number(elem)}) ||  []
        //   }
        //   this.value = this.value ? this.field.value || []
        // },
        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
          formData.append(this.field.attribute, this.value || [])
        },
        /**
         * Update the field's internal value.
         */
        handleChange(value) {
          this.value = value
        },
        updatecategory() {
          let uri = `/update-category`;
          Nova.request().post(uri, this.addcategory).then((response) => {  
            // Display a warning toast, with no title
              this.value.push(response.data)
              let key = response.data
              

            const url = `/getcategories`;
            Nova.request().get(url).then((response) => {
                this.categories = main(response.data)
            });                       
          });

        },
        
    },

      
    



    
    
}

        /*

        cat_check (category) {

          //let category = this.categories

          let parentcat = []
          let childcat = []
          
          for(let cat in category){
            if(category[cat].parent == 0){
              parentcat.push(category[cat])
            }else{
              childcat.push(category[cat])
              
            }    
          }

          
          

          for(let i in parentcat){
            parentcat[i].created = []
            
            for(let cat in childcat){
              let a;
              let b;


              b = parentcat[i].id
              a = childcat[cat].parent

              if(a == b){
                parentcat[i].created.push(childcat[cat])
              }
            }
            
          }

          return parentcat
        },
*/
</script>



