<style>

  body  {
    overflow-x:hidden;
  }

  nav {
    display: flex;
    background-color: #333333;
    justify-content: space-around;
    height: 9%;
    align-items: center; 
    width:100%;
    position: fixed;
    z-index: 2;
  }

  nav a {
    color: #bdbebd;
  }

  nav ul  {
    display: flex;
    list-style: none;
    width: 50%;
    justify-content: space-between;
  }

  nav ul li a:hover {
    color:white;
  }

  /* burger menu */
  
  .menu-toggle {
    display:none;
    flex-direction:column;
    height:20px;
    justify-content: space-between;
    position:relative;
    z-index: 2;
  }

  .menu-toggle input {
    position:absolute;
    width:35px;
    height:26px;
    left:-3px;
    top:-3px;
    opacity: 0;
    cursor:pointer;
    z-index:2;
  }

  .menu-toggle span {
    display: block;
    width: 28px;
    height: 3px;
    background-color: #bdbebd;
    border-radius: 3px;
    transition: all 0.5s;
  }

  /* burger animasi */
  
  .menu-toggle span:nth-child(2) {
    transform-origin: 0 0;
  }

  .menu-toggle span:nth-child(4) {
    transform-origin: 0 100%;
  }

  .menu-toggle input:checked ~ span:nth-child(2) {
    background-color:white;
    transform: rotate(45deg) translate(-1px, -1px);
  }

  .menu-toggle input:checked ~ span:nth-child(4) {
    background-color:white;
    transform: rotate(-45deg) translate(-1px, 0);
  }

  .menu-toggle input:checked ~ span:nth-child(3) {
    opacity:0;
    transform: scale(0);
  }

  /* responsive */

  @media screen and (max-width: 1370px) {

    .menu-toggle {
      display:flex;
    }

    nav ul  {
      position:absolute;
      right:0;
      top:0;
      height:100vh;
      align-items:center;
      justify-content:space-evenly;
      flex-direction:column;
      background-color: #333333;
      z-index:2;
      width:50%;
      transform:translateX(100%);
      transition:all 1s;
    }

    nav ul.slide  {
      transform:translateX(0);
    }
  }

</style>

<nav>
  <div>
    <a href="/" style="font-weight:bold; font-size:25px; color:#C2121C">Tim<span style="color:#E8410E">Lab</span></a>
  </div>

  <ul>
    <li><a href="/">Beranda</a></li>
    <li><a href="/sistem_antenna">Sistem Antenna</a></li>
    <li><a href="/sistem_solusi">Sistem Solusi</a></li>
    <li><a href="/layanan">Layanan</a></li>
    <li><a href="/topic">Topik Terkini</a></li>
    <li><a href="/tentang_kami">Tentang Kami</a></li>
    @if(auth()->user())
    <li><a href="/pesanan">Pesanan</a></li>
    @endif
    @if(!auth()->user())   
    <li><a href="/login">Login(Admin)</a></li>
    @endif
    @if(auth()->user())    
    <li><a href="/logout">Logout</a></li>
    @endif
  </ul>

  <div class="menu-toggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
  </div>
</nav>

<script>
  const menuToggle = document.querySelector('.menu-toggle input');
  const nav = document.querySelector('nav ul');

  menuToggle.addEventListener('click',function(){
    nav.classList.toggle('slide');
  });
</script>