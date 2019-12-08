Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'super-product',
      path: '/super-product',
      component: require('./components/Tool'),
    },
  ])
})
