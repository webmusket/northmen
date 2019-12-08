Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'super-discount',
      path: '/super-discount',
      component: require('./components/Tool'),
    },
  ])
})
