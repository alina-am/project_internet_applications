<div id=menu>
      <a href="./index.php" id=logo >Adopții</a>
      <div class="links">
        <a class="menu_link" href="./informatii.php">Informații</a>
        <a class="menu_link" href="./adopta.php">Adoptă</a>
        <a class="menu_link" href="./pierdut.php">Găsit/Pierdut</a>
        <a class="menu_link" href="./contact.php">Contact</a>
        <a class="menu_link" href="./admin.php">Admin</a>
      </div>
      
      <div id="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
</div>

<script>
const menuSlide = () => {
    const burger = document.getElementById("burger");
    const links = document.getElementsByClassName("links")[0];

    burger.addEventListener('click', () => {
        console.log(links.classList)
        links.classList.toggle('active');
    })
}
menuSlide();
</script>

<style>
#menu a
 {
   color: black;
   padding: 24px;
   text-decoration: none;
 }
#menu a:hover, #menu a:active {
  transform: scale(1.1);
   border-radius: 15px;
   box-shadow: 2px 4px 8px gray ;
	background-color:rgb(225, 225, 225);
}
#menu {
  background-color: whitesmoke;
  height: 8vh;
  min-height: 60px;
  display: flex;
  flex-flow: row nowrap;
  justify-content: space-around;
  align-items:center;
  position: fixed;
  top:0px;
  width: 100%;
  z-index: 5;
}
#logo{
  font-size: 25px;
  letter-spacing: 2px;
}
.links {
  width: 70%;
  display: flex;
  flex-flow: row nowrap;
  justify-content: space-around;
}
#burger {
  display:none;
}
#burger .line {
  width: 25px;
  height: 3px;
  background-color: black;
  margin: 5px;
}


@media screen and (max-width: 850px) {
  
  /* burger menu */
  body {
    overflow-x: hidden;
  }
  #burger {
    display: block;
    width: 25px;
    margin: 40px;
    cursor: pointer;
  }
  #logo {
    margin: 20px;
  }
  #menu {
    justify-content: space-between;
  }
  .links { 
    display: none;
    position: absolute;
    right: 0px;
    height: 92vh;
    top: 8vh;
    background-color:  whitesmoke;
    display: flex;
    flex-flow: column wrap;
    align-items: center;
    width: 25%;
    transform: translateX(100%);
    transition: transform 0.5s ease-in;
  }
  .links li{
    opacity: 0;
  }  
}

.active {  
  display: block;
  position:absolute;
  right: 0px;
  height: 92vh;
  top: 8vh;
  background-color:  whitesmoke;
  display: flex;
  flex-flow: column wrap;
  align-items: center;
  width: 25%;
  transition: transform 0.5s ease-in;
  transform: translateX(0%);
}

@keyframes menuFade{
  from{
    opacity:0;
    transform: translateX(50px);
  }
  to{
    opacity: 1;
    transform: translateX(0px);
  }
}

</style>
