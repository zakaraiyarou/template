export default function menu(menu, sidebar, main_container) {
  menu.addEventListener('click', (e) => {
    sidebar.classList.toggle('active');
    // alert('Wow Modular Javascript');
    main_container.classList.toggle('active');
  }) 
}

export const resize = (resize, sidebar_link, company_name) => {
  resize.addEventListener('resize', () => {
    console.log(resize.innerWidth);

    if (resize.innerWidth < 720) {
      console.log('hide sidebar nav description');

      console.log(document.documentElement.clientWidth);
      sidebar_link.forEach(element => {
        console.log(element);
        element.classList.add('mobile');
      })
      company_name.classList.add('mobile');

    } else {
      sidebar_link.forEach(element => {
        element.classList.remove('mobile');
      })
      company_name.classList.remove('mobile');
    }
  })
}

export const navigation = (navigation) => {
  const currentLocation = location.href.split('?')[0];

  navigation.forEach(element => {
    console.log(element.href)
    if(element.href === currentLocation) {
      element.classList.add('active');
      element.parentElement.style.backgroundColor = '#F9F9F9';
    }
  });
}
