<?php
include 'config.php';
if (isset($_POST['bEnviar'])) {

}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Festival Musical</title>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#ff2e01">
	<meta name="MobileOptimized" content="width">
	<meta name="HandhledFriendly" content="true">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar" content="black-traslucent">

	<!--Tags SEO-->
	<meta name="author" content="Evento - Plastimedia">
	<meta name="description" content="Aplicativo para el registro al Evento - Plastimedia">
	<meta name="keyworks" content="evento, Evento, registro, Registro">

	<!--Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/img/img2.png">
	<link rel="apple-touch-icon" type="image/png" href="assets/img/img2.png">

	<!--Styles css-->
	<link rel="stylesheet" href="assets/styles/styles.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!--Bootstrap Icons-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<!--Datatables Styles-->
	<link rel="stylesheet" type="text/css" href="assets/datatables/css/jquery.dataTables.css">

	<!--Datatables Buttons-->
	<link rel="stylesheet" type="text/css" href="assets/datatables/css/buttons.dataTables.css">

	<!--Datatables Responsive-->
	<link rel="stylesheet" type="text/css" href="assets/datatables/css/responsive.dataTables.min.css">

	<!--Datatables Scripts-->
	<script type="text/javascript" src="assets/datatables/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/datatables/js/jquery.dataTables.min.js"></script>

	<!--Datatables responsive script-->
	<script type="text/javascript" src="assets/datatables/js/dataTables.responsive.min.js"></script>

	<!--Datatables Buttons Prints Script-->
	<script type="text/javascript" src="assets/datatables/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="assets/datatables/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="assets/datatables/js/jszip.min.js"></script>
	<script type="text/javascript" src="assets/datatables/js/pdfmake.min.js"></script>
	<script type="text/javascript" src="assets/datatables/js/vfs_fonts.js"></script>
	<script type="text/javascript" src="assets/datatables/js/buttons.html5.js"></script>
	<script type="text/javascript" src="assets/datatables/js/buttons.print.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$('#tableresponsive').DataTable({
				dom: 'Bflrtip',
				buttons: [
					{//Botón Copy
						extend: 'copyHtml5',
						footer: true,
						titleAttr: 'Copiar',
						className: 'btn btn-outline-primary btn-md',
						text: '<i class="bi bi-clipboard"></i>'
					},
					{//Botón Excel
						extend: 'excelHtml5',
						footer: true,
						titleAttr: 'Excel',
						className: 'btn btn-outline-success btn-md',
						text: '<i class="bi bi-file-excel"></i>'
					},
					{//Botón Pdf
						extend: 'pdfHtml5',
						footer: true,
						titleAttr: 'PDF',
						className: 'btn btn-outline-danger btn-md',
						text: '<i class="bi bi-filetype-pdf"></i>'
					},
					{//Botón print
						extend: 'print',
						footer: true,
						titleAttr: 'Imprimir',
						className: 'btn btn-outline-info btn-md',
						text: '<i class="bi bi-printer"></i>'
					},
				],
				responsive: true,
				language: {
					url: 'assets/datatables/es-ES.json'
				},
			});
		});
	</script>
</head>

<body>
	<main class="table-container">
	<a href="./" class="botonlist"><i class="fas fa-undo-alt botonlist-icon"></i></a>
		<table id="tableresponsive" style="width:100%;">
		<h1 class="title text-center"><em>Usuarios Registrados<em></h1>
			<thead>
				<td>ID</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Email</td>
				<td>Telefono</td>
				<td>Tipo de boleto</td>
			</thead>
			<?php
			$administrador = "SELECT * FROM usuarios";
			$result = mysqli_query($conn, $administrador);

			while ($mostrar = mysqli_fetch_array($result)) {
				?>
				<tbody>
					<td>
						<?php echo $mostrar['id'] ?>
					</td>
					<td>
						<?php echo $mostrar['fname'] ?>
					</td>
					<td>
						<?php echo $mostrar['lname'] ?>
					</td>
					<td>
						<?php echo $mostrar['email'] ?>
					</td>
					<td>
						<?php echo $mostrar['phone'] ?>
					</td>
					<td>
						<?php echo $mostrar['tickettype'] ?>
					</td>
				</tbody>
				<?php
			}
			?>
		</table>
	</main>
</body>
</html>