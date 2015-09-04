<html>

	<head>

	</head>

	<body>

		<div><b>Nome</b>: <?php echo $this->data['contact-form-name']; ?></div>
		<div><b>Email</b>: <?php echo $this->data['contact-form-mail']; ?></div>
		<div><b>Mensagem</b>: <?php echo nl2br($this->data['contact-form-message']); ?></div>

	</body>

</html>
