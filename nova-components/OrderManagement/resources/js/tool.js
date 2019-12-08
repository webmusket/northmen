Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'order-management',
      path: '/order-management',
      component: require('./components/Tool'),
    },
  ])
})
