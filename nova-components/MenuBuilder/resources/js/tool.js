Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'menu-builder',
      path: '/menu-builder',
      component: require('./components/Tool'),
    },
  ])
})
