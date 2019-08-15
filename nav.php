<style>
@import url('https://fonts.googleapis.com/css?family=Vast+Shadow&display=swap');
    
    
    nav{
        background: #B1854E;
    }
    
    nav .collapse .navbar-nav li .nav-link {
        border: 1px solid #FFEAD0;
        border-radius: 5px;
        margin-right: 10px;
        transition: all .3s ease-in-out;
    }
    
    nav .navbar-toggler {
        border: 1px solid #FFEAD0;
        border-radius: 5px;
    }
    
    nav .navbar-toggler .navbar-toggler-icon{
        color: #FFA432;
    }
    
    nav .collapse .navbar-nav li .nav-link:hover{
        background: #774200;
        color: #FFA432;
    }
    
    nav .navbar-brand, nav .collapse .navbar-nav li .nav-link{
        color: #FFEAD0;
    }
    
    
    
</style>


 <nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#" style="font-family: 'Vast Shadow', cursive; font-size: 2rem;">Who's this?</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="directory.php">Directory</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link left" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>