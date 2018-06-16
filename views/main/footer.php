<!--Início modal-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Log in</h4>
			</div> <!-- /.modal-header -->

			<div class="modal-body">
				<form role="form" class="login" action="?c=l&a=cl" method="POST">
					<div class="form-group">
						<div class="input-group">
							<input type="email" class="form-control" id="uLogin" placeholder="Login" name="email">
							<label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
						</div>
					</div> <!-- /.form-group -->

					<div class="form-group">
						<div class="input-group">
							<input type="password" class="form-control" id="uPassword" placeholder="Password" name="senha">
							<label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
						</div> <!-- /.input-group -->
					</div> <!-- /.form-group -->

					<div class="checkbox">
						<label>
							<input type="checkbox"> Remember me
						</label>
					</div> <!-- /.checkbox -->
					<button class="form-control btn btn-primary">Ok</button>
				</form>

			</div> <!-- /.modal-body -->

			<div class="modal-footer">

				<div class="progress">
					<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
						<span class="sr-only">progress</span>
					</div>
				</div>
			</div> <!-- /.modal-footer -->

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Fim modal-->

<!-- Footer -->

<div class="col-md-12 footer-area">
    <div class="col-md-3 col-md-offset-1 footer-info">
        <h2>CompraTudo</h2>
        <p>Uma rede Ecommerce especializada em vendas de celular,
            pelo melhor preço e condições.
        </p>
    </div>
    <div class="col-md-3 col-md-offset-1 footer-info">
        <h2>Dev by Lucas Cunha</h2>
        <div class="col-md-2 col-md-offset-1 redes-sociais">
            <a href="www.facebook.com" class="fab fa-facebook"></a>
        </div>
        <div class="col-md-2 col-md-offset-2 redes-sociais">
        <a href="www.linkedin.com" class="fab fa-fab fa-linkedin"></a>
        </div>
        <div class="col-md-2 col-md-offset-2 redes-sociais">
            <a href="www.github.com" class="fab fa-github-square"></a>
        </div>
    </div>
    <div class="col-md-3 col-md-offset-1 footer-info">
        <h2>Loren ipsum</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in viverra risus. 
        Cras non semper nulla. Proin scelerisque dolor nisi, at gravida mi consequat in. Nam ac 
        felis nisl. Fusce rutrum, leo eu vulputate porta.</p>
    </div>
</div>

<!-- Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- JS custom -->
<script src="assets/js/script.js"></script>

</body>
</html>