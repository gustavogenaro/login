<?php if(!class_exists('Rain\Tpl')){exit;}?>		<form action="" method="post">
			<h2>Acessar</h2>
				<p>
					<label for="login">Login <span class="required">*</span></label>
		    		<input type="text" name="login" >
		        </p>

				<p>
		    		<label for="senha">Senha <span class="required">*</span></label>
		    		<input type="password" name="password">
				</p>
		    		<input type="submit" value="Login" name="login" class="button">    
		    		<a href="/login/views/admin/">acesso admin</a>     
		</form>           
