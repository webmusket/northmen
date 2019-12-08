Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'super-customization',
      path: '/super-customization',
      component: require('./components/Tool'),
    },
  ])
})
