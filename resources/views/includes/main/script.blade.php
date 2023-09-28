<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!-- Template JS File -->
<script src="{{ asset('/assets/js/mainscripts.js') }}"></script>

<!-- Global JS -->
<script type="text/javascript">
{{--  navlink  --}}
// Mengambil semua elemen dengan class "nav-link"
const navLinks = document.querySelectorAll('.nav-link');

// Menggunakan forEach untuk menambahkan event listener pada setiap nav-link
navLinks.forEach(navLink => {
    navLink.addEventListener('mouseenter',function(){
      // Mengambil elemen dropdown-menu yang terkait dengan nav-link ini
      const dropdownMenu = navLink.nextElementSibling;
      
      dropdownMenu.classList.add('show');
    
      // Memastikan dropdown-menu ada sebelum menyembunyikan
      if (dropdownMenu) {
        // Menambahkan event listener untuk event "mouseenter" pada dropdown-menu
        dropdownMenu.addEventListener('mouseenter', function () {
          // Menampilkan dropdown-menu
          this.classList.add('show');
        });
    
        // Menambahkan event listener untuk event "mouseleave" pada dropdown-menu
        dropdownMenu.addEventListener('mouseleave', function () {
          // Menyembunyikan dropdown-menu saat mouse meninggalkan menu
          this.classList.remove('show');
        });
      }
    });
    navLink.addEventListener('mouseleave',function(){
      // Mengambil elemen dropdown-menu yang terkait dengan nav-link ini
      const dropdownMenu = navLink.nextElementSibling;
      
      dropdownMenu.classList.remove('show');
    });
});

{{--  background and color navbar  --}}
function CheckMedia(MatchMedia){
  if (MatchMedia.matches) {
    document.querySelector(".fixed-top").classList.remove("navbar-dark");
    document.querySelector(".fixed-top").classList.add("navbar-light");
  } else {
    document.querySelector(".fixed-top").classList.add("navbar-dark");
    document.querySelector(".fixed-top").classList.remove("navbar-light");
  }
}

var MatchMedia = window.matchMedia("(max-width: 992px)");
CheckMedia(MatchMedia);
MatchMedia.addListener(CheckMedia);

window.addEventListener("scroll", function() {
  var scroll = window.scrollY;
  var offset = document.querySelector(".fixed-top").getBoundingClientRect();
  
  function CheckMedia(MatchMedia){
    if (MatchMedia.matches) {
          document.querySelector(".fixed-top").classList.remove("navbar-dark");
          document.querySelector(".fixed-top").classList.add("navbar-light");
    } else{
      if (scroll > offset.top) {
          document.querySelector(".fixed-top").classList.add("fixednav");
          document.querySelector(".fixed-top").classList.add("navbar-light");
          document.querySelector(".fixed-top").classList.add("shadow");
          document.querySelector(".fixed-top").classList.remove("navbar-dark");
      } else {
          document.querySelector(".fixed-top").classList.remove("fixednav");
          document.querySelector(".fixed-top").classList.add("navbar-dark");
          document.querySelector(".fixed-top").classList.remove("shadow");
          document.querySelector(".fixed-top").classList.remove("navbar-light");
      }
    }
  }

  CheckMedia(MatchMedia);
  MatchMedia.addListener(CheckMedia);
});

{{--  onload  --}}
window.addEventListener("load", function() {
  window.scrollTo(0,0);
});

</script>