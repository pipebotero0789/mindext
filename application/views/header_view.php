<?php 
   $valorSession = $this->uri->segment(2);
?>
<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>Home"><img src="<?php echo base_url();?>file/images/logo.png" alt="logo"></a> </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li <?php if ($this->uri->segment(1) == 'Home' or $this->uri->segment(1) == ''): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home">Inicio </a></li>
        <li <?php if ($this->uri->segment(1) == 'Home' and $this->uri->segment(2) == 'belgorod' or $this->uri->segment(2) == 'ekaterinburgo' or $this->uri->segment(2) == 'kazan' or $this->uri->segment(2) == 'moscu' or $this->uri->segment(2) == 'nizhny' or $this->uri->segment(2) == 'moscu' or $this->uri->segment(2) == 'novosibirsk' or $this->uri->segment(2) == 'rostov' or $this->uri->segment(2) == 'sanPetersburgo' or $this->uri->segment(2) == 'samara' or $this->uri->segment(2) == 'saratov' or $this->uri->segment(2) == 'sochi' or $this->uri->segment(2) == 'vladimir' or $this->uri->segment(2) == 'vladivostok' or $this->uri->segment(2) == 'volgogrado' or $this->uri->segment(2) == 'ufa' ): echo 'class="active"'; endif; ?> class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Ciudades <i class="icon-angle-down"></i></a>
          <ul class="dropdown-menu">
            <li <?php if ($valorSession == 'belgorod'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/belgorod">Bélgorod</a></li>
            <li <?php if ($valorSession == 'ekaterinburgo'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/ekaterinburgo">Ekaterimburgo</a></li>
            <li <?php if ($valorSession == 'kazan'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/kazan">Kazán</a></li>
            <li <?php if ($valorSession == 'moscu'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/moscu">Moscú</a></li>
            <li <?php if ($valorSession == 'nizhny'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/nizhny">Nizhny Novgorod</a></li>
            <li <?php if ($valorSession == 'novosibirsk'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/novosibirsk">Novosibirsk</a></li>
            <li <?php if ($valorSession == 'rostov'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/rostov">Rostov</a></li>
            <li <?php if ($valorSession == 'sanPetersburgo'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/sanPetersburgo">San Petersburgo</a></li>
            <li <?php if ($valorSession == 'samara'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/samara">Samara</a></li>
            <li <?php if ($valorSession == 'saratov'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/saratov">Saratov</a></li>
            <li <?php if ($valorSession == 'sochi'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/sochi">Sochi</a></li>
            <li <?php if ($valorSession == 'vladimir'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/vladimir">Vladímir</a></li>
            <li <?php if ($valorSession == 'vladivostok'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/vladivostok">Vladivostok</a></li>
            <li <?php if ($valorSession == 'volgogrado'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/volgogrado">Volgogrado</a></li>
            <li <?php if ($valorSession == 'ufa'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/ufa">Ufá</a></li>
          </ul>
        </li>
        <li <?php if ($this->uri->segment(1) == 'Home' and $this->uri->segment(2) == 'inscripcion'): echo 'class="active"'; endif; ?> class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Proceso Académico <i class="icon-angle-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url(); ?>Home/inscripcion">Procedimiento de Inscripción</a></li>
            <li><a href="<?php echo base_url(); ?>Home/inscripcion">Preparatoria</a></li>
            <li><a href="<?php echo base_url(); ?>Home/inscripcion">Pregrado o Posgrado</a></li>
          </ul>
        </li>
        <li <?php if ($valorSession == 'testimonio'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/testimonio">Testimonios </a></li>
        <li <?php if ($this->uri->segment(1) == 'universidad'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>universidad">Universidades</a></li>
        <li <?php if ($valorSession == 'pregunta'): echo 'class="active"'; endif; ?>><a href="<?php echo base_url(); ?>Home/pregunta">Preguntas Frecuentes</a></li>
      </ul>
    </div>
  </div>
</header>
<!--/header-->