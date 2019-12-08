//import Vuex from 'vuex'
//import storeData from "./store"


Nova.booting((Vue, router, store) => {

	Vue.config.devtools = true
	//Vue.use(Vuex)

	
	//store.storeData
	


	
    router.addRoutes([
        {
            name: 'reports',
            path: '/reports',
            component: require('./components/Tool'),
        },
    ])

    
});


