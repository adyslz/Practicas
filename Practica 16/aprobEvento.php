<!DOCTYPE html>
<html class="no-js">
<head>
	<title>HackerGarage :: Aprobar Eventos</title>
    	<?php include("sections/cabecera.html");?>
</head>	
<body>
	<header>
      <div class="wrapper cf">
		<div id="logo">
			<a href="index.php"><h1>Edición de Evento</h1></a>
		</div>
		<?php include("sections/menu.html");?>
	  </div>
    </header>
   <!-- MAIN -->
	<div id="main">
		<div class="wrapper cf">
			<!-- page content-->
	   	<div id="page-content" class="cf">        		
		     	<!-- entry-content -->	
		     	<div class="entry-content cf">	
    				<h2>Eventos</h2>
    				<ul class="listEvent"><a id="inicio"></a>
        				<li id="lshackers">Hackers and Founders</li>
        				<li id="lscotorreo">Cotorreo Locochon</li>
        				<li id="lsparty">Party Night</li>
    				</ul>
    				<ul class="listBtnEvent">
    					<li><button type="button" id="btnhackers" name="hackers" onclick="eventoEleg(this)"> Ver evento </button></a></li>
        				<li><button type="button" id="btncotorreo" name="cotorreo"onclick="eventoEleg(this)"> Ver evento </button></li>
        				<li><button type="button" id="btnparty" name="party" onclick="eventoEleg(this)"> Ver evento </button></li>
    				</ul>
    			<div id="infohackers" class="info" style="display: none; clear: both;">
						<br /><h3>Jueves 30: Hacker and Founders</h3><br />
            		<img src="img/img1.png" alt="" width="200" height="200"><br /><br />
            		<p>Hacker & founders es una comunidad tecn&oacute;logica basada en la pregunta ¿Qu&eacute; Necesitas?
					Conoce a tus futuros socios, solicita ayuda, aprende. Nos reunimos en el &uacute;ltimo Jueves del mes.</p>
						<p><label class="ref">Cuando: </label>Jueves 30 Agosto de 2012, 19hrs
						<label class="ref">Donde: </label> HackerGarage, Vidrio #2188, entre Sim&oacute;n Bolivar y Gral. San Martin, Guadalajra.
						<label class="ref">Precio: </label>$50.00<label class="ref"> Capacidad: </label>50<label class="ref"> Categoria: 
						<a>Conferencia</a> Publicado el 23/08/12 por:<a>@levita</a> </label>
         			</p>
         		<div>
         			<button type="button" onclick="aprobado(1)">Aprobar</button>
         			<button type="button" onclick="rechazado(1)">Rechazar</button>
         			<button type="button" onclick="admModificar(1)">Modificar</button>
         		</div>
         	</div>
         	<div id="infocotorreo" class="info" style="display:none; clear: both;">
        			<br /><h3>Sabado 1: Cotorreo Locochon</h3><br />
            	<img src="img/img1.png" alt="" width="200" height="200"><br /><br />
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam arcu neque, iaculis ac lacinia sit amet, sollicitudin sit 
            	amet magna. Ut fermentum nunc eget odio dapibus eleifend. Aliquam accumsan, mi tristique fringilla mattis, arcu est commodo 
            	nisl, vel commodo est mi at risus. Cras ultrices augue et mauris tristique eget eleifend elit interdum. Duis magna enim, 
            	malesuada eu volutpat ac, dapibus blandit neque. Nulla a nisl felis.
	            </p>
					<p><label class="ref">Cuando: </label>Sabado 1 Septiembre de 2012, 21hrs
					<label class="ref">Donde: </label> Lisboa #112, entre Rogelio Bacon y Normalistas, Guadalajra.
					<label class="ref">Precio: </label>$70.00<label class="ref"> Capacidad: </label>50<label class="ref"> Categoria: 
					<a>Convivencia</a> Publicado el 23/08/12 por:<a>@levita</a> </label></p>
         	<div>
         		<button type="button" onclick="aprobado(2)">Aprobar</button>
         		<button type="button" onclick="rechazado(2)">Rechazar</button>
         		<button type="button" onclick="admModificar(2)">Modificar</button>
         	</div>
        </div>
        <div id="infoparty" class ="info" style="display:none; clear: both;">
        		<br /><h3>Sabado 6: Party Night</h3><br />
            <img src="img/img1.png" alt="" width="200" height="200"><br /><br />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam arcu neque, iaculis ac lacinia sit amet, sollicitudin sit 
            	amet magna. Ut fermentum nunc eget odio dapibus eleifend. Aliquam accumsan, mi tristique fringilla mattis, arcu est commodo 
            	nisl, vel commodo est mi at risus. Cras ultrices augue et mauris tristique eget eleifend elit interdum. Duis magna enim, 
            	malesuada eu volutpat ac, dapibus blandit neque. Nulla a nisl felis.
            </p>
				<p><label class="ref">Cuando: </label>Sabado 6 Octubre de 2012, 22hrs
					<label class="ref">Donde: </label> Federalismo #1234 esq. Circunvalación, Guadalajra.
					<label class="ref">Precio: </label>$70.00<label class="ref"> Capacidad: </label>50<label class="ref"> Categoria: 
					<a>Convivencia</a> Publicado el 30/09/12 por:<a>@levita</a> </label>
         	</p>
         	<div>
         		<button type="button" onclick="aprobado(3)">Aprobar</button>
         		<button type="button" onclick="rechazado(3)">Rechazar</button>
         		<button type="button" onclick="admModificar(3)">Modificar</button>
         	</div>
        </div>		
        				</div>
				    </div>
				    <!-- ENDS entry content -->
	    		</div>
	    		<!-- ENDS page content-->
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
    		<!-- FOOTER -->
		<footer>
			<?php include("sections/piePag.html"); ?>
		</footer>
		<!-- ENDS FOOTER -->
		
</body>
</html>
