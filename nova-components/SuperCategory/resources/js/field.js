var $ = require("jquery");

Nova.booting((Vue, router, store) => {
	
  Vue.component('index-super-category', require('./components/IndexField'))
  Vue.component('detail-super-category', require('./components/DetailField'))
  Vue.component('form-super-category', require('./components/FormField'))
})
