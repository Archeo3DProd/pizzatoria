<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('home') }}">Pizzatoria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}" onclick="navbarActive(this, 0)">Nos Pizzas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('composer') }}" onclick="navbarActive(this, 1)">Composez votre Pizza</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('panier') }}" onclick="navbarActive(this, 2)">Panier</a>
      </li>
    </ul>
  </div>
</nav>

<script>


  function retrieveActiveLink() {
    retrievedLink = localStorage.getItem('navbaractivelinkIndex');
		const liens = document.getElementsByClassName("nav-link");
		for (i = 0; i < liens.length; i++) {
			if (liens[i].closest('li').classList.contains('active')) {
			liens[i].closest('li').classList.remove('active')
			}
		}
    link = document.getElementsByClassName('nav-item')[retrievedLink];
    link.classList.add('active');
  }
  retrieveActiveLink()
	
  function navbarActive(lienClique, index) {
    localStorage.setItem('navbaractivelinkIndex', index);
	}
	</script>