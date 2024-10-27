document.onreadystatechange = () => {
  if (document.readyState === 'complete') {
    initApp()
  }
}

const initApp = () => {
  console.log('App Init!')
  addCategoryClickEvents()
}

const addCategoryClickEvents = () => {
  [...document.querySelectorAll('.category')].forEach((el) => {
    el.addEventListener('click', (event) => {
      const selectedEl = event.target
      const category   = selectedEl.getAttribute('data-category')

      filterSites(category)
    });
  });
}

const filterSites = (selectedCategory) => {
  [...document.querySelectorAll('.site')].forEach((el) => {
    const siteCategory = el.getAttribute('data-category')

    if (selectedCategory === 'all' || siteCategory === selectedCategory) {
      el.style.display = ''
    } else {
      el.style.display = 'none'
    }
  })
}
